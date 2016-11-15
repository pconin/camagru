<?php
	if (!isset($_SESSION))
		session_start();
	if ($_SESSION['rank'] !== 1)
	{
		header("refresh:2;url=accueil.php");
		echo "Vous n'avez rien à faire ici, vous allez etre redirigé";
		exit ();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Montage</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php include_once 'header.php' ?>
	
	<form action="checkfile.php" method="post" enctype="multipart/form-data" name='upload'>
    Select image to upload: <br/>
    <input name="img" id="toto" hidden/>
    <input type="text" maxlength="200" name="description" placeholder="description"> <br/>
    <input type="radio" onclick="disable()" name="filter" value="nofilter"> Sans filtre <br/>
    <input type="radio" onclick="disable()" name="filter" value="griffes"> Griffes rouges <br/>
    <input type="radio" onclick="disable()" name="filter" value="Filtre3"> Filtre 3 <br/>
    <input type="file"  value="fileToUpload" name="fileToUpload" id="fileToUpload">
    <input type="submit" disabled="disabled" id="upload" value="Upload" name="submit"><br/>
	<video id="video"></video>
	<button id="capture" onclick="takePicture()">Snapshot</button>
	</form>
	<br/>
	<canvas id="canvas"></canvas>
	<?php include_once 'usrmosaique.php'; ?>
	<?php include 'footer.php' ;?>
<script type="text/javascript" src="../js/montage.js"></script>
</body>
</html>