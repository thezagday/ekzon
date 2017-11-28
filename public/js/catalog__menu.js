// atserver

$('.catalog__menu-item-title').click(function(){
	$('.catalog__menu').find('.active-item').removeClass('active-item');
	$(this).parent().addClass('active-item');
});

// Скрытие/разворачивание меню
$('.catalog__submenu.hide').slideUp();

$('.catalog__menu-item-title').click(function(){
	if(!$(this).parent().hasClass('active')){
		$('.catalog__menu-item-title').parent().removeClass('active');
		$(this).parent().addClass('active');
		$('.catalog__menu-item-title').parent().find('.catalog__submenu').slideUp(300);
		$(this).parent().find('.catalog__submenu').slideDown(300);
	}
});

// Подсветка активного пункта меню (для бэкенда не надо)
// $('.catalog__submenu-item').click(function(){
// 	$('.catalog__submenu').find('.active').removeClass('active');
// 	$(this).addClass('active');
// });
