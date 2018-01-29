<?php
include("config.php");
if(empty($_POST["domanda"]) or (empty($_POST["risposta"]))  or (empty($_POST["materia"]))){
$mysqli->close();
header('location: ../index.php?m=Form incompleto');
die();
}else{

$testodomanda = $_POST["domanda"];
$testorisposta = $_POST["risposta"];
$data = date("d/m/Y");
$materia=$_POST["materia"];

$query="INSERT INTO domande(testo,data,risposta,materia) VALUES('".$testodomanda."','".$data."','".$testorisposta."','".$materia."')";

$result=$mysqli->query($query);
$mysqli->close();
header('location: ../index.php?m=Domanda inserita');
die();
}
?>