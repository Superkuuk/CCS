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
			wristbands: 80 pcs<br>
			power supplies: 4 pcs<br>
			routers: 6 pcs<br>
			incl. guidebook<br>
			price: €6000<br>
			1 year warranty
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(125,233,12,0.5)">
            <img src="images/pakket_2.png" alt="2">
		</div>
		<div class="cont_inf">
			<span>Small</span><br>
			wristbands: 140 pcs<br>
			power supplies: 7 pcs<br>
			routers: 11 pcs<br>
			incl. guidebook<br>
			price: €11000<br>
			1 year warranty
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(11,43,244,0.5)">
            <img src="images/pakket_3.png" alt="3">
		</div>
		<div class="cont_inf">
			<span>Middle</span><br>
			wristbands: 200 pcs<br>
			power supplies: 10 pcs<br>
			routers: 15 pcs<br>
			incl. guidebook<br>
			price: €15500<br>
			2 years warranty
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(180,11,55,0.5)">
            <img src="images/pakket_4.png" alt="4">
		</div>
		<div class="cont_inf">
			<span>Big</span><br>
			wristbands: 240 pcs<br>
			power supplies: 12 pcs<br>
			routers: 19 pcs<br>
			incl. guidebook<br>
			price: €19000<br>
			2 years warranty
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(90,90,120,0.5)">
			<img src="images/pakket_5.png" alt="5">
		</div>
		<div class="cont_inf">
			<span>Large</span><br>
			wristbands: 280 pcs<br>
			power supplies: 14 pcs<br>
			routers: 22 pcs<br>
			incl. guidebook<br>
			price: €22000<br>
			3 years warranty
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(0,222,222,0.5)">
			<img class="info_small" src="images/alleen_armband.png" alt="A">
		</div>
		<div class="cont_inf">
			<span>Extra wristbands</span><br>
			wristbands: 20 pcs<br>
			incl. guidebook<br>
			price: €1750<br>
			1 year warranty
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(241,22,11,0.5)">
			<img class="info_small" src="images/alleen_oplader.png" alt="B">
		</div>
		<div class="cont_inf">
			<span>Extra power supply</span><br>
			power supply: 1 pc<br>
			incl. guidebook<br>
			price: €37.5<br>
			1 year warranty
		</div>
	</div>

	<div id="conf_1" class="conf">
		<div class="conf_nr" style="color:rgba(255,255,33,0.5)">
			<img class="info_small" src="images/alleen_router.png" alt="C">
		</div>
		<div class="cont_inf">
			<span>Extra router</span><br>
			router: 1 pc<br>
			incl. guidebook<br>
			price: €110<br>
			1 year warranty
		</div>
	</div>

</div>

<div id="info-read-more-block">
    <div id="info-left" style="overflow-y: hidden">
        <p class="info-row-01">
            The communication control system is a product to enhance the safety at events. It is a wrist band that allows the user to contact other employees at the event when there is an emergency. 
        </p>
            
        <p class="info-row-02">
            The wrist band should be worn diagonally around the wrist because this makes it easier for the user to read messages that appear on the screen, while it also allows the user to wear and use the product without disabling the movements of the hand. 
        </p>        
        <p class="info-row-03">
            When something goes wrong the user can activate the screen and contact one of the three services; first aid, fire fighters and security guards. It depends on the situation whether the alarm number should be called or whether the people working at the event can simply help. To know how serious the emergency is, the user has to answer questions about the intensity of the emergency. He has to decide how many people are needed to help. The wrist band then contacts the amount of people needed according to the information it received from the user. 
        </p>        
        <p class="info-row-04">
            Please note: one power supply unit will be able to charge 20 wristbands at a time.
        </p>
    </div>
    <div id="info-right">
        <img id="info-img01" class="info-row-01" src="images/product_01.png" alt="CCS - Polsbandje voor signalering">
        <img id="info-img02" class="info-row-02" src="images/product_dummy.png" alt="CCS - Polsbandje gedragen.">
        <img id="info-img03" class="info-row-03" src="images/product_dummy.png" alt="CCS - User Interface van het signaleringssysteem">
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
        
            var $images = $('#info-right img');
            var loaded_images_count = 0;
        
              $images.load(function(){
                loaded_images_count++;

                if (loaded_images_count == $images.length) {
                    //Set height of rows equal
                    $('p.info-row-01').height($('img.info-row-01').height());
                    $('p.info-row-02').height($('img.info-row-02').height());
                    if($('p.info-row-03').height() < $('img.info-row-03').height()) {
                        $('p.info-row-03').height($('img.info-row-03').height());
                    }
                    $('p.info-row-04').height($('img.info-row-03').height());
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
                        $("#info-left .info-row-01").append('<span id="info-expand" style="cursor: pointer; color: rgb(57,181,75)" onclick="readMore();">'+read_more_text_open+'</span>');
                        $('footer').css('top', $('.page').offset().top + $('.page').outerHeight(true));
                    }
                }
              });
        

    	
        function readMore(){
            if(expanded == false){
                var real_height = $("#info-read-more-block").height();
                $("#info-left, #info-right").animate({
                    'height': real_height+'px'
                }, 500, function(){
                    // animation done
                    $("#info-left .info-row-04").append('<span id="info-expand" style="cursor: pointer; color: rgb(57,181,75)" onclick="readMore();"></span>');
                    $("#info-expand").html(read_more_text_closed);
                    expanded = true;
                });
                $('body, html').animate({scrollTop: $('p.info-row-02').offset().top - 50}, 500);
                $('#info-expand').remove();
            }else{
                hoogte_block = $('#info-img01').height();
                $("#info-left, #info-right").animate({
                    'height': hoogte_block+'px'
                }, 500, function(){
                    // animation done
                    $('#info-expand').remove();
                    $("#info-left .info-row-01").append('<span id="info-expand" style="cursor: pointer; color: rgb(57,181,75)" onclick="readMore();"></span>');
                    $("#info-expand").html(read_more_text_open);
                    expanded = false;
                });
                $('body, html').animate({scrollTop: 0}, 500);
            }
        }
        


	</script>