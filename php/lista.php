<html>
<head><link rel="stylesheet" type="text/css" href="../css/stile.css"></head>
<body>

<div id="logocontent"><center><a href="../index.php"><img src="../img/logo.gif"></a></center></div>
<?php
if (isset($_GET['mat'])){
	 $materia=$_GET['mat'];
}
	echo "<div id='titolomateria'><h1>".$materia."</h1></div>";
?>
<div id="menutop">
<ul>
<li><a href="lista.php?mat=EOA">ECONOMIA</a></li>
<li><a href="lista.php?mat=RO">RICERCA OPERATIVA</a></li>
<ul>
</div>
<div id="listacontent">
<?php

include("config.php");
$query="SELECT id,testo,data,risposta FROM domande WHERE materia='".$materia."'";
$riga=$mysqli->query($query);
if(!$riga) exit ("Non ci sono domande");
$id=1;
	while($row=$riga->fetch_assoc())
	{
		
		$domanda=$row["testo"];
		$data=$row["data"];
		$risposta=$row["risposta"];
		echo "<div id='box'>
		<div id='topbox'><div id='domanda' class='boxclass'><b>".$id.". </b>".$domanda."</div><div id='data'>".$data."</div></div>
		<div id='risposta' class='boxclass'>".$risposta."</div>
		</div>";
		$id++;
	}
	
$mysqli->close();
?>

</div>
</body>
</html>