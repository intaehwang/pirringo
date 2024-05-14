
/*──────────────────────────────────────────────────────────────────────
														document ready - start
───────────────────────────────────────────────────────────────────────*/
$(document).ready(function(){
	
	/*───────────────────────────────────────────────────────────
														mySwiper
	───────────────────────────────────────────────────────────*/
	$('.mySwiper').each(function(index) {
		var mySwiper = $(this),
			swiperContainer = $(this).find('.swiper-container'),
			itemDirection = typeof $(this).attr('data-direction') !== typeof undefined && $(this).attr('data-direction') !== '' ? $(this).attr('data-direction') : 'horizontal',
			itemPer = $(this).attr('data-per') ? $(this).attr('data-per') : 1,
			itemGap = $(this).attr('data-gap') ? $(this).attr('data-gap') : 0,
			slideLoop = $(this).attr('data-loop') == 'false' ? false : true,
			slideCenter = $(this).attr('data-center') == 'true' ? true : false,
			slidePlayTime = $(this).attr('data-timer') ? $(this).attr('data-timer') * 1000 : 0;
		var active = $(this).find('.swiper-slide').index($('.swiper-slide.active')),
			active = active == -1 ? 0 : active;
		$(this).addClass('num'+index);		
		var swiper =  new Swiper( '.mySwiper.num' + index + ' .swiper-container', {
			direction: itemDirection,
			spaceBetween: parseInt(itemGap),
			slidesPerView: itemPer == 'auto' ? "auto" : itemPer,
			pagination: {
				el: '.mySwiper.num' + index + ' .pagination',
				clickable: true,
				type:  $('.mySwiper.num' + index + ' .pagination').hasClass('fraction') ? "fraction" : "bullets",
			},
			navigation: {
				nextEl: '.mySwiper.num' + index + ' .next',
				prevEl: '.mySwiper.num' + index + ' .prev'
			},
			speed : 1000,
			centeredSlides: slideCenter,
			autoplay: slidePlayTime ? {delay: parseInt(slidePlayTime),disableOnInteraction:true} : false,
			initialSlide: active, //active된 슬라이드로 이동
			loop: slideLoop			
		});		
		if($(this).attr('data-slideto') == '1') {
			$(slideWrapper.find('.swiper-slide')).click(function() {
				var i = $(this).index();
				swiper.slideTo(i,700,false);
			});
		}
	});


});
//document ready - end