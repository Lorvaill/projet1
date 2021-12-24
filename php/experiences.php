<?php
$content=file_get_contents("../data/experiences.yaml");
$data=yaml_parse($content);

echo "<div id='sec3' class='skill'>";
echo '<h1>'.$data["lyc"].'</h1>';
echo '<h3>'.$data["first"].'</h3>';
echo '<p id="list">'.$data["lieu"].'</p>';
echo '<p id="list">'.$data["lieu1"].'</p>';

echo '<h3>'.$data["snd"].'</h3>';
echo '<p id="list">'.$data["lieu2"].'</p>';


echo '<h3>'.$data["trd"].'</h3>';
echo '<p id="list">'.$data["lieu3"].'</p>';
echo '<p id="list">'.$data["lieu4"].'</p>';

//echo '<form method="get" action="../fichiers/cd.odt">';
echo '<button type="submit" onclick="../fichiers/cv.odt" id="btn-cv"><a id="cv" href="../fichiers/cv.odt">Télécharger mon CV</a></button>';
//echo "</form>";

//echo '<input type="button" value="Télécharger" onclick="window.location="../fichiers.cv.odt";">';

echo "</div>";

?>
