<!DOCTYPE html>
<html><head>
<title>
	CCS
</title>
    <script src="scripts/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="scripts/resize.js" type="text/javascript"></script>
    <script src="scripts/balk.js" type="text/javascript"></script>
    <script src="scripts/navigation.js" type="text/javascript"></script>

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
	<rect id="rect" x="0" y="250" width="60" height="750" fill="#FFD41D" />
	
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
        <div id="home" class="page">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nam rhoncus eros at augue posuere laoreet. Nam ut risus a ex pulvinar pharetra. 
            Praesent sollicitudin odio eget urna faucibus, eget fringilla leo tincidunt. Fusce 
            quis porttitor est. Etiam non nisi eu ligula malesuada venenatis ac non quam.
             Suspendisse malesuada leo vestibulum dolor vulputate tempus. Duis quam odio, 
             efficitur ac rhoncus ac, posuere ac nisi. Mauris sit amet tempor justo. Vivamus
              porttitor faucibus ligula at imperdiet. Ut at pulvinar nibh, at porttitor nulla.
               Aenean tellus nisl, ullamcorper sit amet erat ut, volutpat malesuada nisi. 
               Maecenas mi elit, vestibulum sed odio sit amet, gravida hendrerit justo. 
               Vestibulum suscipit luctus metus, nec interdum mauris euismod et. Vivamus 
               imperdiet sit amet nisl sit amet volutpat. Nunc in ultricies neque. Vestibulum 
               arcu purus, interdum eu elementum sed, tincidunt sit amet turpis. Donec eget 
               risus a augue maximus volutpat id sed mi. Vestibulum in magna ac nulla malesuada 
               varius et at tortor. Sed hendrerit diam sit amet cursus venenatis. Aenean tincidunt
                semper tempor. In neque ipsum, ultricies convallis sem ac, gravida mollis
                 felis. Proin vel pellentesque risus, nec tincidunt ligula. Ut et pellentesque 
                 odio. Morbi pharetra diam et ex dignissim, a consectetur purus efficitur.
                  Donec sollicitudin neque quis hendrerit scelerisque. Proin a lacus in purus 
                  gravida ullamcorper id eget odio.
    	            Nam rhoncus eros at augue posuere laoreet. Nam ut risus a ex pulvinar pharetra. 
            Praesent sollicitudin odio eget urna faucibus, eget fringilla leo tincidunt. Fusce 
            quis porttitor est. Etiam non nisi eu ligula malesuada venenatis ac non quam.
             Suspendisse malesuada leo vestibulum dolor vulputate tempus. Duis quam odio, 
             efficitur ac rhoncus ac, posuere ac nisi. Mauris sit amet tempor justo. Vivamus
              porttitor faucibus ligula at imperdiet. Ut at pulvinar nibh, at porttitor nulla.
               Aenean tellus nisl, ullamcorper sit amet erat ut, volutpat malesuada nisi. 
               Maecenas mi elit, vestibulum sed odio sit amet, gravida hendrerit justo. 
               Vestibulum suscipit luctus metus, nec interdum mauris euismod et. Vivamus 
               imperdiet sit amet nisl sit amet volutpat. Nunc in ultricies neque. Vestibulum 
               arcu purus, interdum eu elementum sed, tincidunt sit amet turpis. Donec eget 
               risus a augue maximus volutpat id sed mi. Vestibulum in magna ac nulla malesuada 
               varius et at tortor. Sed hendrerit diam sit amet cursus venenatis. Aenean tincidunt
                semper tempor. In neque ipsum, ultricies convallis sem ac, gravida mollis
                 felis. Proin vel pellentesque risus, nec tincidunt ligula. Ut et pellentesque 
                 odio. Morbi pharetra diam et ex dignissim, a consectetur purus efficitur.
                  Donec sollicitudin neque quis hendrerit scelerisque. Proin a lacus in purus 
                  gravida ullamcorper id eget odio.
     	</div>
    </div>
    
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>
</html>
