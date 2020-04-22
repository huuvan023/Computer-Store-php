var slickCount = 0;
$(function(){
	$('.slider-content').slick({
		 prevArrow: '.arrow_prev',
		 nextArrow: '.arrow_next',
		 draggable: false,
	});
	$('.arrow_next').click(function(){
		$('#slick .arrow_prev span').css("display","block");
		slickCount++;
		if(slickCount == 2){
			$('#slick .arrow_next span').css("display","none");
		}
	});

	$('.arrow_prev').click(function(){
		$('#slick .arrow_next span').css("display","block");
		slickCount--;
		if(slickCount == 0){
			$('#slick .arrow_prev span').css("display","none");
		}
	});
});