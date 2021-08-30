<?php 
$cookie_name = "repeat-visit-classes";
setcookie($cookie_name, 'TRUE', time() + (3600));

$title = "Classes";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <title>Ronin Chasan - <?php echo $title ?></title>
    <meta name="description" content="The classes I have taken that have helped me build the skills to build this site and an array of other projects">
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
        <p>Throughout my time in high school and at Cornell, I've taken a number of courses that have helped give
            me the skills and knowledge to get me where I am today. Below is a list and short description of some of these courses.</p>
    </div>
    <div class="column-container">
        <div <?php if(!isset($_COOKIE[$cookie_name])) { echo "class='column-left'";} else { echo "class='column-normal'";}?>>
            <h2 class="intro-header">Major-relevant courses</h2>
            <div class="card">
                <h2>INFO 2950 – Intro to Data Science</h2>
                <p>Taught basic mathematical methods for information science, with applications to data science.
                    Topics include discrete probability, Bayesian methods, graph theory, power law distributions, Markov models,
                    and hidden Markov models. Uses examples and applications from various areas of information science such as the
                    structure of the web, genomics, social networks, natural language processing, and signal processing. Coding skills
                    taught included creating statistical models using NumPy, reading/working with dataframes using Pandas, evaluating
                    models using SKLearn, and graphing using MatPlotLib.</p>
            </div>
            <div class="card">
                <h2>INFO 2300 – Intermediate Design and Programming for the Web</h2>
                <p>The main emphasis in INFO 2300 was learning about server side processing. We began with a short overview of
                    PHP, then looked at interactions with databases, learning about querying via the database language SQL.
                    Through a succession of projects, we learned how to apply this understanding to
                    the creation of an interactive, data-driven site via PHP and the MYSQL database. Also touched upon were technologies
                    such as Javascript and Ajax and techniques to enhance security and privacy. Design and usability issues were
                    emphasized. </p>
            </div>
            <div class="card">
                <h2>CS 2110 – Object-Oriented Programming and Data Structures (with Java)</h2>
                <p>Intermediate programming course where topics included object-oriented
                    programming (classes, objects, subclasses, types), graphical user interfaces, algorithm analysis
                    (asymptotic complexity, big "O" notation), recursion, testing, program correctness (loop invariants),
                    searching/sorting, data structures (lists, trees, stacks, queues, heaps, search trees, hash tables, graphs),
                    graph algorithms.</p>
            </div>
            <div class="card">
                <h2>INFO 2040 – Networks</h2>
                <p>This interdisciplinary course examined network structures and how they matter in everyday life.
                    The course examined how each of the computing, economic, sociological and natural worlds are connected
                    and how the structure of these connections affects each of these worlds. Tools of graph theory and game
                    theory were taught and then used to analyze networks. Topics included the web, the small world phenomenon,
                    markets, neural networks, contagion, search and the evolution of networks.</p>
            </div>
            <div class="card">
                <h2>INFO 1200 – Information Ethics, Law, and Policy</h2>
                <p>This course investigates the ethical, legal, and policy foundations of contemporary information technology.
                    Topics include telecom/network policy, big data, intellectual property, privacy, security, and freedom of speech/information.
                    Assignments included writing policy reccommendations, judicical case summaries, and weekly discussions.</p>
            </div>
            <div class="card">
                <h2>INFO 4240 – Designing Technology for Social Impact</h2>
                <p>This course, drew upon science & technology studies, technology design, and the arts to analyze the values
                    embodied in technology design and to design technologies to promote positive social impact. What social and
                    cultural values do technology designs consciously or unconsciously promote? To what degree can social impact be
                    "built into" a technology? How can we take social and cultural values into account in design?</p>
            </div>
        </div>

        <div <?php if(!isset($_COOKIE[$cookie_name])) { echo "class='column-right'";} else { echo "class='column-normal'";}?>>
            <h2 class="intro-header">Minor-relevant courses and High School courses</h2>
            <div class="card">
                <h2>AEM 1200 – Introduction to Business Management</h2>
                <p>This class provided an overview of management and how businesses function. Human resources, marketing, finance, and strategy
                    concerns are addressed with consideration paid to current issues such as technological innovation and its impact
                    on operations, globalization, ethics, teamwork, leadership, and entrepreneurship.</p>
            </div>
            <div class="card">
                <h2>AEM 2210 – Financial Accounting</h2>
                <p>Comprehensive introduction to financial accounting concepts and techniques, intended to provide a
                    basic understanding of the accounting cycle, elements of financial statements, underlying theory of GAAP,
                    and financial statement interpretation. Topics included methods of recording inventory, receivables, depreciation,
                    bonds, and equity.</p>
            </div>
            <div class="card">
                <h2>ECON 1110 – Introduction to Microeconomics</h2>
                <p>This course offered an explanation and evaluation of how the price system operates in determining what goods are produced,
                    how goods are produced, who receives income, and how the price system is modified and influenced by
                    private organizations and government policy. It also studied how individual consumers are affected by greater indfluences and how they make decisions about making purchases.</p>
            </div>
            <div class="card">
                <h2>AP Calculus BC</h2>
                <p>This class explored the concepts, methods, and applications of differential and integral calculus, including topics such as parametric, polar, and vector functions, as well as series, to name a few.</p>
            </div>
            <div class="card">
                <h2>AP Physics C</h2>
                <p>This course was broken down into two sections: mechanics and electricity & magneteism. The mechanics section
                    explored concepts such as kinematics; Newton’s laws of motion, work, energy, and power; systems of particles and
                    linear momentum; rotation; oscillations; and gravitation. The electricity & magnetism section dove into concepts
                    such as electrostatics, conductors, capacitors and dielectrics, electric circuits, magnetic fields, and electromagnetism.
                    Both sections involved mathematics, graphing, calculus, and labratory experiments.
                </p>
            </div>
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