<div id="contact_left">
	<div id="read-more-block">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt pretium 
		augue. Cras sit amet facilisis lectus. Praesent suscipit purus et odio ultrices fringilla. 
		Proin id tellus vitae ex facilisis rhoncus. Sed ullamcorper, mi id molestie dictum, felis 
		est bibendum magna, ac convallis tellus augue ac risus. Aliquam tortor dolor, egestas sit 
		amet pretium vitae, tempus sed diam. Mauris sollicitudin ornare orci vitae facilisis. 
		Aliquam u llamcorper orci ut mauris dignissim, quis elementum risus molestie. Fusce nibh 
		erat, ultricies et dignissim eu, placerat eget velit. Proin a nisi leo. Duis congue suscipit 
		ante vitae finibus. Integer porta sed lacus sit amet fringilla. Curabitur tellus metus, 
		dapibus sed pellentesque eget, convallis sed urna. Morbi hendrerit elementum eros eget 
		tincidunt. Donec sed magna justo. Donec ac augue dolor. Vivamus aliquet vehicula interdum. 
		Nulla bibendum sapien vitae augue dapibus tempor. Integer vitae est non magna fringilla 
		tempus in ac diam. Nullam in turpis ligula. Nullam ac elit aliquam, lobortis lacus quis, 
		eleifend ipsum. Aenean rhoncus sem ac porttitor ullamcorper. Nunc tincidunt urna quis 
		molestie condimentum. Proin in ultricies turpis, ut congue diam.
	</div>
</div>
<div id="contact_right">
	aklsdk
</div>

<script>
	// Zelf in te vullen:
	var hoogte_block = 100;	// wordt nog afgerond naar het meest naarbije getal wat goed uitkomt met line-height
	var read_more_text_open = "+";
	var read_more_text_closed = "-";
	
	// automated calculated terminated
	var real_height = $("#read-more-block").height();
	var fontSize = $("#read-more-block").css('font-size');
	var lineHeight = Math.floor(parseInt(fontSize.replace('px','')) * 1.5);
	var expanded = false;
	
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
		if(expanded == false){
			$("#read-more-block").animate({
				'height': real_height+'px'
			}, 500, function(){
				// animation done
				$("#expand").html(read_more_text_closed);
				expanded = true;
			});
		}else{
			$("#read-more-block").animate({
				'height': hoogte_block+'px'
			}, 500, function(){
				// animation done
				$("#expand").html(read_more_text_open);
				expanded = false;
			});
		}
	}


	function initialize() {
		var mapCanvas = document.getElementById('contact_right');
		var mapOptions = {
			center: new google.maps.LatLng(44.5403, -78.5463),
			zoom: 8,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(mapCanvas, mapOptions);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>