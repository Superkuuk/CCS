<!DOCTYPE html>
<html><head>
    <meta name="robots" content="noindex nofollow">
<title>
	CCS Presentatie
</title>
    <script src="scripts/jquery-1.11.3.min.js" type="text/javascript"></script>
   
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="style/presentatie.css" rel="stylesheet">
<script>
$(document).ready( function() {
	$("#contacts_container").css('margin-left', ( ($(window).width()-1080 )/2 ) );
	$("#contact_left").css('margin-left', ( ($(window).width()-1080 )/2 ) );
});
</script>

</head>
<body>

<div id="contact_left">
	<img src="images/logoz.png" height='160px' style="float:left">
	<div style="float:left; margin-left: 20px">
		<span style="font-size: 1.35em">Communication Control System</span>
		<br><br>
		De Horst 2<br>
		7522 NB Enschede<br>
		The Netherlands<br>
	</div>
	<div style="float:right; margin-right: 100px">
		<span style="font-size: 1.35em">Group 10</span>

	</div>
</div>


<div id="contacts_container" style="margin-top:50px">
	<div id="Jelle" class="profile">
		<video width="158" height="280">
			<source src="images/jelle.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Jelle Klaver<br>
		Chairman<br>
        s1499157<br>
		</div>
	</div>
	
	<div id="Tessa" class="profile">
		<video width="158" height="280">
			<source src="images/tessa.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Tessa Fij<br>
		Secretary<br>
        s1444611<br>
		</div>
	</div>

	<div id="Janneke" class="profile">
		<video width="158" height="280">
			<source src="images/janneke.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Janneke Huijben<br>
		Treasurer<br>
        s1438921<br>
		</div>
	</div>
	
	<div id="Rutger" class="profile">
		<video width="158" height="280">
			<source src="images/rutger.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Rutger Frieswijk<br>
		Technical Engineer<br>
        s1499025<br>
		</div>
	</div>
	
	<div id="Jessica" class="profile">
		<video width="158" height="280">
			<source src="images/jessica.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Jessica Sennema<br>
		Developer<br>
        s1487000<br>
		</div>
	</div>
	
	<div id="Shannon" class="profile">
	<video width="158" height="280">
			<source src="images/shannon.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Shannon Cleijne<br>
		Creative Designer<br>
        s1460528<br>
		</div>
	</div>
</div>
<script>
	// set interval
	var tid = setInterval(activeMove, 3000);
	var lastElement = 300;
	function activeMove() {
		var random = Math.floor(Math.random()*6);
		if(random == lastElement){
			//hetzelfde
			random += (Math.floor(Math.random()*4) + 1);
			if(random > 5){
				random -= 6;
			}
			console.log(random + " | " + lastElement);
		}

		lastElement = random;
		
		var e = $(".profile").eq(random);
		e.find( "video" ).get(0).play();
		
		var e = e.find( "div" );
		e.animate({
			'margin-top': 0,
			'opacity': 1
		}, 300, function(){
			setTimeout(function(){
				e.animate({
					'margin-top': (-5.2*1.7)+'em',
					'opacity': 0
				}, 300, function(){});
			}, 5700);		
		});
		
		
		// do some stuff...
		// no need to recall the function (it's an interval, it'll loop forever)
	}


	$(".profile").mouseenter(function(){
		$(this).find( "video" ).get(0).play();
		var e = $(this).find( "div" );
		e.dequeue().animate({
			'margin-top': 0,
			'opacity': 1
		}, 300, function(){});
	});
	
	$(".profile").mouseleave(function(){
		var delay = 6000 - parseInt( 1000 * $(this).find( "video" ).get(0).currentTime);
		var e = $(this).find( "div" );
		setTimeout(function(){
			e.dequeue().animate({
				'margin-top': (-5.2*1.7)+'em',
				'opacity': 0
			}, 300, function(){});
		}, delay);
	});
</script>
</body>
</html>