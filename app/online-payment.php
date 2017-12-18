<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Купить орехи и сухофрукты</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>

</head>

<body class="payment page__online-payment">


	<!-- HEADER START-->
	<?php include("sections/header.php");?>
	<!-- HEADER END-->


<main class="payment-content">
	
	<!-- PAYMENT PAGE DESCRIPTION SECTION START-->
	<section class="transaction wow fadeIn" data-wow-duration="1s">
		<div class="container">
			<div class="row">

				<div class="col-lg-6 col-md-8">
					<form class="form transaction__form" data-bem="{&quot;form&quot;:{}}" method="POST" target="_blank" action="https://money.yandex.ru/quickpay/confirm.xml" _lpchecked="1">
				<input class="native-input native-input_type_hidden" name="receiver" value="410015181266604" type="hidden">
				<input class="native-input native-input_type_hidden" name="successURL" value="http://nuts.wstudio24.ru/" type="hidden">
				<input class="native-input native-input_type_hidden" name="label" value="" type="hidden">
				<input class="native-input native-input_type_hidden" name="quickpay-form" value="donate" type="hidden">
				<input class="native-input native-input_type_hidden" name="is-inner-form" value="true" type="hidden">
				<input class="native-input native-input_type_hidden" name="referer" value="http://nuts.wstudio24.ru/online-payment.php" type="hidden">
				<input class="native-input native-input_type_hidden" name="need-fio" value="false" type="hidden">
				<input class="native-input native-input_type_hidden" name="need-email" value="false" type="hidden">
				<input class="native-input native-input_type_hidden" name="need-phone" value="false" type="hidden">
				<input class="native-input native-input_type_hidden" name="need-address" value="false" type="hidden">

						<div class="row">
							<div class="col-sm-4 align-self-center"><label for="orderNumber">Назначение перевода</label></div>
							<div class="col-sm-8"><input type="text" id="orderNumber" name="targets" placeholder="Укажите номер заказа" required></div>
						</div>
						<div class="row">
							<div class="col-sm-4 align-self-center"><label for="money">Сумма</label></div>
							<div class="col-sm-8"><input type="number" id="money" name="sum" value="" placeholder="0000,0  рублей" data-type="number" required></div>
						</div>
						<div class="row">
							<div class="col-sm-4 align-self-center"><label>Способ оплаты</label></div>
							<div class="col-sm-8">
								<div class="online-service">
									<label class="radio-button__radio" for="paymentYandex">
									<input class="radio-button__control" value="PC" id="paymentYandex" type="radio" name="paymentType">
									<i class="yandex"></i>
								</label>
								<label class="radio-button__radio" for="paymentVisa">
									<input class="radio-button__control" value="AC" id="paymentVisa" type="radio" name="paymentType">
									<i class="visa"></i>
								</label>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-sm-8 offset-sm-4 col-12">
								<div class="form__submit">
									<input type="submit" value="Отправить" class="btn form_order-btn" id="btn1">
								</div>
							</div>
						</div> <!-- /.row -->


					</form>
				</div>

				<div class="col-lg-6 col-md-4">
					<div class="transaction__item">
						<img src="img/shop-item.png" alt="Изображение товара" class="img-responsive">
					</div>
				</div>

			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section>
	<!-- PAYMENT PAGE DESCRIPTION SECTION END-->


	<!-- PAYMENT PAGE QUASTIONS SECTION START-->
	<section class="payment__quastions wow fadeIn" data-wow-duration="1s">
		<div class="container">

			<div class="quastions__heading">
				<div class="row">
					<div class="col-lg-6 col-12">
						<h2>остались вопросы?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-12">
							<p class="call_us">позвоните нам</p>
							<p class="tel"><a href="+88123099591">8 (812) 309-95-91</a></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<form action="" class="form quastions__form">

						<div class="row">
							<div class="col-xl-5 offset-xl-1 col-lg-6 col-12"><h3>задайте свой вопрос</h3></div>
							<div class="col-xl-4 offset-xl-1 col-lg-6 col-12"><h3>заполнив форму</h3></div>
						</div>

						<div class="row no-gutters">
							<div class="col-lg-4">
								<input type="text" name="Phone" placeholder="Ваше имя" required>
							</div>
							<div class="col-lg-4">
								<input type="tel" name="Phone" placeholder="Ваш телефон" pattern="[^A-Za-zА-Яа-яЁё]{5,20}" required>
							</div>
							<div class="col-lg-4">
								<input type="email" name="Phone" placeholder="Ваш E-mail">
							</div>
						</div> <!-- /.row -->

						<div class="row">
							<div class="col-12"><textarea name="Сообщение" placeholder="Ваше сообщение"></textarea></div>
						</div> <!-- /.row -->

						<div class="row justify-content-center">
							<div class="col-lg-6">
								<div class="form__submit">
									<input type="submit" value="Отправить" class="btn form_order-btn" id="btn1">
								</div>
							</div>
						</div> <!-- /.row -->

					</form> <!-- /.form -->
				</div> <!-- /.col -->
			</div> <!-- /.row -->

		</div>
	</section>
	<!-- PAYMENT PAGE QUASTIONS SECTION START-->

	
</main>




	<!-- FOOTER START-->
	<?php include("sections/footer.php");?>
	<!-- FOOTER END-->
	

	
	<link rel="stylesheet" href="css/main.css">
	<script src="js/scripts.js"></script>

	<script>

		wow = new WOW(
			{
			offset:       50,          // default
			mobile:       false,       // default
		}
		)

		wow.init();

	</script>


</body>
</html>
