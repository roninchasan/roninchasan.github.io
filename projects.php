<?php 
$cookie_name = "repeat-visit-projects";
setcookie($cookie_name, 'TRUE', time() + (3600));

$title = "Projects";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <title>Ronin Chasan - <?php echo $title ?></title>
    <meta name="description" content="This page contains a portfolio of each of the software, web development, and data science projects that I have completed.">
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

    <p <?php if(!isset($_COOKIE[$cookie_name])) { echo "class='intro-first'";} else { echo "class='intro'";}?>>On this page, I've selected some of my best personal and class projects from each domain of programming that I have experience in. They are organized by category below. Each project card is linked to either a live iteration of the website (for web dev) or the full code on my GitHub (for data science and applications).</p>
    <div <?php if(!isset($_COOKIE[$cookie_name])) { echo "class='section-first'";} else { echo "class='section'";}?> id="sec1">
        <h2>Web Development</h2>
        <p>I've been creating static and dynamic web pages for a few years now. I'm progressing towards more
            advanced work and am currently in the process of developing my first web application, a live updating blog for
            my project team using Firebase and React. That said, I have a number of individual and group web pages built from scratch with HTML, CSS, JS, PHP, and SQLite, as shown here:</p>

        <h3>Individual Projects</h3>
        <div class="project-container">
            <div class="project-card">
                <a href='https://album-alley.herokuapp.com/' target="_blank" rel="noopener noreferrer">
                    <div class="web-dev">
                        <img src="images/albumalley-screenshot.png" alt="Album Alley Screenshot">
                        <h4>"Album Alley"</h4>
                        <p>Album Alley is a class project that I adapted into a personal project. It is a photo gallery of a small assortment of hip hop albums that is made functional with the use of an SQL database. It supports tag sorting, adding new albums, addings new tags to existing posts, and tag deletion.</p>
                    </div>
                </a>
            </div>
            <div class="project-card">
                <a href='https://magnatechonline.com/' target="_blank" rel="noopener noreferrer">
                    <div class="web-dev">
                        <img src="images/magnatech-screenshot.png" alt="Magnatech Screenshot">
                        <h4>Magnatech Business Systems Inc.</h4>
                        <p>In 2018, I redesigned the website for Magnatech from the ground up. In addition to redesigning the company logo and creating a 30th anniversary logo, I reconstructed the website through Wordpress. In doing so, I worked with the company on slimming down the amount of content on the site and redesigned every element of every page with Wordpress and some inserted custom code.</p>
                    </div>
                </a>
            </div>

            <div class="project-card">
                <a href='https://lift-list.herokuapp.com/' target="_blank" rel="noopener noreferrer">
                    <div class="web-dev">
                        <img src="images/liftlist-screenshot.png" alt="Lift List Screenshot">
                        <h4>"The Lift List"</h4>
                        <p>The Lift List was a quick project I created with class to help develop my SQL database skills and knowledge. This site is a list of weightlifting workouts stored in an SQLite database that is fully searchable. It also allows users to add their own workouts to the list.</p>
                    </div>
                </a>
            </div>

            <div class="project-card">
                <a href='https://applefest2018.herokuapp.com/index.php' target="_blank" rel="noopener noreferrer">
                    <div class="web-dev">
                        <img src="images/applefest-screenshot.png" alt="AppleFest Screenshot">
                        <h4>"2018 Ithaca Apple Harvest Festival"</h4>
                        <p>One of my earliest websites, this site is a mock up for an annual apple harvest festival held in Ithaca, NY, specifically the 2018 rendition. The page offers information about the festival and a number of photos taken by me at the festival, as well as a sample "sticky" form with PHP validation.</p>
                        <p><em class="sidenote">Note: some images were not uploaded to the page due to Heroku file size limitations</em></p>
                    </div>
                </a>
            </div>
        </div>

        <h3>Group Projects</h3>
        <div class="project-card">
            <a href='https://bike.engineering.cornell.edu/index.html' target="_blank" rel="noopener noreferrer">
                <div class="web-dev">
                    <img src="images/cuab-screenshot.png" alt="CUAB Screenshot">
                    <h4>Cornell Autonomous Bicycle</h4>
                    <p>CUAB is a project team at Cornell whom a small group of other developers and I approached to remake their website. I, and three others, entirely recoded and redesigned the entire website, adding new CSS and JS features, including an embedded video gallery and a mobile dropdown menu.</p>
                </div>
            </a>
        </div>
    </div>
    <div <?php if(!isset($_COOKIE[$cookie_name])) { echo "class='section-first'";} else { echo "class='section'";}?> id="sec2">
        <h2>Data Science</h2>
        <p>More recently, I've picked up introductory data science as a skill. Creating Jupyter notebooks with Python code, I've created an assortment of smaller analyses/exercises in class and have completed one full length analysis in a group project.</p>
        <div class="project-container">
            <div class="project-card">
                <a href='https://github.com/roninchasan/2950-Final-Project/blob/master/INFO2950FINALPROJECT.ipynb' target="_blank" rel="noopener noreferrer">

                    <div class="data-science">
                        <img src="images/mlb-analysis-screenshot.png" alt="MLB Analysis Screenshot">
                        <h4>MLB Hitter Value Data Analysis</h4>
                        <p>This project is a full length data analysis of the worth of MLB players' attributes with regard to their salary, made in collaboration with other Cornell students for class. We sought to determine which, if any, MLB hitters' statistics or physical attributes were good predictors of salary in the 2016 season. We filtered and plotted our data, analyzed for linear, logistic, and clustered relationships, and determined the strength and confidence of each one.</p>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <div <?php if(!isset($_COOKIE[$cookie_name])) { echo "class='section-first'";} else { echo "class='section'";}?> id="sec3">
        <h2>Application Programming</h2>
        <p>Lastly, below is a small subset of Python and Java applications that I have built (atop frameworks distributed by professors) in classes over the last few years. Having been making applications since about 2017, this is the area that I have the most experience in. Unfortunately, they cannot easily be run on a browser, so you will find the code for each of these projects linked to repositories on my GitHub below.</p>
        <h3>Java Projects</h3>
        <div class="project-container">
            <div class="project-card">
                <a href='https://github.com/roninchasan/digger-game' target="_blank" rel="noopener noreferrer">
                    <div class="software">
                        <img src="images/digger-screenshot.png" alt="Digger Game Screenshot">
                        <h4>"Digger" Java Game</h4>
                        <p>This project is a game similar to the popular "Digger" franchise. The "digger" character must find the hidden coin (he is not aware of its location, as he hasn't "dug" close enough to see it yet), then collect as many coins as possible and exit the mine before his step count runs out. I coded the functionality of the game, which includes movement of digger, ability to find the hidden coin, collecting as many coins as possible, and finding a shortest path to the exit.</p>
                    </div>
                </a>
            </div>
            <div class="project-card">
                <a href='https://github.com/roninchasan/bug-tracker' target="_blank" rel="noopener noreferrer">
                    <div class="software">
                        <img src="images/bugtree-screenshot.png" alt="Bug Tree Screenshot">
                        <h4>"Bug Tracker" Application</h4>
                        <p>This Java application is a sort of epidemic simulator making use of the tree data type and recursion. Taking in a number of variables from the user, it makes a prediction about the number of survivors, immune, recovered, and deceased individuals in a population with a "bug" going around. I coded the parts that include the spreading of the bug through the tree and statistics about each node (person) and tree traversal.</p>
                    </div>
                </a>
            </div>
        </div>
        <h3>Python Projects</h3>
        <div class="project-container">
            <div class="project-card">
                <a href='https://github.com/roninchasan/invaders-game' target="_blank" rel="noopener noreferrer">
                    <div class="software">
                        <img src="images/invaders-screenshot.png" alt="Space Invaders Screenshot">
                        <h4>"Space Invaders" Game</h4>
                        <p>A Python-backed iteration of the classic "Space Invaders" arcade game, with nearly all of the same features as the original. My partner and I coded nearly all of the functionality of the game, including states (pregame, in-game, game over), player movement, alien movement & waves, as well as laser shooting mechanisms.</p>
                    </div>
                </a>
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