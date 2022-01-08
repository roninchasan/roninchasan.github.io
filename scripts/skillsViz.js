const graphsvg = d3.select("#graph");

let windowHeight = window.innerHeight;
let windowWidth = window.innerWidth;
let margin = {top: 10, right: 10, bottom: 50, left: 120};

let fontSize = "12px";

if (windowWidth < 350){
    graphsvg.attr('width', 260).attr("height", 240);
    margin = {top: 10, right: 10, bottom: 50, left: 80};
    fontSize = "10px";
} else if (windowWidth < 500){
    graphsvg.attr('width', 280).attr("height", 250);
    margin = {top: 10, right: 10, bottom: 50, left: 84};
    fontSize = "11px";
} else if (windowWidth < 787){
    graphsvg.attr('width', 400).attr("height", 350);
    margin = {top: 10, right: 10, bottom: 50, left: 100};
} else if (windowWidth < 1300){
    graphsvg.attr('width', 550).attr("height", 480);
    fontSize = "16px";
    margin = {top: 10, right: 10, bottom: 50, left: 120};
} else{
    graphsvg.attr('width', 900).attr("height", 700);
    fontSize = "18px";
    margin = {top: 10, right: 10, bottom: 70, left: 180};
}
const graphSVGWidth = Number(graphsvg.attr("width"));
const graphSVGHeight = Number(graphsvg.attr("height"));
const chartWidth = graphSVGWidth - margin.left - margin.right;
const chartHeight = graphSVGHeight - margin.top - margin.bottom;
let annotations = graphsvg.append("g").attr("id","annotations");
let graphArea = graphsvg.append("g").attr("id","graphArea")
        .attr("transform",`translate(${margin.left},${margin.top})`)

const requestData = async function() {

    const skills = await d3.csv("data/skills.csv");
    console.log(skills)
    
    let general = skills.filter((d) => { return d["Class"]==="general"});
    let webdev = skills.filter((d) => { return d["Class"]==="webdev"});
    let data = skills.filter((d) => { return d["Class"]==="data"});

    const skillScale = d3.scaleLinear().domain([0,10]).range([0, chartHeight]);
    let bottomAxis = d3.axisBottom(skillScale);
    let bottomGridlines = d3.axisBottom(skillScale)
                          .tickSize(chartHeight+3)
                          .tickFormat("")
    annotations.append("g")
               .attr("class", "y axis")
               .attr("transform",`translate(${margin.left-10},${margin.top+chartHeight})`)
               .call(bottomAxis)
    annotations.append("g")
               .attr("class", "y gridlines")
               .attr("opacity", "0.5")
               .attr("transform",`translate(${margin.left-10},${margin.top})`)
               .call(bottomGridlines);

    let leftAxis = d3.axisLeft()
    let leftAxisG = annotations.append("g")
                             .attr("class", "y axis")
                             .attr("transform",`translate(${margin.left-10},${margin.top})`)    
    
    function updateBarsAnimated(classKey) {
      classKey = classKey.toLowerCase();

      const data = skills.filter((d) => { return d["Class"]===classKey});
      
      const skillNames = d3.map(data, d => d['Skill']) 
      const skillNameScale = d3.scaleBand().domain(skillNames).range([0, chartHeight])
                                       .padding(0.1);
      
      leftAxis.scale(skillNameScale)
      leftAxisG.transition().call(leftAxis);
      
      graphArea.selectAll('rect.bar').data( data, d => d['Skill'] )
               .join( enter => enter.append('rect')
                                    .attr('class','bar')
                                    .attr("fill", "white")
                                    .attr("y", d => skillNameScale(d['Skill']))
                                    .attr("x", -10)
                                    .attr("width", d => skillScale(d['Rating']) - skillScale(0))
                                    .attr("height", skillNameScale.bandwidth())
                                    .attr("opacity", 0) // Set opacity low, then animate to 1 to make them fade in
                                    .call( enter => enter.transition().attr('opacity',0.8) ),
                                    

                      update => update.call( update => update.transition()  // Animate resizing and movement
                                                             .attr("fill", "steelblue")
                                                             .attr("y", d => skillNameScale(d['Skill']))
                                                             .attr("x", d => skillScale(d['Rating']))
                                                             .attr("width", d => skillScale(d['Rating']) - skillScale(0))
                                                             .attr("height", skillNameScale.bandwidth()) ),
                      exit => exit.call( exit => exit.transition().attr('opacity',0).remove() ) ); // Animate opacity to fade out
        
        d3.selectAll("text").style("font-family", "'Kayak Sans Regular', 'Tahoma', 'Verdana', Arial, sans-serif")
        d3.selectAll("text").style("font-size", fontSize)

    }   
 
    // const allKeys = Object.keys(skills).sort();
    const allKeys = ['General', 'Web', "Data"]
    allKeys.forEach( d => {
      // For each year key, add a new button to the button bar

      if (d=='General'){
        d3.select("div#skill-buttons")
            .append("button")
            .text( d )
            .attr("class", "active-button")
            .attr('disabled', 'disabled')
            .on("click", function() {
            // When it's clicked, call updateBars to update the chart
                updateBarsAnimated( d );
                d3.selectAll("div#skill-buttons button").attr("class", "").attr('disabled', null);
                d3.select(this).attr("class", "active-button").attr('disabled', "disabled")
            })
        }else{
            d3.select("div#skill-buttons")
            .append("button")
            .text( d )
            .on("click", function() {
                // When it's clicked, call updateBars to update the chart
                updateBarsAnimated( d );
                d3.selectAll("div#skill-buttons button").attr("class", "").attr('disabled', null);
                d3.select(this).attr("class", "active-button").attr('disabled', "disabled");
            })
        }
    });
    
    
    // We do not want to start with a blank screen, so call it once
    updateBarsAnimated('General');


    //general svg text styling
    d3.selectAll("text").style("font-family", "'Trebuchet MS', 'Tahoma', 'Verdana', Arial, sans-serif");
    d3.selectAll("text").style("font-size", fontSize)
}
requestData();