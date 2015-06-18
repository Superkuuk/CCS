/* 
*
*/
$(window).load( function() {
    $(window).resize( function() {
        
        //If homepage is selected
        if(home) {
            var slideshowHeight = $('#slideshow img').height();  //Height of slideshow (jumbotron/header).
        } else {
            var slideshowHeight = $('#slideshow img').height() / 1.5;  //Height of slideshow (jumbotron/header).
        }
        var contentHeight = ($('#mainnav').outerHeight(true) + $('.page').outerHeight(true) + $('footer').outerHeight(true));
        
        //Set mainnav to bottom of slideshow
        $('#mainnav').css('top', slideshowHeight); 
        $('#jumbotron').height(slideshowHeight);
              
        //Set svg drawing screen to appropriate height.
        $('#svgBalkBoven').css('height', slideshowHeight);
        $('#svgBalkOnder').css('height', contentHeight);
        
        //Set logo in vertical middle between top of page and top of mainnav.
        $('#logo img').css('top', $('#mainnav').offset().top / 2 - $('#logo img').height() / 2);
        
        //Set horizontal middle of balls (slideshow)
        $('#balls').css('left', ($(document).width()/2) - ($('#balls img.active').outerWidth(true)*2));
        
        //Set top of .page
        $('.page').css('top', slideshowHeight + $('#mainnav').outerHeight(true));
        $('.page').css('margin-top', $('#mainnav').height());
        
        //Set footer to the bottom of the page (.page top + hoogte van .page, inclusief zijn margin)
        $('footer').css('top', ($('.page').position().top + $('.page').outerHeight(true) )+ 'px');
    }).resize();
});