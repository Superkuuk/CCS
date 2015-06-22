// wordt ook in resize.js gebruikt!!
var homeActive = true;
var pxChange;

$(document).ready( function() {
	var AnimateActive = false;
	var currentPage = 'Home';
	pxChange = $(window).height() * 0.3;
	
	$("#mainnav ul li").click(function(){
		if(AnimateActive == false){
			AnimateActive = true;

			// Measure text width and position; set width and pos of rect
			var html_org = $(this).html();
			var html_calc = '<span>' + html_org + '</span>';
			$(this).html(html_calc);
			var width = $(this).find('span:first').width();
			width = (width/$(window).width()*1000);
			var margin = width * 0.3;
			width = width + margin;
			var pos = $(this).find('span:first').position().left;
			pos = pos/$(window).width()*1000 - 0.5 * margin;
			var points = $('#poly').attr('points').replace(/ /g, ",").split(",");
			
			$(this).html(html_org);
			$("#rect-anim-width").attr("to", width);
			$("#rect-anim-pos").attr("to", pos);
		
			if(html_org == "Home"){		
				$("#rect-anim-color").attr("to", "rgba(236,33,39,0.2)");
			}else if(html_org == "Info"){
				$("#rect-anim-color").attr("to", "rgba(57,181,75,0.25)");
			}else if(html_org == "Events"){
				$("#rect-anim-color").attr("to", "rgba(247,148,30,0.25)");
			}else{
				$("#rect-anim-color").attr("to", "rgba(109,207,246,0.25)");
			}
			
			if($(this).html() == 'Home' && homeActive != true){
				// Van iets anders naar home
				currentPage = 'Home';				
				$('#jumbotron').animate({'height': '+='+pxChange+'px'}, 750, "linear", function(){ 
					//done
					homeActive = true;
				});
				$('#mainnav').animate({'top': '+='+pxChange+'px'}, 750, "linear", function(){});
				$('#slideshow img').animate({'top': '+='+(pxChange/2)+'px'}, 750, "linear", function(){});
				slideshowHeight = $('#jumbotron').height() + pxChange;
				points[0] = pos + width*2.5;
				points[2] = pos + width*3.5;
				
			}else if($(this).html() != 'Home' && homeActive == true){
				// Van Home naar iets anders
				currentPage = $(this).html();
				$('#jumbotron').animate({'height': '-='+pxChange+'px'}, 750, "linear", function(){ 
					//done 				
					homeActive = false;
				});
				$('#mainnav').animate({'top': '-='+pxChange+'px'}, 750, "linear", function(){});
				$('#slideshow img').animate({'top': '-='+(pxChange/2)+'px'}, 750, "linear", function(){});
				slideshowHeight = $('#jumbotron').height() - pxChange;
				points[0] = pos;
				points[2] = pos + width;

			}else{
				currentPage = $(this).html();
				slideshowHeight = $('#jumbotron').height();
			}
			// Set SVG animation data
			var balkHeight = ($(document).height()-slideshowHeight)*1000/$(document).height();
			$('#rect-anim-height').attr('to', balkHeight);
			$('#rect-anim-y').attr('to', 1000-balkHeight+2); 					

			var yposRect = parseInt($('#rect').attr('y'));
			points[1] = 0;
			points[3] = 0;
			points[4] = (pos + width);
			points[5] = yposRect;
			points[6] = pos;
			points[7] = yposRect;

			$("#poly-anim").attr("to", points[0] + "," + points[1] + " " + points[2] + "," + points[3] + " " + points[4] + "," + points[5] + " " + points[6] + "," + points[7]);

			// SVG animation
			animationToCheck = document.getElementById("rect-anim-y");
			animationToCheck.beginElement();
			animationToCheck = document.getElementById("rect-anim-height");
			animationToCheck.beginElement();
			animationToCheck = document.getElementById("rect-anim-width");
			animationToCheck.beginElement();
			animationToCheck = document.getElementById("rect-anim-pos");
			animationToCheck.beginElement();
			animationToCheck = document.getElementById("rect-anim-color");
			animationToCheck.beginElement();
			animationToCheck = document.getElementById("poly-anim");
			animationToCheck.beginElement();


			$(window).resize();
			setTimeout(function(){
				AnimateActive = false;
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
			}, 750);
		}
	});
});