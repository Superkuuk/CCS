<div id="event-read-more-block">
    <div id="event-left" style="overflow-y: hidden">
        <p class="event-row-01">
            Deze informatie  meer info meer info meer info is nog veel leuker. 
            Veel plezier met het maken van de website Rutger en Jelle. 
            Voor vragen weten jullie ons te vinden!
        </p>            
        <p class="event-row-02">
            Hier komt de extra informatie wanneer je op het plusje drukt met een leuke extra fotoooo. 
            Normaal gesproken zou de er onder de afbeelding eenzelfde ruimte zijn als de rode streepjes aangeven. 
            Maar deze pagina heeft een beperkte grootte
        </p>
        <p class="event-row-02">
            Hier komt de extra informatie wanneer je op het plusje drukt met een leuke extra fotoooo. 
            Normaal gesproken zou de er onder de afbeelding eenzelfde ruimte zijn als de rode streepjes aangeven. 
            Maar deze pagina heeft een beperkte grootte
        </p>
    </div>
    <div id="event-right">
        <img id="event-img01" class="event-row-01" src="images/product_01.png" alt="Hier komt een afbeelding van een festival.">
        <img id="event-img02" class="event-row-02" src="images/product_01.png" alt="Hier komt een afbeelding van een festival.">
        <img id="event-img03" class="event-row-02" src="images/product_01.png" alt="Hier komt een afbeelding van een festival.">
    </div>
</div>

	<script>

            // Zelf in te vullen:
            var hoogte_block;	// wordt nog afgerond naar het meest naarbije getal wat goed uitkomt met line-height
            var read_more_text_open = "+";
            var read_more_text_closed = "-";
        
            var real_height;
            var eventExpanded = false;
        
            console.log($('#event-left').height());
            $('#event-img01').load( function() {
                console.log('whoop');
                //Set height of rows equal
                $('p.event-row-01').height($('img.event-row-01').height());
                $('p.event-row-02').height($('img.event-row-02').height());
                $('.event-row-02').css('margin-top', $('#mainnav').outerHeight());
                $('#event-read-more-block').height($('#event-left').height() * 1.35);
                $('#event-read-more-block').width($('#event-left').outerWidth(true) + $('#event-right').outerWidth(true));	

                // automated calculated terminated
                var fontSize = $("#event-read-more-block").css('font-size');
                var lineHeight = Math.floor(parseInt(fontSize.replace('px','')) * 1.5);
                var eventExpanded = false;
                var hoogte_block = $('#event-img01').height();

                hoogte_block = Math.floor(hoogte_block / lineHeight) * lineHeight;
                console.log($('#event-read-more-block').height());
                if($("#event-read-more-block").height() > hoogte_block){
                    $("#event-left, #event-right").css({
                        'height': hoogte_block,
                        'overflow': 'hidden'
                    });

                    // Pas span aan naar gewenste opmaak
                    $("#event-left .event-row-01").append('<span id="event-expand" style="cursor: pointer; color: rgba(109,207,246,1)" onclick="readMore();">'+read_more_text_open+'</span>');
                }
            });
        

    	
        function readMore(){
            if(eventExpanded == false){
                var real_height = $("#event-read-more-block").height();
                $("#event-left, #event-right").animate({
                    'height': real_height+'px'
                }, 500, function(){
                    // animation done
                    $("#event-left .event-row-03").append('<span id="event-expand" style="cursor: pointer; color: rgba(109,207,246,1)" onclick="readMore();"></span>');
                    $("#event-expand").html(read_more_text_closed);
                    eventExpanded = true;
                });
                $('body, html').animate({scrollTop: ($('#event-read-more-block').offset().top + $('#event-read-more-block').outerHeight(true)) - $(window).outerHeight(true) - 150}, 500);
                $('#event-expand').remove();
            }else{
                hoogte_block = $('#event-img01').height();
                $("#event-left, #event-right").animate({
                    'height': hoogte_block+'px'
                }, 500, function(){
                    // animation done
                    $('#event-expand').remove();
                    $("#event-left .event-row-01").append('<span id="event-expand" style="cursor: pointer; color: rgba(109,207,246,1)" onclick="readMore();"></span>');
                    $("#event-expand").html(read_more_text_open);
                    eventExpanded = false;
                });
                $('body, html').animate({scrollTop: 0}, 500);
            }
        }
        


	</script>