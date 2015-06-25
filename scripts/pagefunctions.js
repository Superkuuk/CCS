function contactLoad(){

	if($(window).width() < 1035){
		var width = ($(window).width() * 0.96 / 3);
		var height = width * 280 / 158;
		// h : w
		//280:158
		
		// [w]2%[w]2%[w]2%[w]2[w]2[w]
		$(".profile").each(function(i){
			$(this).find("video").attr('width', width);
			$(this).find("video").attr('height', height);
			if(i > 2){
				$(this).css('height',  ($(this).find("video").height() + $(this).find("div").height()) + 'px');
			}
		});
	}else{
		var width = ($(window).width() * 0.76 / 6);
		var height = width * 280 / 158;
		// h : w
		//280:158
		$(".profile").each(function(i){
			$(this).find("video").attr('width', width);
			$(this).find("video").attr('height', height);
		});	
	}
}

function configurationLoad(){
	if($(window).width() < 1035){
		var width = ($(window).width() * 0.81 / 4);

		// 8%[w]1%[w]1%[w]1%[w]8%
		$(".conf").each(function(i){
			$(this).css('width', width);
		});
	}else{
		var width = ($(window).width() * 0.77 / 8);

		// 8%[w]1%[w]1%[w]1%[w]1%[w]1%[w]1%[w]1%[w]8%
		$(".conf").each(function(i){
			$(this).css('width', width);
		});	
	}
}