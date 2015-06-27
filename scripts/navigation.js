// wordt ook in resize.js gebruikt!!
var homeActive = true;
var pxChange;
var currentPage = 'Home';

$(document).ready( function() {
	var AnimateActive = false;	
	pxChange = $('body').height() * 0.15;
    var currentPos = 0;
	
    $('#mainpage').append("<div id='"+currentPage+"' class='page active-page'></div>");
    $('.active-page').load(currentPage+'.php');
    
    
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
			var posx = $(this).find('span:first').offset().left;
			var posy = $('#mainnav').offset().top;
			
			if(currentPage == 'Home' && html_org != 'Home'){
				// van Home naar iets anders
				posy -= pxChange;
			}else if(currentPage != 'Home' && html_org == 'Home'){
				// van iets anders naar Home
				posy += pxChange;
			}
			$(this).html(html_org);
			
			posy = posy/$('body').height()*1000;
			posx = posx/$(window).width()*1000 - 0.5 * margin;			
			
			// lb, rb, ro, lo
			var points = [posx, 0, posx + width, 0, posx + width, posy, posx, posy];

			if(html_org == 'Home'){
				// van iets anders naar Home
				points = [posx + width * 2.5, 0, posx + width * 3.5, 0, posx + width, posy, posx, posy];
			}
			
 			$("#rect-anim-width").attr("to", width);
 			$("#rect-anim-pos").attr("to", posx);
 			$("#rect-anim-y").attr("to", posy);
 			$("#rect-anim-height").attr("to", 1000-posy);
			$("#poly-anim").attr("to", points[0] + "," + points[1] + " " + points[2] + "," + points[3] + " " + points[4] + "," + points[5] + " " + points[6] + "," + points[7]);
 			
			if(html_org == "Home"){		
				$("#rect-anim-color").attr("to", "rgba(236,33,39,0.2)");
			}else if(html_org == "Info"){
				$("#rect-anim-color").attr("to", "rgba(57,181,75,0.25)");
			}else if(html_org == "Events"){
				$("#rect-anim-color").attr("to", "rgba(247,148,30,0.25)");
			}else{
				$("#rect-anim-color").attr("to", "rgba(109,207,246,0.25)");
			}
			
            //Load new page
            if($(this).html() != currentPage){
				$('#mainpage').append("<div id='"+$(this).html()+"' class='nextpage page'></div>");
				var e = $(this).html();
				$('.nextpage').load($(this).html()+'.php', function(){ 
					if(e == "Contact"){
						contactLoad();
					}else if(e == "Info"){
						configurationLoad();
					}
				});
            }
            
			if($(this).html() == 'Home' && homeActive != true){
				// Van iets anders naar home
				currentPage = 'Home';	
                currentPos = 0;
				$('#jumbotron').animate({'height': '+='+pxChange+'px'}, 750, "linear", function(){ 
					//done
					homeActive = true;
				});
				$('#mainnav').animate({'top': '+='+pxChange+'px'}, 750, "linear", function(){});
				$('#slideshow img').animate({'top': '+='+(pxChange/2)+'px'}, 750, "linear", function(){});
				slideshowHeight = $('#jumbotron').height() + pxChange;
                $('#logo img').css('right', $(window).width() - ($("#logo img").offset().left + $('#logo img').outerWidth(true)));
                $('#logo img').css('left', 'auto');
                $('#logo img').dequeue().animate({ 'right' : '3%'}, 750);
                
                //Animate page content
                $('body').css('overflow-x', 'hidden');
                $('.active-page').dequeue()
                                    .animate({'left' : '100%',
                                             'top' : slideshowHeight + $('#mainnav').outerHeight(true)
                                             },750);
                $('#Home').css('left', '-100%')
                                    .css('top', $('.active-page').css('top'))
                                    .dequeue()
                                    .animate({'left' : '0',
                                             'top' : slideshowHeight + $('#mainnav').outerHeight(true)
                                             },800, function() {
                                             $('.active-page').remove();
                                             $(this).addClass('active-page').removeClass('nextpage');
                                             $('body').css('overflow-x', 'initial');
                                             $(window).resize();
                                    });                
                
				
			}else if($(this).html() != 'Home' && homeActive == true){
				// Van Home naar iets anders
				currentPage = $(this).html();
                currentPos = $(this).position().left;
				$('#jumbotron').animate({'height': '-='+pxChange+'px'}, 750, "linear", function(){ 
					//done 				
					homeActive = false;
				});
				$('#mainnav').animate({'top': '-='+pxChange+'px'}, 750, "linear", function(){});
				$('#slideshow img').animate({'top': '-='+(pxChange/2)+'px'}, 750, "linear", function(){});
				slideshowHeight = $('#jumbotron').height() - pxChange;
                $('#logo img').css('left', $("#logo img").offset().left);
                $('#logo img').css('right', 'auto');
                $('#logo img').dequeue().animate({ 'left' : '3%'}, 750);
                
                //Animate page content
                $('body').css('overflow-x', 'hidden');
                $('#Home').dequeue()
                                    .animate({'left' : '-100%',
                                             'top' : slideshowHeight + $('#mainnav').outerHeight(true)
                                             },750);
                $('.nextpage').css('left', '100%')
                                    .css('top', $('#Home').css('top'))
                                    .dequeue()
                                    .animate({'left' : '0',
                                             'top' : slideshowHeight + $('#mainnav').outerHeight(true)
                                             },800, function() {
                                             $('.active-page').remove();
                                             $(this).addClass('active-page').removeClass('nextpage');
                                             $('body').css('overflow-x', 'initial');
                                             $(window).resize();
                                    });
                $('footer').animate({'top': 4000}, 750);

			} else if($(this).html() != currentPage) {
				currentPage = $(this).html();
				slideshowHeight = $('#jumbotron').height();
                
                if($(this).position().left > currentPos) {
                    //Animate page-content to left
                    currentPos = $(this).position().left;
                    $('body').css('overflow-x', 'hidden');
                    $('.active-page').dequeue()
                                        .animate({'left' : '-100%'},750);
                    $('.nextpage').css('left', '+100%')
                                        .css('top', slideshowHeight + $('#mainnav').outerHeight(true))
                                        .dequeue()
                                        .animate({'left' : '0'},750, function() {
                                                 $('.active-page').remove();
                                                 $(this).addClass('active-page').removeClass('nextpage');
                                                 $('body').css('overflow-x', 'initial');
                                                 $(window).resize();
                                        });
                } else if($(this).position().left < currentPos) {
                    //Animate page-content to right
                    $('body').css('overflow-x', 'hidden');
                    currentPos = $(this).position().left;
                     $('.active-page').dequeue()
                                        .animate({'left' : '100%'},750);
                     $('.nextpage').css('left', '-100%')
                                        .css('top', slideshowHeight + $('#mainnav').outerHeight(true))
                                        .dequeue()
                                        .animate({'left' : '0'},750, function() {
                                                 $('.active-page').remove();
                                                 $(this).addClass('active-page').removeClass('nextpage');
                                                 $('body').css('overflow-x', 'initial');
                                                 $(window).resize();
                                        });
                }
			}
            
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


			//$(window).resize();
			setTimeout(function(){
				AnimateActive = false;
 				$("#rect-anim-width").attr("from", width);
 				$("#rect-anim-pos").attr("from", posx);
 				$('#rect-anim-y').attr('from', posy); 
 				$('#rect-anim-height').attr('from', 1000-posy);
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