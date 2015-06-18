$(window).load( function() {
	var html_org = $( "#mainnav ul li:first" ).html();
	var html_calc = '<span>' + html_org + '</span>';
	$( "#mainnav ul li:first" ).html(html_calc);
	var width = $( "#mainnav ul li:first" ).find('span:first').width();
	width = (width/$(window).width()*1000);
	margin = width * 0.3;
	width = width + margin;
	var pos = $( "#mainnav ul li:first" ).find('span:first').position().left;
	pos = pos/$(window).width()*1000 - 0.5 * margin;
	$( "#mainnav ul li:first" ).html(html_org);
	
	// lb, rb, ro, lo
	var points = [pos,0, pos+width,0, pos+width,250, pos,250]; // standard rect	
	
	$("#rect-anim-width").attr("from", width);
	$("#rect-anim-pos").attr("from", pos);
	$("#rect-anim-color").attr("from", "rgba(236,33,39,0.2)");
	points = [pos+width*2.5,0, pos+width*3.5,0, pos+width,250, pos,250];
	$("#poly-anim").attr("from", points[0] + "," + points[1] + " " + points[2] + "," + points[3] + " " + points[4] + "," + points[5] + " " + points[6] + "," + points[7]);
	
	$("#poly").attr("points", points[0] + "," + points[1] + " " + points[2] + "," + points[3] + " " + points[4] + "," + points[5] + " " + points[6] + "," + points[7]);
	$("#rect").attr("x", pos);
	$("#rect").attr("width", width);
	
	var active = true;	
	$( "#mainnav ul li" ).click(function() {
		if(active){
		active = false;
		// Measure text width and position; set width and pos of rect
		html_org = $(this).html();
		html_calc = '<span>' + html_org + '</span>';
		$(this).html(html_calc);
		width = $(this).find('span:first').width();
		width = (width/$(window).width()*1000);
		margin = width * 0.3;
		width = width + margin;
		pos = $(this).find('span:first').position().left;
		pos = pos/$(window).width()*1000 - 0.5 * margin;
			
		$(this).html(html_org);
		$("#rect-anim-width").attr("to", width);
		$("#rect-anim-pos").attr("to", pos);
		
		if(html_org == "Home"){		
			$("#rect-anim-color").attr("to", "rgba(236,33,39,0.2)");
			points = [pos+width*2.5,0, pos+width*3.5,0, pos+width,250, pos,250];	
		}else if(html_org == "Info"){
			$("#rect-anim-color").attr("to", "rgba(57,181,75,0.25)");
			points = [pos,0, pos+width,0, pos+width,250, pos,250];
		}else if(html_org == "Events"){
			$("#rect-anim-color").attr("to", "rgba(247,148,30,0.25)");
			points = [pos,0, pos+width,0, pos+width,250, pos,250];	
		}else{
			$("#rect-anim-color").attr("to", "rgba(109,207,246,0.25)");
			points = [pos,0, pos+width,0, pos+width,250, pos,250];		
		}
		
		$("#poly-anim").attr("to", points[0] + "," + points[1] + " " + points[2] + "," + points[3] + " " + points[4] + "," + points[5] + " " + points[6] + "," + points[7]);
		
		animationToCheck = document.getElementById("rect-anim-width");
		animationToCheck.beginElement();
		animationToCheck = document.getElementById("rect-anim-pos");
		animationToCheck.beginElement();
		animationToCheck = document.getElementById("rect-anim-color");
		animationToCheck.beginElement();
		animationToCheck = document.getElementById("poly-anim");
		animationToCheck.beginElement();
				
		var delay = 750;
		setTimeout(function() {
		 	$("#rect-anim-width").attr("from", width);
			$("#rect-anim-pos").attr("from", pos);
			$("#poly-anim").attr("from", points[0] + "," + points[1] + " " + points[2] + "," + points[3] + " " + points[4] + "," + points[5] + " " + points[6] + "," + points[7]);

			if(html_org == "Home"){		
				$("#rect-anim-color").attr("from", "rgba(236,33,39,0.2)");		
			}else if(html_org == "Info"){
				$("#rect-anim-color").attr("from", "rgba(57,181,75,0.25)");
			}else if(html_org == "Events"){
				$("#rect-anim-color").attr("from", "rgba(247,148,30,0.25)");			
			}else{
				$("#rect-anim-color").attr("from", "rgba(109,207,246,0.25)");			
			}
			active = true;
		}, delay);
		}


		
	});
});