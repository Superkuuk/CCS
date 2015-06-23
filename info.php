<div id="read-more-block"><p>Deze informatie  meer info meer info meer info is nog veel leuker. 
    Veel plezier met het maken van de website Rutger en Jelle. 
    Voor vragen weten jullie ons te vinden!</p>
    
    <img src="images/product_01.jpg" alt="Hier komt een afbeelding van ons product.">
    
    <p>Hier komt de extra informatie wanneer je op het plusje drukt met een leuke extra fotoooo. 
        Normaal gesproken zou de er onder de afbeelding eenzelfde ruimte zijn als de rode streepjes aangeven. 
        Maar deze pagina heeft een beperkte grootte</p>
    
    <img src="images/product_01.jpg" alt="Hier komt een afbeelding van een detail van ons product.">
    
</div>
	<script>
		// Zelf in te vullen:
		var hoogte_block = 300;	// wordt nog afgerond naar het meest naarbije getal wat goed uitkomt met line-height
		var read_more_text_open = "+";
		var read_more_text_closed = "-";
		
		// automated calculated terminated
		var real_height = $("#read-more-block").height();
		var fontSize = $("#read-more-block").css('font-size');
		var lineHeight = Math.floor(parseInt(fontSize.replace('px','')) * 1.5);
		var expandedInfo = false;
		
		hoogte_block = Math.floor(hoogte_block / lineHeight) * lineHeight;
		
		if($("#read-more-block").height() > hoogte_block){
			$("#read-more-block").css({
				'height': hoogte_block,
				'overflow': 'hidden'
			});
			
			// Pas span aan naar gewenste opmaak
			$("#read-more-block").after('<span id="expand" style="cursor: pointer; color: rgba(109,207,246,1)" onclick="readMore();">'+read_more_text_open+'</span>');
		}
		
		function readMore(){
			if(expandedInfo == false){
				$("#read-more-block").animate({
					'height': real_height+'px'
				}, 500, function(){
					// animation done
					$("#expand").html(read_more_text_closed);
					expandedInfo = true;
				});
			}else{
				$("#read-more-block").animate({
					'height': hoogte_block+'px'
				}, 500, function(){
					// animation done
					$("#expand").html(read_more_text_open);
					expandedInfo = false;
				});
			}
		}
	</script>