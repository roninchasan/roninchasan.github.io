<nav id ="navbar">
    <ul>
        <?php 

        if ($title != "Home"){
           echo "<li><a href='index.php'>Home</a></li>";
        } if ($title != "Résumé"){
            echo "<li><a href='resume.php'>Résumé</a></li>";
        } if ($title != "Classes"){
            echo "<li><a href='classes.php'>Classes</a></li>";
        } if ($title != "Projects"){
            echo "<li><a href='projects.php'>Projects</a></li>";
        }
        ?>
    </ul>
</nav>
