/* 
*
*/
$(window).load( function() {
        //If homepage is selected
        if(homeActive) {
            var slideshowHeight = $('#slideshow img').height();  //Height of slideshow (jumbotron/header).
        } else {
            var slideshowHeight = $('#slideshow img').height() - pxChange;  //Height of slideshow (jumbotron/header).
        }
        
        //Set horizontal middle of balls (slideshow)
        $('#balls').css('left', ($(document).width()/2) - ($('#balls img.active').outerWidth(true)*2));
        
        //Set navigation and jumbotron height
        $('#mainnav').css('top', slideshowHeight);
        $('#jumbotron').css('height', slideshowHeight);
        
        $('#svgBalkBoven').attr('height', $(document).height()+'px' );
      
 		// Measure text width and position; set width and pos of rect
		var html_org = $( "#mainnav ul li:first" ).html();
		var html_calc = '<span>' + html_org + '</span>';
		$( "#mainnav ul li:first" ).html(html_calc);
		var width = $( "#mainnav ul li:first" ).find('span:first').width();
		width = (width/$(window).width()*1000);
		var margin = width * 0.3;
		width = width + margin;
		var posx = $( "#mainnav ul li:first" ).find('span:first').offset().left;
		var posy = $('#mainnav').offset().top;
		posy = posy/$('body').height()*1000;
		posx = posx/$(window).width()*1000 - 0.5 * margin;	
		$( "#mainnav ul li:first" ).html(html_org);
		
 		$("#rect-anim-width").attr("from", width);
 		$("#rect-anim-pos").attr("from", posx);
  		$("#rect-anim-height").attr("from", 1000-posy);
 		$("#rect-anim-y").attr("from", posy);
 		$("#rect-anim-color").attr("from", "rgba(236,33,39,0.2)");       
	
		var points = [posx + width * 2.5, 0, posx + width * 3.5, 0, posx + width, posy, posx, posy];
		$("#poly-anim").attr("from", points[0] + "," + points[1] + " " + points[2] + "," + points[3] + " " + points[4] + "," + points[5] + " " + points[6] + "," + points[7]);
    
/*      
        Onderstaande gedeelte verplaatst uit resize naar load, 
        omdat deze niet werkte voor een resize en juist bugs gaf. 
        Hij moet alleen wel onload worden gedraaid, 
        want anders staat de balk niet goed bij home.
*/
        $('#svgBalkBoven').attr('height', $(document).height()+'px' );
      
 		// Measure text width and position; set width and pos of rect
		var html_org = $( "#mainnav ul li:first" ).html();
		var html_calc = '<span>' + html_org + '</span>';
		$( "#mainnav ul li:first" ).html(html_calc);
		var width = $( "#mainnav ul li:first" ).find('span:first').width();
		width = (width/$(window).width()*1000);
		var margin = width * 0.3;
		width = width + margin;
		var posx = $( "#mainnav ul li:first" ).find('span:first').offset().left;
		var posy = $('#mainnav').offset().top;
		posy = posy/$('body').height()*1000;
		posx = posx/$(window).width()*1000 - 0.5 * margin;	
		$( "#mainnav ul li:first" ).html(html_org);

		// lb, rb, ro, lo
		points = [posx, 0, posx + width, 0, posx + width, posy, posx, posy];

		if(currentPage == 'Home'){
			// van iets anders naar Home
			points = [posx + width * 2.5, 0, posx + width * 3.5, 0, posx + width, posy, posx, posy];
		}
	
		$("#rect").attr("x", posx);
		$("#rect").attr("width", width);
		$("#rect").attr("y", posy);
		$("#rect").attr("height", 1000-posy);       
        $("#poly").attr("points", points[0] + "," + points[1] + " " + points[2] + "," + points[3] + " " + points[4] + "," + points[5] + " " + points[6] + "," + points[7]);
    
		
    $(window).resize( function() {
        
        //If homepage is selected
        if(homeActive) {
            var slideshowHeight = $('#slideshow img').height();  //Height of slideshow (jumbotron/header).
        } else {
            var slideshowHeight = $('#slideshow img').height() - pxChange;  //Height of slideshow (jumbotron/header).
        }
        
        //Set horizontal middle of balls (slideshow)
        $('#balls').css('left', ($(document).width()/2) - ($('#balls img.active').outerWidth(true)*2));
        
        //Set navigation and jumbotron height
        $('#mainnav').css('top', slideshowHeight);
        $('#jumbotron').css('height', slideshowHeight);
        $('.page').css('top', slideshowHeight + $('#mainnav').outerHeight(true));
        
        $('footer').css('top', $('.page').offset().top + $('.page').outerHeight(true));
        
        //Set slideshow image te the left
        slideSwitch('current');

    }).resize();
});