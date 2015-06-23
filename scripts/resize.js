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
        
        //SVG balken correction
        var balkHeight = ($(document).height()-slideshowHeight)*1000/$(document).height();
        $('#rect').attr('height', balkHeight);
        $('#rect').attr('y', 1000-balkHeight+2);

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
		
		$("#rect-anim-width").attr("from", width);
		$("#rect-anim-pos").attr("from", pos);
		$("#rect-anim-color").attr("from", "rgba(236,33,39,0.2)");
	
		$("#rect").attr("x", pos);
		$("#rect").attr("width", width);
		
		points = $('#poly').attr('points').replace(/ /g, ",").split(",");
		var yposRect = parseInt($('#rect').attr('y'));

		var points = $('#poly').attr('points').replace(/ /g, ",").split(",");
  		points[0] = pos + width*2.5;
		points[1] = 0;
		points[2] = pos + width*3.5;
		points[3] = 0;
		points[4] = (pos + width);
		points[5] = yposRect;
		points[6] = pos;
		points[7] = yposRect;
		
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
        
        //Set slideshow image te the left
        slideSwitch('current');

        //SVG balken correction
        var balkHeight = ($(document).height()-slideshowHeight)*1000/$(document).height();
        $('#rect').attr('height', balkHeight);
        $('#rect').attr('y', 1000-balkHeight+2);
        $('#rect-anim-height').attr('from', balkHeight);
        $('#rect-anim-y').attr('from', 1000-balkHeight+2);       
        
//         $('#poly').attr('points', balkHeight);
//         $('#poly-anim').attr('from', balkHeight);
        
//        var contentHeight = ($('#mainnav').outerHeight(true) + $('.page').outerHeight(true) + $('footer').outerHeight(true));
        
        //Set mainnav to bottom of slideshow
//         $('#mainnav').css('top', slideshowHeight); 
//         $('#jumbotron').height(slideshowHeight);
              
        //Set svg drawing screen to appropriate height.
//         $('#svgBalkBoven').css('height', slideshowHeight);
//         $('#svgBalkOnder').css('height', contentHeight);
        
        //Set logo in vertical middle between top of page and top of mainnav.
//        $('#logo img').css('top', $('#mainnav').offset().top / 2 - $('#logo img').height() / 2);
        

        
        //Set top of .page
//        $('.page').css('top', slideshowHeight + $('#mainnav').outerHeight(true));
//        $('.page').css('margin-top', $('#mainnav').height());
        
        //Set footer to the bottom of the page (.page top + hoogte van .page, inclusief zijn margin)
//        $('footer').css('top', ($('.page').position().top + $('.page').outerHeight(true) )+ 'px');
    }).resize();
});