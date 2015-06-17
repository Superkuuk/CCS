/* 
*
*/
$(window).load( function() {
    $(window).resize( function() {
        
        var slideshowHeight = $('#slideshow img.active').height();  //Height of slideshow (jumbotron/header).
        
        //Set mainnav to bottom of slideshow
        $('#mainnav').css('top', slideshowHeight);
        $('#jumbotron').height(slideshowHeight);
        
        //Set logo in vertical middle between top of page and top of mainnav.
        $('#logo img').css('top', $('#mainnav').offset().top / 2 - $('#logo img').height() / 2);
        
        //Set horizontal middle of balls (slideshow)
        $('#balls').css('left', ($(document).width()/2) - ($('#balls img.active').outerWidth(true)*2));
        
        //Set top of .page
        $('.page').css('top', slideshowHeight + $('#mainnav').outerHeight(true));
        
    }).resize();
});