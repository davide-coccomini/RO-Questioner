
<html>
<head><link rel="stylesheet" type="text/css" href="css/stile.css"></head>
<body>

<div id="wrapper">
<div id="logocontent"><center><img src="img/logo.gif"></center></div>
	

	<div id="content">
	<form id="form" method="post" action="php/inserimento.php">
	<div id="campibox">
		<select id="materia" name="materia">
		<option value="EOA">Economia</option>
		<option value="RO">Ricerca operativa</option>
		</select>
		<legend class="legend">Domanda</legend>
		<textarea name="domanda" class="campi"></textarea>
		<legend class="legend">Risposta</legend>
		<textarea name="risposta" class="campi"></textarea>
	</div>
		<div id="buttoncontent">
			<input class="pulsante" type="submit" value="Aggiungi">
			<a href="php/lista.php?mat=EOA"><input class="pulsante" type="button" value="Vai alla lista delle domande"></a>
		</div>
		</form>
	</div>

</div>
</body>
</html>
<?php
if (isset($_GET['m'])){
	 $message=$_GET['m'];
	 echo "<script type='text/javascript'>alert('".$message."');</script>";
}

?>