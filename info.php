<div id="info-read-more-block">
    <div id="info-left" style="overflow-y: hidden">
        <p class="info-row-01">
            Deze informatie  meer info meer info meer info is nog veel leuker. 
            Veel plezier met het maken van de website Rutger en Jelle. 
            Voor vragen weten jullie ons te vinden!
        </p>
            
        <p class="info-row-02">
            Hier komt de extra informatie wanneer je op het plusje drukt met een leuke extra fotoooo. 
            Normaal gesproken zou de er onder de afbeelding eenzelfde ruimte zijn als de rode streepjes aangeven. 
            Maar deze pagina heeft een beperkte grootte
        </p>
    </div>
    <div id="info-right">
        <img id="info-img01" class="info-row-01" src="images/product_01.jpg" alt="Hier komt een afbeelding van ons product.">
        <img id="info-img-02" class="info-row-02" src="images/product_01.jpg" alt="Hier komt een afbeelding van een detail van ons product.">
    </div>
</div>

	<script>
        
            // Zelf in te vullen:
            var hoogte_block;	// wordt nog afgerond naar het meest naarbije getal wat goed uitkomt met line-height
            var read_more_text_open = "+";
            var read_more_text_closed = "-";
        
            var real_height;
            var expanded = false;

            $('#info-img01, #info-img02').load( function() {
            //Set height of rows equal
            $('p.info-row-01').height($('img.info-row-01').height());
            $('p.info-row-02').height($('img.info-row-02').height());
            $('.info-row-02').css('margin-top', $('#mainnav').outerHeight());
            $('#info-read-more-block').height($('#info-left').height());
            $('#info-read-more-block').width($('#info-left').outerWidth(true) + $('#info-right').outerWidth(true));	
            

            // automated calculated terminated
            var fontSize = $("#info-read-more-block").css('font-size');
            var lineHeight = Math.floor(parseInt(fontSize.replace('px','')) * 1.5);
            var expanded = false;
            var hoogte_block = $('#info-img01').height();

            hoogte_block = Math.floor(hoogte_block / lineHeight) * lineHeight;
            console.log($('#info-read-more-block').height());
            if($("#info-read-more-block").height() > hoogte_block){
                $("#info-left, #info-right").css({
                    'height': hoogte_block,
                    'overflow': 'hidden'
                });

                // Pas span aan naar gewenste opmaak
                $("#info-left .info-row-01").append('<span id="info-expand" style="cursor: pointer; color: rgba(109,207,246,1)" onclick="readMore();">'+read_more_text_open+'</span>');
            }
        });
        

    	
        function readMore(){
            if(expanded == false){
                var real_height = $("#info-read-more-block").height();
                $("#info-left, #info-right").animate({
                    'height': real_height+'px'
                }, 500, function(){
                    // animation done
                    $("#info-left .info-row-02").append('<span id="info-expand" style="cursor: pointer; color: rgba(109,207,246,1)" onclick="readMore();"></span>');
                    $("#info-expand").html(read_more_text_closed);
                    expanded = true;
                });
                $('body, html').animate({scrollTop: ($('#info-read-more-block').offset().top + $('#info-read-more-block').outerHeight(true)) - $(window).outerHeight(true) + 75}, 500);
                $('#info-expand').remove();
            }else{
                hoogte_block = $('#info-img01').height();
                $("#info-left, #info-right").animate({
                    'height': hoogte_block+'px'
                }, 500, function(){
                    // animation done
                    $('#info-expand').remove();
                    $("#info-left .info-row-01").append('<span id="info-expand" style="cursor: pointer; color: rgba(109,207,246,1)" onclick="readMore();"></span>');
                    $("#info-expand").html(read_more_text_open);
                    expanded = false;
                });
                $('body, html').animate({scrollTop: 0}, 500);
            }
        }
        


	</script>