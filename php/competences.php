<?php
$content=file_get_contents("../data/competences.yaml");
$data=yaml_parse($content);

echo "<div id='sec2' class='skill'>";
echo "<h1>Mes compétences</h1>";
echo '<li id="list"><h3>'.$data["html"].'</h3></li>';
echo "<span class='bar'><span id='span1' class='html'></span></span>";
echo '<li id="list"><h3>'.$data["css"].'</h3></li>';
echo "<span class='bar'><span id='span1' class='css'></span></span>";
echo '<li id="list"><h3>'.$data["php"].'</h3></li>';
echo "<span class='bar'><span id='span1' class='php'></span></span>";
echo '<li id="list"><h3>'.$data["java"].'</h3></li>';
echo "<span class='bar'><span id='span1' class='java'></span></span>";
echo "</div>";
?>
