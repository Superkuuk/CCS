<div id="slideshow">
    
    <img src="images/header01.jpg" class="active img__01__">
    <img src="images/header02.jpg" class="img__02__">
    <img src="images/header01.jpg" class="img__03__">
    <img src="images/header02.jpg" class="img__04__">

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
    $('#balls img').click( function () {
        //Pause interval.
        slideSwitch($('#balls img.'+$(this).attr("class")));
    });
});
    
    var $nextball;
    var sliding = false;
    //Automatically loop images and 'balls'
    function slideSwitch($nextball) {
        
        //Select active image and active ball.
        var $active = $('#slideshow img.active');
        var $activeball = $('#balls img.active');
            
            //In case no $nextball was inserted in the function, it will automatically select the next image (and thus next ball).
            if(!$nextball) {
                $nextball =  $activeball.next().length ? $activeball.next() : $('#balls img:first');    
            }
                console.log($nextball.hasClass('active'));

            //If selected ball is already active.
            if($nextball.hasClass('last-active')) {
                console.log('Actief');
            }

            //Get number of selected ball and previous ball.
            var tempactive = $activeball.attr('class').split('__');
            var activenumber = tempactive[1];
            var tempnext = $nextball.attr('class').split('__');
            var nextnumber = tempnext[1];
        
            //Make sure next image corresponds to selected ball
            var $next = $('#slideshow img.img__'+nextnumber+'__');

            //Check if new image is more to right than old image.
                var diff = parseInt(nextnumber) - parseInt(activenumber);
                $('#slideshow img').each( function() {
                    $(this).dequeue()
                    .animate({left: Math.floor($(this).position().left / $(document).width()) * $(document).width() - diff * $(this).width() }, 1000);
                });    


            //Change image of ball
            $activeball.attr("src", "images/ball-open.png").removeClass('active last-active');
            $nextball.attr("src", "images/ball-fill.png").addClass('active');
        $nextball = null;
      //  }
    }
    
</script>