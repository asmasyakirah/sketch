<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
require("config/config.php");
?>

<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
<head>

  	<!-- Page Favicon -->
  	<link rel="shortcut icon" href="image/little_boy_orange.ico" type="image/x-icon"/>
  	<!-- Page Title -->
  	<title><?php echo $config['project']; ?> &#9679; <?php echo $page['title']; ?></title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Bootstrap -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="design/sketch.css" rel="stylesheet">
  	<!-- Fa Icon -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Pacifico Icon -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico" />
  	<!-- link to jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<?php include("navbar.php"); ?>

