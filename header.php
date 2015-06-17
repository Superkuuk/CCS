<div id="slideshow">
    
    <img src="images/header01.jpg" class="active img__01__">
    <img src="images/header01.jpg" class="img__02__">
    <img src="images/header01.jpg" class="img__03__">
    <img src="images/header01.jpg" class="img__04__">

</div>

<div id="logo">
    <img src="images/logo.png" alt="CCS - Communication Control System">
</div>

<div id="balls">
    <img src="images/ball-fill.png" class="active img__01__">
    <img src="images/ball-open.png" class="img__02__">
    <img src="images/ball-open.png" class="img__03__">
    <img src="images/ball-open.png" class="img__04__">    
</div>



<script>
/*  Run script on document load (no images are loaded).
*   
*/
var handler = setInterval("slideSwitch()", 3000);
$(document).ready( function() {

});
    
/*  Run script on window load (images are loaded)
*   For everything that involves getting attributes of images
*/
$(window).load( function() {
    //Set logo in vertical middle between top of page and top of mainnav.
    $('#logo img').css('top', $('#mainnav').offset().top / 2 - $('#logo img').height() / 2);
    //Set horizontal middle of balls (slideshow)
    $('#balls').css('left', ($(document).width()/2) - ($('#balls img.active').outerWidth(true)*2));
    
    $('#balls img').click( function () {
        //Pause interval.
        slideSwitch($('#balls img.'+$(this).attr("class")));
    });
    
});
    
    var $nextball;
    var sliding = false;
    //Automatically loop images and 'balls'
    function slideSwitch($nextball) {
    if(!sliding) {
        console.log(sliding);
        var $active = $('#slideshow img.active');
        var $activeball = $('#balls img.active');

            if(!$nextball) {
                console.log('nieuwe nextball')
                $nextball =  $activeball.next().length ? $activeball.next()
                : $('#balls img:first');    
            }
            if($nextball.hasClass('active')) {
                console.log('Actief');
            }


            var $next = $active.next().length ? $active.next()
                : $('#slideshow img:first');

            var tempactive = $activeball.attr('class').split('__');
            var activenumber = tempactive[1];
            var tempnext = $nextball.attr('class').split('__');
            var nextnumber = tempnext[1];

            //Check if new image is more to right than old image.
            if(parseInt(nextnumber) > parseInt(activenumber)) {
                $active.addClass('last-active')
                        .animate({left: '-100%'}, 1000, function() {
                         $('#slideshow img.last-active').removeClass('last-active')
                                                    .removeClass('active');
                    });
                $next.css({left: '100%'})
                    .addClass('active')
                    .animate({left: 0}, 1000);
            } else if(parseInt(nextnumber) < parseInt(activenumber)) {
                $active.addClass('last-active')
                    .animate({left: '100%'}, 1000, function() {
                    $('#slideshow img.last-active').removeClass('last-active')
                                                    .removeClass('active');
                });
                $next.css({left: '-100%'})
                    .addClass('active')
                    .animate({left: 0}, 1000);
            }


            $activeball.attr("src", "images/ball-open.png").removeClass('active last-active');
            $nextball.attr("src", "images/ball-fill.png").addClass('active');
        $nextball = null;
    }
    }
    
</script>