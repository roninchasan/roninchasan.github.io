<?php 
$cookie_name = "repeat-visit-resume";
setcookie($cookie_name, 'TRUE', time() + (3600));

$title = "Résumé";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <title>Ronin Chasan - <?php echo $title ?></title>
    <meta name="description" content="A detailed account of my professional and extracurricular experiences.">
    <meta name="keywords" content="Ronin Chasan, Web Dev, Software, Data Science">
    <meta name="author" content="Ronin Chasan">
</head>
<body>

    <?php 
        if(!isset($_COOKIE[$cookie_name])) {
            //first time visit (yes animations)
            include("includes/first-navbar.php"); 
            include("includes/first-header.php"); 
        }else{
            //repeat visit (no animations)
            include("includes/navbar.php"); 
            include("includes/header.php");
        }    
    ?>

    <div <?php if(!isset($_COOKIE[$cookie_name])) { echo "class='intro-first'";} else { echo "class='intro'";}?>>
        <p>Accompanying my years of courses in information technology have been a number of real world and extracurricular
            experiences. These have helped give me a better sense of how businesses and groups function, interact, and produce, not
            to mention give me new connections and skills. I've selected a relevant few of these experiences and listed what I did below.</p>
    </div>
    <div class="container" <?php if(!isset($_COOKIE[$cookie_name])) { echo "id='resume'";}?>>
        <div class="card">
            <div class="top">
                <h2 class="org">Cornell Hyperloop Project Team</h2>
                <h3 class="place">Ithaca, NY</h3>
            </div>
            <div class="second">
                <h2 class="role">Web Development/Business Sub Team Lead</h2>
                <h3 class="time">February 2021 - Present</h3>
            </div>
            <ul class="resume-list">
                <li>Lead and direct team in debugging, remodeling, and adding new content to <a target="_blank" rel="noopener noreferrer" href="https://hyperloop.cornell.edu/">team website</a>; run weekly meetings with sub team</li>
                <li>Participate in weekly meetings with other team leads to help determine direction and priorities of the project team</li>
                <li>Assisted in managing the public face of the project team to both students and sponsors</li>
            </ul>
            <div class="second">
                <h2 class="role">Web Development/Business Sub Team Member</h2>
                <h3 class="time">February 2020 - February 2021</h3>
            </div>
            <ul class="resume-list">
                <li>Collaborate with other sub team members in debugging/remodeling <a target="_blank" rel="noopener noreferrer" href="https://hyperloop.cornell.edu/">existing website</a>, adding new content to site</li>
                <li>Assist in managing the public face of the project team to both students and sponsors, including the website, social media presence, as well as taking and curating photos/videos to be publicized</li>
                <li>Support members of software engineering team in completing assigned tasks when available</li>
                <li>Create new platforms to assist in greater transparency and efficiency for the entire team (i.e. a live blog platform)</li>
            </ul>
        </div>

        <div class="card">
            <div class="top">
                <h2 class="org">Carter & Clyde</h2>
                <h3 class="place">Plainview, NY (Remote)</h3>
            </div>
            <div class="second">
                <h2 class="role">Content Marketing and SEO Intern</h2>
                <h3 class="time">June 2020 - July 2020</h3>
            </div>
            <ul class="resume-list">
                <li>Research and write SEO optimized <a href="https://carterclyde.com/blogs/collegeblog/tagged/roninchasan">blog articles</a></li>
                <li>Drive traffic and engagement that translates to sales and brand promotion</li>
                <li>Identify and execute opportunities for strategic partnerships with various publishers, brands and blogs</li>
                <li>Analyze and track performance of existing content to gauge the success of our digital efforts and to make necessary change</li>
            </ul>
        </div>

        <div class="card">
            <div class="top">
                <h2 class="org">Magnatech Business Systems Inc.</h2>
                <h3 class="place">Plainview, NY</h3>
            </div>
            <div class="second">
                <h2 class="role">Web Designer</h2>
                <h3 class="time">January 2018 – August 2018</h3>
            </div>
            <ul class="resume-list">
                <li>Updated and redesigned the <a target="_blank" rel="noopener noreferrer" href="https://magnatechonline.com/">corporate website</a> for a technology/computer consulting company</li>
                <li>Used WordPress, as well as custom HTML and CSS code to create layout of website</li>
                <li>Rewrote and added content according to desires of company</li>
            </ul>
        </div>

        <div class="card">
            <div class="top">
                <h2 class="org">Cornell Autonomous Bicycle Project Team</h2>
                <h3 class="place">Ithaca, NY</h3>
            </div>
            <div class="second">
                <h2 class="role">Web Development Project Team</h2>
                <h3 class="time">November 2018 – December 2018</h3>
            </div>
            <ul class="resume-list">
                <li>Led project team that entirely redesigned and rewrote the <a target="_blank" rel="noopener noreferrer" href="https://bike.engineering.cornell.edu/index.html">website for CUAB</a></li>
                <li>Site was written using HTML and CSS code to organize and format, in addition to use of JavaScript to add interactive elements to the site</li>
                <li>Support members of software engineering team in completing assigned tasks when available</li>
                <li>Collaborated with client, including through in-person and email discussions, to achieve their goals and objectives for the website</li>
            </ul>
        </div>

        <div class="card">
            <div class="top">
                <h2 class="org">Cornell Chapter of the Delta Chi Fraternity</h2>
                <h3 class="place">Ithaca, NY</h3>
            </div>
            <div class="second">
                <h2 class="role">Risk Manager</h2>
                <h3 class="time">August 2019- May 2020</h3>
            </div>
            <ul class="resume-list">
                <li>Identify and analyze areas of potential risk to chapter property, the brotherhood, and any guests on chapter property
                <li>Enforce existing risk management policies for all aspects of activity of the chapter</li>
                <li>Regularly meet with executive board members and housing corporation board to adapt/enhance risk management policies currently in place, and recommending ways to control, reduce, or transfer risk.</li>
            </ul>
        </div>
    </div>

    <footer>
        <nav id ="footer-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="resume.php">Résumé</a></li>
                <li><a href="classes.php">Classes</a></li>
                <li><a href="projects.php">Projects</a></li>
            </ul>
        </nav>
        <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/ronin-chasan">
            <img alt="LinkedIn Icon" src="../images/linkedin.png" class="icon" id="linkedin">
        </a>
        <a target="_blank" rel="noopener noreferrer" href="mailto:roninchasan@gmail.com">
            <img alt="Email Icon" src="../images/email-icon.png" class="icon" id="email">
        </a>
        
        <cite class="icon-cite">All icons are from flaticon.com</cite>
    </footer>
</body>

</html>