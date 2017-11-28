// Скрипт разворачивающегося списка //
$('.catalog__menu-item-title').click(function(){
	$('.catalog__menu').find('.active-item').removeClass('active-item');
	$(this).parent().addClass('active-item');
});

// Скрытие/разворачивание меню
// Сворачиваем все подразделы с классом hide
$('.catalog__submenu.hide').slideUp();
// $('.catalog__menu').find('.catalog__menu-item:first').addClass('active');

$('.catalog__menu-item-title').click(function(){
	// Если у родителя класса, по которому кликнули, есть класс active,
	if(!$(this).parent().hasClass('active')){
		// то у всех остальных классов убираем класс active
		$('.catalog__menu-item-title').parent().removeClass('active');
		// и добавляем класс active Нашему родителю
		$(this).parent().addClass('active');
		// Cворачиваем все подразделы
		$('.catalog__menu-item-title').parent().find('.catalog__submenu').slideUp(300);
		// Разворачиваем подраздел текущего родителя
		$(this).parent().find('.catalog__submenu').slideDown(300);
	} else {
		$(this).parent().removeClass('active');
		$(this).parent().find('.catalog__submenu').slideUp(300);
	}
});

// Подсветка активного пункта меню (для бэкенда не надо)
$('.catalog__submenu-item').click(function(){
	$('.catalog__submenu').find('.active').removeClass('active');
	$(this).addClass('active');
});
// /Скрипт разворачивающегося списка //

// ------- //
// HELPERS //
// ------- //

NodeList.prototype.forEach = function (callback) {
  Array.prototype.forEach.call(this, callback);
}

// -------------------- //
// Function definitions //
// -------------------- //

function deactivateSelect(select) {
  if (!select.classList.contains('activeElement')) return;

  var optList = select.querySelector('.optList');

  // optList.classList.add('hidden');
  select.classList.remove('activeElement');
}

function activeElementSelect(select, selectList) {
  if (select.classList.contains('activeElement')) return;

  selectList.forEach(deactivateSelect);
  select.classList.add('activeElement');
};

function toggleOptList(select, show) {
  var optList = select.querySelector('.optList');

  // optList.classList.toggle('hidden');
}

function highlightOption(select, option) {
  var optionList = select.querySelectorAll('.option');

  optionList.forEach(function (other) {
    other.classList.remove('highlight');
  });

  option.classList.add('highlight');
};

function updateValue(select, index) {
  var nativeWidget = select.previousElementSibling;
  var value = select.querySelector('.value');
  var optionList = select.querySelectorAll('.option');

  optionList.forEach(function (other) {
    other.setAttribute('aria-selected', 'false');
  });

  optionList[index].setAttribute('aria-selected', 'true');

  nativeWidget.selectedIndex = index;
  value.innerHTML = optionList[index].innerHTML;
  highlightOption(select, optionList[index]);
};

function getIndex(select) {
  var nativeWidget = select.previousElementSibling;

  return nativeWidget.selectedIndex;
};

// ------------- //
// Event binding //
// ------------- //

window.addEventListener("load", function () {
  var form = document.querySelector('form');

  form.classList.remove("no-widget");
  form.classList.add("widget");
});

window.addEventListener('load', function () {
  var selectList = document.querySelectorAll('.select');

  selectList.forEach(function (select) {
    var optionList = select.querySelectorAll('.option'),
        selectedIndex = getIndex(select);

    select.tabIndex = 0;
    select.previousElementSibling.tabIndex = -1;

    updateValue(select, selectedIndex);

    optionList.forEach(function (option, index) {
      option.addEventListener('mouseover', function () {
        highlightOption(select, option);
      });

      option.addEventListener('click', function (event) {
        updateValue(select, index);
      });
    });

    select.addEventListener('click', function (event) {
      toggleOptList(select);
    });

    select.addEventListener('focus', function (event) {
      activeElementSelect(select, selectList);
    });

    select.addEventListener('blur', function (event) {
      deactivateSelect(select);
    });

    select.addEventListener('keyup', function (event) {
      var length = optionList.length,
          index  = getIndex(select);

      if (event.keyCode === 40 && index < length - 1) { index++; }
      if (event.keyCode === 38 && index > 0) { index--; }

      updateValue(select, index);
    });
  });
});
