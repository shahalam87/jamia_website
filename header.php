<?php
error_reporting(E_ALL ^ E_DEPRECATED);
# code for finding page name
 $file = $_SERVER["SCRIPT_NAME"];
 $break = Explode('/', $file);
 $page_name = $break[count($break) - 1];
if($page_name <> 'index.php') {
$page = explode('.',$page_name);
$title = ucwords(str_replace('_',' ',($page[0])));
} else {
	$title = 'Home';
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Madrasa Jamia Tajweedul Quran Nandiyambakkam, Chennai">
<meta name="author" content="Madrasa Jamia Tajweedul Quran Nandiyambakkam, Chennai">
<title>Madrasa Jamia Tajweedul Quran - Chennai | <?php echo $title; ?></title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon-16x16.png">
<link rel="manifest" href="images/ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body class="homepage">
<header id="header">
<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-sm-6 col-xs-4">
<!-- <div class="top-number"><p>JAMIA TAJWEEDUL QURAN, NANDIAMBAKKAM, CHENNAI</p></div> -->
</div>
<div class="col-sm-6 col-xs-8">
<div class="social"><span style="color:#FFFFFF">JAMIA TAJWEEDUL QURAN, NANDIAMBAKKAM, CHENNAI</span>
</div>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-inverse" role="banner">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Jamia Tajweedul Quran"></a>
</div>
<div class="collapse navbar-collapse navbar-right">
<ul class="nav navbar-nav">
<li class="<?php echo (($page_name=='index.php')?'active':'') ?>"><a href="index.php">Home</a></li>
<li class="<?php echo (($page_name=='about-us.php')?'active':'') ?>"><a href="about-us.php">About Us</a></li>
<!-- <li><a href="prayers.html">Prayers</a></li> -->
<li class="<?php echo (($page_name=='publications.php')?'active':'') ?>"><a href="publications.php">Publications</a></li>
<li class="<?php echo (($page_name=='events.php')?'active':'') ?>"><a href="events.php">Events</a></li>
<li class="dropdown <?php echo (($page_name=='media.php')?'active':'') ?>">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Media&nbsp;<i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu">
<li><a href="media.php?evntid=4">Event4 03AUG2025</a></li>
<li><a href="media.php?evntid=3">Event3 18APR2018</a></li>
<li><a href="media.php?evntid=2">Event2 10APR2016</a></li>
<li><a href="media.php?evntid=1">Event1 12AUG2012</a></li>
</ul>
</li>
<li><a href="#bottom">Contact</a></li>
</ul>
</div>
</div>
</nav>
</header>