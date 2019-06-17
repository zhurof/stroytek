function is_mobile(){
	return $(window).width()<992
}
//слайдер на главной
$('.top-block').slick({
	arrows: false,
	dots: true,
	dotsClass: 'slick-dots top-block__dots',
	customPaging: function(){return ''}
})
//фильтр для слайдера "Наши проекты"
$('.portfolio__filter li').click(function(){
	if(!$(this).is('.active')){
		var category = $(this).text(),
				slider = $(this).parents('.portfolio').find('.portfolio__slider');
		$(this).addClass('active').siblings('li').removeClass('active');
		slider.slick('slickUnfilter');
		if(category != 'Все'){
			slider.slick('slickFilter','[data-category="'+category+'"]');
		}
	}
	
})
//слайдер "Наши проекты"
$('.portfolio__slider').slick({
	slidesToShow: 2,
	prevArrow: '<span class="portfolio__arrow prev"></span>',
	nextArrow: '<span class="portfolio__arrow next"></span>',
	dots: true,
	dotsClass: 'portfolio__dots slick-dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 992,
			settings: {
				arrows: false
			}
		},{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				arrows: false
			}			
		}
	]
})
//простецкий фильтр в каталоге
$('.catalog__filter li').click(function(){
	if(!$(this).is('.active')){
		$(this).addClass('active').siblings('li').removeClass('active');
		var category = $(this).text(),
				cards = $(this).parents('.catalog').find('.card');
		if(category == 'Все'){
			cards.show()
		}else{
			cards.hide().filter('[data-category="'+category+'"]').show();
		}
	}
})
//обычный слайдер
$('.slider').slick({
	prevArrow: '<span class="slider__arrow prev"></span>',
	nextArrow: '<span class="slider__arrow next"></span>',
	dots: true,
	dotsClass: 'slider__dots slick-dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 768,
			settings: {
				arrows: false
			}
		}
	]
})
//Карта
if($('#map').length){
	ymaps.ready(initMap);
}
function initMap(){	
	var address = $('#map').data('address') || 'Караганда';
			
	ymaps.geocode(address, {
			results: 1
	}).then(function (res) {
			// Выбираем первый результат геокодирования.
			var firstGeoObject = res.geoObjects.get(0),
					// Координаты геообъекта.
					coords = firstGeoObject.geometry.getCoordinates(),
					// Область видимости геообъекта.
					bounds = firstGeoObject.properties.get('boundedBy');
					
					firstGeoObject.options.set('preset', 'islands#darkBlueDotIconWithCaption');
					// Получаем строку с адресом и выводим в иконке геообъекта.
					firstGeoObject.properties.set('iconCaption', firstGeoObject.getAddressLine());
					
			var myMap = new ymaps.Map('map', {
				center: coords,
				zoom: 14,
				controls: []
			});
							
			myPlacemark = new ymaps.Placemark(coords, 
				{
					hintContent: '',
					balloonContent: ''
				});
				myMap.geoObjects.add(myPlacemark);
	});		
	//myMap.behaviors.disable('scrollZoom')
}
//Мобильное меню
$('.menu-btn').click(function(){
	$(this).toggleClass('active');
	$('.header__bottomline').toggleClass('open');
})
function openSubMenu(link,menu){
	$('.header__menu.clone').remove();
	menu.clone().addClass('clone header__menu').insertBefore('.header__menu').prepend('<li class="back"><a href="#">Назад</a></li>');
	//дублирование родительской ссылки в открывающемся подменю. При необходимости раскоментировать
	//link.clone().insertAfter('.header__menu.clone .back').wrap('<li />');
}
function closeSubMenu(){
	$('.header__menu.clone').remove();
}
$('.header__bottomline').on('click','.header__menu .has-children>a',function(e){
	if(is_mobile()){
		e.preventDefault(); //отключаем переход по ссылкам родительских пунктов в мобильной версии
		var menu = $(this).siblings('ul'),
				link = $(this);
		openSubMenu(link,menu);
	}
})
$('.header__bottomline').on('click','.back',function(e){
	e.preventDefault();
	closeSubMenu();
})