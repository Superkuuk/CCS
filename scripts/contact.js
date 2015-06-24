function contactLoad(){

	if($(window).width() < 1035){
		var width = ($(window).width() * 0.72 / 3);
		var height = width * 280 / 158;
		// h : w
		//280:158
		$(".profile").each(function(i){
			$(this).find("video").attr('width', width);
			$(this).find("video").attr('height', height);
			if(i > 2){
				$(this).css('height',  ($(this).find("video").height() + $(this).find("div").height()) + 'px');
			}
		});
	}else{
		var width = ($(window).width() * 0.72 / 6);
		var height = width * 280 / 158;
		// h : w
		//280:158
		$(".profile").each(function(i){
			$(this).find("video").attr('width', width);
			$(this).find("video").attr('height', height);
		});	
	}


}
