<!DOCTYPE html>
<html><head>
    <meta name="robots" content="noindex nofollow">
<title>
	CCS
</title>
    <script src="scripts/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="scripts/resize.js" type="text/javascript"></script>
    <script src="scripts/balk.js" type="text/javascript"></script>
    <script src="scripts/navigation.js" type="text/javascript"></script>
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="style/main.css" rel="stylesheet">
</head>
<body>
    <header id="jumbotron"> <!-- foto, logo, etc. -->
            <?php include('header.php'); ?>
    </header>

	<svg id="svgBalkBoven" viewBox="0 0 1000 250" preserveAspectRatio="none" width="100%" height="100%">
	<polygon id="poly" fill="rgba(255,255,255,0.5)" points="240,0 300,0 60,250 0,250" />
	
	<animate 
		xlink:href="#poly"
		attributeName="points"
		from="90,0 150,0 60,160 0,160"
		to="0,0 60,0 60,160 0,160"
		dur="750ms"
		begin="indefinite"
		fill="freeze" 
		id="poly-anim" />
	</svg>

	<svg id="svgBalkOnder" viewBox="0 250 1000 750" preserveAspectRatio="none" width="100%" height="100%" style="margin-top:-2px;">
	<rect id="rect" x="0" y="250" width="60" height="750" fill="rgba(236,33,39,0.2)" />
	
	<animate 
		xlink:href="#rect"
		attributeName="width"
		from="60"
		to="100"
		dur="750ms"
		begin="indefinite"
		fill="freeze" 
		id="rect-anim-width" />
		
	<animate 
		xlink:href="#rect"
		attributeName="x"
		from="0"
		to="100"
		dur="750ms"
		begin="indefinite"
		fill="freeze" 
		id="rect-anim-pos" />
		
	<animate 
		xlink:href="#rect"
		attributeName="fill"
		from="#FFD41D"
		to="#FDD41D"
		dur="750ms"
		begin="indefinite"
		fill="freeze" 
		id="rect-anim-color" />
	</svg>
    
    <nav id="mainnav">
        <hr>
        <ul>
            <li>Home</li>
            <li>Info</li>
            <li>Events</li>
            <li>Contact</li>
        </ul>
        <hr>
    </nav>
    
    <div id="mainpage">
        <div id="home" class="page active-page">
                <!--Pagina inhoud-->
     	</div>
    </div>
    
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>
</html>
