<?php
$content=file_get_contents("../data/formation.yaml");
$data=yaml_parse($content);

echo "<div id='sec4' class='skill'>";
echo '<h1>'.$data["form"].'</h1>';
echo '<h3>'.$data["bts"].'</h3>';
echo '<p id="list">'.$data["lyc"].'</p>';
echo '<p id="list">'.$data["lieu"].'</p>';
echo '<p id="list">'.$data["date"].'</p>';


echo '<h3>'.$data["bac"].'</h3>';
echo '<p id="list">'.$data["diplome"].'</p>';
echo '<p id="list">'.$data["lyc1"].'</p>';
echo '<p id="list">'.$data["lieu1"].'</p>';
echo '<p id="list">'.$data["date1"].'</p>';


echo '<h3>'.$data["clg"].'</h3>';
echo '<p id="list">'.$data["lieu2"].'</p>';

echo '<button type="submit" onclick="../fichiers/cv.odt" id="btn-cv"><a id="cv" href="../fichiers/cv.odt">Télécharger mon CV</a></button>';
echo "</div>";

?>