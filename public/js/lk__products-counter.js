// Блок +- количества
// Минус //
$('.product-count .minus').click(function(){
	count = $(this).parent().find('.value').val();

	// Счетчик
	if (count > 0){
		$(this).parent().find('.value').val(--count);
		$(this).parent().parent().parent().addClass('added_to_order');
	};

	// Добавление продуктов в заказ
	if (count == 0){
		$(this).parent().parent().parent().removeClass('added_to_order');
	}
	basket_calc();
});

// Плюс //
$('.product-count .plus').click(function(){
	count = $(this).parent().find('.value').val();

	// Счетчик
	if (count < 99){
		$(this).parent().find('.value').val(++count);
		$(this).parent().parent().parent().addClass('added_to_order');
	};

	// Добавление продуктов в заказ
	if (count == 0){
		$(this).parent().parent().parent().removeClass('added_to_order');
	}
	basket_calc();
});

// Общее количество выбранных товаров
function basket_calc(){
	var count_of_products = 0;
	$('.product-count .value').each(function(){
		item_product_count = Number($(this).val());
		count_of_products += item_product_count;
	});
	$('.lk__table-footer-choose-number').val(count_of_products);
};

// Формирование заказа
$('.lk__table-footer-btn').click(function(){
	$('.lk__table').find('.added_to_order').clone().appendTo('.lk__table-order');
	$('.lk__modal-order').find('.minus').remove();
	$('.lk__modal-order').find('.plus').remove();
	// При нажатии кнопки Esc выполняется то же действие, что и при "Изменить"
	$(document).keydown(function(e) {
		if (e.keyCode == 27) {
			$('.lk__modal-order').find('.added_to_order').remove();
		}
	});
})

// Нажатие на кнопку "Изменить"
$('.lk__table-footer-btn-change').click(function() {
	$('.lk__modal-order').find('.added_to_order').remove();
})

// Нажатие на фон, чтобы закрыть модальное окно. Результат = нажатие "Изменить"
$('.modal-backdrop').click(function() {
	$(this).parent().find('.added_to_order').remove();
})

// Нажатие на кнопку закрытия окна Приветствия
$('.lk__welcome-cross').click(function() {
	$('.lk__welcome').css('display', 'none');
})
