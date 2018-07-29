<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $page['meta-description']; ?>">
	<title><?php echo $page['title']; ?></title>
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400|Archivo+Black" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ScrollToPlugin.min.js"></script>
	<script src="<?php echo BASE_URL; ?>js/main.js"></script>
	<link href="<?php echo BASE_URL; ?>css/main.css" rel="stylesheet">
</head>

<body onLoad="ready()">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-97469121-1', 'auto');
		ga('send', 'pageview');
	</script>
	<header id="header">
		<a id="logo" title="fn Creative" onclick="scrollIt()"></a>
		<a id="menu"><span id="line1"></span><span id="line2"></span><span id="line3"></span></a>
	</header>
	<nav id="nav">
		<div id="nav-inner">
			<a id="services-link" onclick="scrollIt('services')">Services</a>
			<a id="portfolio-link" onclick="scrollIt('portfolio')">Portfolio</a>
			<a id="about-link" onclick="scrollIt('about')">About</a>
			<a id="contact-link" onclick="scrollIt('contact')">Contact</a>
		</div>
	</nav>