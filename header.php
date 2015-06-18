<div id="slideshow">
    
    <img src="images/header.jpg">

</div>

<div id="logo">
    <img src="images/logo.png" alt="CCS - Communication Control System">
</div>

<div id="balls">
    <img src="images/ball-fill.png" class="active img__00__">
    <img src="images/ball-open.png" class="img__01__">
    <img src="images/ball-open.png" class="img__02__">
    <img src="images/ball-open.png" class="img__03__">    
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
    var olddiff = 0; var oldpos = 0; var pos;
    
    //Automatically loop images and 'balls'
    function slideSwitch($nextball) {
        
        //Select active ball.
        var $activeball = $('#balls img.active');
            
        //In case no $nextball was inserted in the function, it will automatically select the next image (and thus next ball).
        if(!$nextball) {
                $nextball =  $activeball.next().length ? $activeball.next() : $('#balls img:first');    
        }
                
        var tempnext = $nextball.attr('class').split('__');
        var nextnumber = tempnext[1];
       
        //Move image.
        $('#slideshow img').dequeue()
                        .animate({left: - nextnumber * $(this).width()}, 1000);

        //Change image of ball
        $activeball.attr("src", "images/ball-open.png").removeClass('active last-active');
        $nextball.attr("src", "images/ball-fill.png").addClass('active');
        $nextball = null;
    }
    
</script>