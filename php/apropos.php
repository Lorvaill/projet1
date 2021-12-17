<?php
$content=file_get_contents("../data/apropos.yaml");
$data=yaml_parse($content);

echo '<div id="sec1" class="sec1">';
echo '<h2 id="propos">'.$data["accroche"].'</h2>';
echo '<p id="propos">'.$data["paragraphe"].'</p>';
echo '</div>';
?>