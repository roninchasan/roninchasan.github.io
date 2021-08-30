<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Software, Web Dev, and Data Science. My personal website with my projects, resume, classes, and more.">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <title>Ronin Chasan - <?php echo $title ?></title>
    <meta name="keywords" content="Ronin Chasan, Web Dev, Software, Data Science">
    <meta name="author" content="Ronin Chasan">
    <script src="scripts/script.js"></script>
</head>

<body>

    <nav id ="navbar">
        <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='resume.php'>Résumé</a></li>
            <li><a href='classes.php'>Classes</a></li>
            <li><a href='projects.php'>Projects</a></li>
        </ul>
    </nav>

    <header id="home">
        <h1 id="main-head">Ronin Chasan</h1>
        <h2 id="sub-head">Software, Web Dev, and Data Science</h2>
        <hr id='header-line'>
    </header>

    <div class="container">
        <div class="card" id="about1">
            <h3>Who am I?</h3>
            <p>My name is Ronin and I'm part of the Class of 2022 at Cornell Univeristy.
                I'm purusing a B.S. degree in Information Science, with concentrations in Data Science
                and Interactive Technologies. In addition, I'm pursuing a Business for Engineers minor to
                complement my major studies.</p>
            <p>I am from Long Island, NY, having gone to high school and worked there until I left for college. The lessons, connections, and organizations I have found both there and in Ithaca have
                brought me to where I am today. So, I invite you to take a look around my website and see what I have to offer.</p>
        </div>

        <div class="card" id="about2">
            <h3>What do I do?</h3>
            <div class="column-container" id="index-col-container">
                <div id="card-col-left">
                    <img alt="Web Dev Icon" src="images/web-development.png" class="large-icon" id="top">
                    <h4 class="column-head">Web Dev</h4>
                    <hr class='line'>
                    <p>I build static and dynamic websites like this from scratch using:</p>
                    <ul class="intro-list">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>JavaScript</li>
                        <li>SQL (I'm most experienced with SQLite)</li>
                    </ul>
                </div>
                <div id="card-col-center">
                    <img alt="App Dev Icon" src="images/application.png" class="large-icon">
                    <h4 class="column-head">Application Dev</h4>
                    <hr class='line'>

                    <p>I also have taken years of application coding courses, and in the process getting a strong hold of:</p>
                    <ul class="intro-list">
                        <li>Computer science principles and theory</li>
                        <li>Python</li>
                        <li>Java</li>
                    </ul>
                </div>
                <div id="card-col-right">
                    <img alt="Data Science Icon" src="images/science.png" class="large-icon">
                    <h4 class="column-head">Data Science</h4>
                    <hr class='line'>

                    <p>I have experience making full length data analyses using Python with:
                    </p>
                    <ul class="intro-list">
                        <li>Pandas</li>
                        <li>NumPy</li>
                        <li>Matplotlib</li>
                        <li>SKLearn</li>
                    </ul>
                    <p>to create statistical models, run small simulations, and make predictions based upon models.</p>
                </div>
            </div>
        </div>
        <div class="card" id="about3">
            <h3>How might you get in touch with me?</h3>
            <p>If you see something you like, please feel free to contact me for employment, freelance, hobby inquiry or just to say hello at my email or on my LinkedIn! You'll find links to both at the bottom of each page.</p>
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

    <script>
        let cookie = getCookie("repeat-visit-home");

        if (cookie == ""){
            //first visit
            document.getElementById("navbar").id = "navbar-first";

            document.getElementById("main-head").id = "main-head-first";
            document.getElementById("sub-head").id = "sub-head-first";
            document.getElementById("header-line").id = "header-line-first";

            document.getElementById("about1").id = "about-1";
            document.getElementById("about2").id = "about-2";
            document.getElementById("about3").id = "about-3";
            
        } else {
            //repeat visit

        }


        document.cookie = "repeat-visit-home=true";
    </script>
</html>