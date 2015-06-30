<div id="event-read-more-block">
    <div id="event-left" style="overflow-y: hidden">
        <p class="event-row-01">
            The product can be used at a different kinds of events. The only requirement is that the event does not yet have a fully working security system and is small enough for the product to work. There are several events that might benefit from the communication control system and examples of these events can be found below.
        </p>            
        <p class="event-row-02">
          Festivals such as music, arts, or food festivals are very common. Almost everday there is another festival somewhere. This product wants to focus on the smaller festivals with less than 5000 visitors a day. 
        </p>
        <p class="event-row-03">
           Fun fairs that travel around the county is another sort of event that could use a quicker way of communicating when there is an emergency. There are also many fun fairs around the country, and everyday another one is opened for several days. 
        </p>
         <p class="event-row-04">
Sport events are also very common, because there are many sports and it is a common interest a lot of people. A great majority of the people like to either play sports or watch sports. Therefore sport events also attract a large amount of visitors. Although it is quite common for the sporters themselves to have an accident, the visitors can also get in trouble and then it is important for the employees to handle quickly to keep the peace. 
        </p>
         <p class="event-row-05">
Other events that might benefit from the communication control system are street fairs, local concerts and large conferences.
        </p>
    </div>
    <div id="event-right">
        <img id="event-img01" class="event-row-01" src="images/events01.jpg" alt="Hier komt een afbeelding van een festival.">
        <img id="event-img02" class="event-row-02" src="images/events02.jpg" alt="Hier komt een afbeelding van een festival.">
        <img id="event-img03" class="event-row-03" src="images/events03.jpg" alt="Hier komt een afbeelding van een festival.">
        <img id="event-img04" class="event-row-04" src="images/events04.jpg" alt="Hier komt een afbeelding van een festival.">
        <img id="event-img05" class="event-row-05" src="images/events05.jpg" alt="Hier komt een afbeelding van een festival.">
    </div>
    <div id="event-img06" class="infographic event-row-06">
            <?php include_once('infographic/index.html'); ?>
        <p style="margin-left:8%;">The data used in this infographic is dummy data. This infographic is a partly working exapmle of the one explained in the essay. </p>
    </div>
</div>

	<script>

            // Zelf in te vullen:
            var hoogte_block;	// wordt nog afgerond naar het meest naarbije getal wat goed uitkomt met line-height
            var read_more_text_open = "+";
            var read_more_text_closed = "-";
        
            var real_height;
            var eventExpanded = false;
                
            var $images = $('#event-right img');
            var loaded_images_count = 0;

            $images.load(function(){
                loaded_images_count++;

                if (loaded_images_count == $images.length) {
                    //Set height of rows equal
                    $('p.event-row-01').height($('img.event-row-01').height());
                    $('p.event-row-02').height($('img.event-row-02').height());
                    $('p.event-row-03').height($('img.event-row-03').height());
                    $('p.event-row-04').height($('img.event-row-04').height());
                    $('p.event-row-05').height($('img.event-row-05').height());
                    $('#infographic').height($(this).height() * (4/5));
                    $('#infographic, .infographic p').css('opacity', 0);
                    $('#infographic').css('margin-top', $('img.event-row-05').offset().top + $('img.event-row-05').height());
                    $('#infographic').next('p').css('margin-top', $('#infographic').height());
                    $('.event-row-02, .event-row-03, .event-row-04, .event-row-05, .event-row-06').css('margin-top', $('#mainnav').outerHeight());
                    $('#event-read-more-block').height($('#event-right').outerHeight(true) + $('#event-img6').height());
                    $('#event-read-more-block').width($('#event-left').outerWidth(true) + $('#event-right').outerWidth(true));	

                    // automated calculated terminated
                    var fontSize = $("#event-read-more-block").css('font-size');
                    var lineHeight = Math.floor(parseInt(fontSize.replace('px','')) * 1.5);
                    var eventExpanded = false;
                    var hoogte_block = $('#event-img01').height();

                    hoogte_block = Math.floor(hoogte_block / lineHeight) * lineHeight;
                    if($("#event-read-more-block").height() > hoogte_block){
                        $("#event-left, #event-right").css({
                            'height': hoogte_block,
                            'overflow': 'hidden'
                        });

                        // Pas span aan naar gewenste opmaak
                        $("#event-left .event-row-01").append('<span id="event-expand" style="cursor: pointer; color: rgb(247,148,30)" onclick="readMore();">'+read_more_text_open+'</span>');
                        $('footer').css('top', $('.page').offset().top + $('.page').outerHeight(true));
                    }
                }
            });
        

    	
        function readMore(){
            if(eventExpanded == false){
                var real_height = $("#event-read-more-block").height();
                $("#event-left, #event-right").animate({
                    'height': real_height+'px'
                }, 500, function(){
                    // animation done
                    $("#event-left .event-row-05").append('<span id="event-expand" style="cursor: pointer; color: rgb(247,148,30)" onclick="readMore();"></span>');
                    $("#event-expand").html(read_more_text_closed);
                    eventExpanded = true;
                });
                $('#infographic, .infographic p').css('opacity',1);
                $('body, html').animate({scrollTop: $('p.event-row-02').offset().top - 50}, 500);
                $('#event-expand').remove();
            }else{
                hoogte_block = $('#event-img01').height();
                $("#event-left, #event-right").animate({
                    'height': hoogte_block+'px'
                }, 500, function(){
                    // animation done
                    $('#event-expand').remove();
                    $("#event-left .event-row-01").append('<span id="event-expand" style="cursor: pointer; color: rgb(247,148,30)" onclick="readMore();"></span>');
                    $("#event-expand").html(read_more_text_open);
                    eventExpanded = false;
                });
                $('#infographic, .infographic p').css('opacity',0);
                $('body, html').animate({scrollTop: 0}, 500);
            }
        }
        


	</script>