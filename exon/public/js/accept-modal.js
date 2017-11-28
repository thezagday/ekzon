// Отключаем собитие при нажатии на кнопку отправки
document.getElementById("reg-partner-submit").addEventListener("click", function(event){
    event.preventDefault()
});

// Выводим модальное окно об успеной отправке
function acceptModal(){
	$('#regPartner').modal('show');
	setTimeout(function() {$('#regPartner').modal('hide') }, 3000);
};
