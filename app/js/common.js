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


	$('<div class="quantity-nav"><div class="quantity-button quantity-up"></div><div class="quantity-button quantity-down"></div></div>').insertAfter('.quantity input');
	
	$('.quantity').each(function() {
		var spinner = jQuery(this),
		input = spinner.find('input[type="number"]'),
		btnUp = spinner.find('.quantity-up'),
		btnDown = spinner.find('.quantity-down'),
		min = input.attr('min'),
		max = input.attr('max');

		btnUp.click(function() {
		var oldValue = parseFloat(input.val());
		if (oldValue >= max) {
		var newVal = oldValue;
		} else {
		var newVal = oldValue + 1;
		}
		spinner.find("input").val(newVal);
		spinner.find("input").trigger("change");
		});

		btnDown.click(function() {
		var oldValue = parseFloat(input.val());
		if (oldValue <= min) {
		var newVal = oldValue;
		} else {
		var newVal = oldValue - 1;
		}
		spinner.find("input").val(newVal);
		spinner.find("input").trigger("change");
		});
	});





}); 

