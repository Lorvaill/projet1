<?php
$content=file_get_contents("../data/menup.yaml");
$data=yaml_parse($content);

echo '<header>';
echo '<a href="#" class="logo">monsite</a>';
echo '<ul>';
echo '<li><a href="#sec" class="active">'.$data["accueil"].'</a></li>';
echo '<li><a href="#sec1">'.$data["apropos"].'</a></li>';
echo '<li><a href="#sec2">'.$data["competences"].'</a></li>';
echo '<li><a href="#sec3">'.$data["experience"].'</a></li>';
echo '<li><a href="#sec4">'.$data["formation"].'</a></li>';
echo '<li><a href="#sec5">'.$data["contact"].'</a></li>';
echo '<li class="search-box"><input class="search-txt" type="text" name="" placeholder="Rechercher"><i class="fas fa-search"></i></li>';
echo '</ul>';
echo '</header>';

echo '<section>';
echo '<img src="../images/stars.png" id="stars">';
echo '<img src="../images/moon.png" id="moon">';
echo '<img src="../images/mountains_behind.png" id="mountains_behind">';
echo '<h2 id="text">Théo Ledain</h2>';
echo "<a href='#sec' id='btn'>C'est parti !</a>";
echo '<img src="../images/mountains_front.png" id="mountains_front">';
echo '</section>';




//echo '<header>';
//echo '<a href="#" class="logo">monsite.fr</a>';
//echo '<ul>';
//echo '<li><a href="#sec" class="active">Accueil</a></li>';
//echo '<li><a href="#sec1">A propos</a></li>';
//echo '<li><a href="#">Compétences</a></li>';
//echo '<li><a href="#">Expérience</a></li>';
//echo '<li><a href="#">Formation</a></li>';
//echo '<li><a href="#">Contact</a></li>';
//echo '<li class="search-box"><input class="search-txt" type="text" name="" placeholder="Rechercher"><i class="fas fa-search"></i></li>';
//echo '</ul>';
//echo '</header>';

//echo '<section>';
//echo '<img src="../images/stars.png" id="stars">';
//echo '<img src="../images/moon.png" id="moon">';
//echo '<img src="../images/mountains_behind.png" id="mountains_behind">';
//echo '<h2 id="text">Théo Ledain</h2>';
//echo "<a href='#sec' id='btn'>C'est parti !</a>";
//echo '<img src="../images/mountains_front.png" id="mountains_front">';
//echo '</section>';
?>