<?php 

include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else {
	header("Location: register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Herotunes</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="assets/js/script.js"></script>
</head>
<body>

	<script>
		var audioElement = new Audio();
		audioElement.setTrack("assets/music/bensound-jazzyfrenchy.mp3");
		audioElement.audio.play;
	</script>

	<div id="mainContainer">

		<div id="topContainer">

			<?php include("includes/navBarContainer.php");  ?>
			<div id="mainViewContainer">
				
				<div id="mainContent">