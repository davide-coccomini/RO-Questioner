<?php
$mysqli= new mysqli("127.0.0.1","root",null,"Economia");
if($mysqli->connect_error){
	die($mysqli->connect_errno);
}
?>