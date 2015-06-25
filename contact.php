<!--
    Verschillende sliders interferen met elkaar.
    Als je van een pagina met een slider naar een
    andere pagina met een slider navigeert,
    staat de slider al uitgevouwen.
-->



<div id="contact_left">
	<img src="images/logoz.png" width='30%' style="float:left;">
	<div style="float:left;">
		<span style="font-size: 1.35em">Communication Control System</span>
		<br><br>
		De Horst 2<br>
		7522 NB Enschede<br>
		The Netherlands
	</div>
</div>

<div id="contact_right">
	<img src="images/horst.jpg" width="100%">
</div>

<div id="contacts_container">
	<div id="Jelle" class="profile">
		<video width="158" height="280">
			<source src="images/jelle.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Jelle Klaver<br>
		Chair(wo)man<br><br>
		+31(0)678293751<br>
		j.klaver@ccs.nl<br>
		</div>
	</div>
	
	<div id="Tessa" class="profile">
		<video width="158" height="280">
			<source src="images/tessa.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Tessa Fij<br>
		Secretary<br><br>
		+31(0)682756295<br>
		t.fij@ccs.nl<br>
		</div>
	</div>

	<div id="Janneke" class="profile">
		<video width="158" height="280">
			<source src="images/janneke.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Janneke Huijben<br>
		Treasurer<br><br>
		+31(0)637561937<br>
		j.huijben@ccs.nl<br>
		</div>
	</div>
	
	<div id="Rutger" class="profile">
		<video width="158" height="280">
			<source src="images/rutger.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Rutger Frieswijk<br>
		Technical Engineer<br><br>
		+31(0)659251436<br>
		r.frieswijk@ccs.nl<br>
		</div>
	</div>
	
	<div id="Jessica" class="profile">
		<video width="158" height="280">
			<source src="images/jessica.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Jessica Sennema<br>
		Developer<br><br>
		+31(0)616385602<br>
		j.sennema@ccs.nl<br>
		</div>
	</div>
	
	<div id="Shannon" class="profile">
	<video width="158" height="280">
			<source src="images/shannon.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div>
		Shannon Cleijne<br>
		Creative Designer<br><br>
		+31(0)601937561<br>
		s.cleijne@ccs.nl<br>
		</div>
	</div>

</div>
<script>
	$(".profile").mouseenter(function(){
		$(this).find( "video" ).get(0).play();
		$(this).find( "div" ).dequeue().animate({
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