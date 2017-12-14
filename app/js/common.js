$(function() {
var clock;
clock = $('.clock').FlipClock({
		clockFace: 'DailyCounter', //Вид счетчика (с количеством дней)
		autoStart: false, //Отключаем автозапуск
		countdown: true,  //Устанавливаем обратный отсчет
		language:'ru-ru', //Локаль языка (русский)
		callbacks: {
		stop: function(){
		clock.setTime(1300000);
		clock.setCountdown(true);
		clock.start(); 
		}
	}
});
	
		clock.setTime(1300000); //Требуемое время в секундах
		clock.setCountdown(true); //Отсчет назад
		clock.start(); //Запускаем отсчет


	//menu

	$('.menu-icon').on('click', function() {
		$(this).toggleClass("active");
		
		$('.nav').slideToggle(500, function(){
			if($(this).css('display')==='none'){
				$(this).removeAttr('style');
				}
		});
		
	});



}); 

