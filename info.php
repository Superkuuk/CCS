<!-- 
Jelle! Kan jij op de info pagina nog zetten dat 1 power supply 20 wristbands op kan laden?
Dit kan gewoon in een blokje tekst oid. Succes!
 -->


<div id="conf_container">
	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(255,123,125,0.5)">
			<img src="images/pakket_1.png" alt="1">
		</div>
		<div class="cont_inf">
			<span>Little</span><br>
			wristband: 80<br>
			power supply: 4<br>
			routers: 6<br>
			incl. guidebook<br>
			price: €6000
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(125,233,12,0.5)">
            <img src="images/pakket_2.png" alt="2">
		</div>
		<div class="cont_inf">
			<span>Small</span><br>
			wristband: 140<br>
			power supply: 7<br>
			routers: 11<br>
			incl. guidebook<br>
			price: €11000
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(11,43,244,0.5)">
            <img src="images/pakket_3.png" alt="3">
		</div>
		<div class="cont_inf">
			<span>Middle</span><br>
			wristband: 200<br>
			power supply: 10<br>
			routers: 15<br>
			incl. guidebook<br>
			price: €15500
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(180,11,55,0.5)">
            <img src="images/pakket_4.png" alt="4">
		</div>
		<div class="cont_inf">
			<span>Big</span><br>
			wristband: 240<br>
			power supply: 12<br>
			routers: 19<br>
			incl. guidebook<br>
			price: €19000
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(90,90,120,0.5)">
			<img src="images/pakket_5.png" alt="5">
		</div>
		<div class="cont_inf">
			<span>Large</span><br>
			wristband: 280<br>
			power supply: 14<br>
			routers: 22<br>
			incl. guidebook<br>
			price: €22000
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(0,222,222,0.5)">
			<img class="info_small" src="images/alleen_armband.png" alt="A">
		</div>
		<div class="cont_inf">
			<span>Extra wristbands</span><br>
			wristband: 20<br>
			incl. guidebook<br>
			price: €1750
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(241,22,11,0.5)">
			<img class="info_small" src="images/alleen_oplader.png" alt="B">
		</div>
		<div class="cont_inf">
			<span>Extra power supply</span><br>
			power supply: 1<br>
			incl. guidebook<br>
			price: €37.5
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(255,255,33,0.5)">
			<img class="info_small" src="images/alleen_router.png" alt="C">
		</div>
		<div class="cont_inf">
			<span>Extra routers</span><br>
			routers: 1<br>
			incl. guidebook<br>
			price: €110
		</div>
	</div>

</div>

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
		$(".conf").mouseenter(function(){
			$(this).find( ".cont_inf" ).dequeue().animate({
				'top': (2*1.7)+'em',
				'opacity': 1
			}, 300, function(){});
			$(this).find( ".conf_nr" ).dequeue().animate({
				'opacity': 0.2
			}, 300, function(){});
		});
	
		$(".conf").mouseleave(function(){
			$(this).find( ".cont_inf" ).dequeue().animate({
				'top': '-1.7em',
				'opacity': 0
			}, 300, function(){});
			$(this).find( ".conf_nr" ).dequeue().animate({
				'opacity': 1
			}, 300, function(){});
		});    


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
            $('#info-read-more-block').height($('#info-left').height() * 1.35);
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