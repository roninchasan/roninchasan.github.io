<?php 
if ($title == "Home"){
    echo "<header id='home'>";
}else{ 
    echo "<header>";
} ?>
    <h1 id="main-head-first">Ronin Chasan</h1>
    <h2 id="sub-head-first"> 
        <?php 
        if ($title == "Home"){
            echo "Software, Web Dev, and Data Science";
        } else{
            echo $title;
        }
        ?>
    </h2>
    <hr id='header-line-first'>
</header>