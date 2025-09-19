<?php
require_once "../controller/diceGAME.php";
$game= new diceGAME("animals.json");
$outcome=$game->rollDICE();
header('content-type:application/json');
echo json_encode($outcome);
?>