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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	
	<!-- VK Community widget -->
	<script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script>

</head>

<body class="payment page__payment">


	<!-- HEADER START-->
	<?php include("sections/header.php");?>
	<!-- HEADER END-->


<main class="payment-content">
	
	<!-- PAYMENT PAGE DESCRIPTION SECTION START-->
	<section class="payment__description">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-12">
					<div class="description__item">
						<h3>Оплата наличными при получении</h3>
						<p>Все заказы, кроме заказов отправленных почтой России оплачиваются наличными при получении.</p>
						<p>Мы принимаем к оплате только наличные рубли. Цены в каталоге также указаны в рублях.</p>
					</div>
					<div class="description__item">
						<h3>Оплата наложенным платежом</h3>
						<p>При оформлении заказа с доставкой Почтой России оплата производится  наложенным платежом, т.е. непосредственно в отделении почты России при получении заказа. К оплате наложенным платежом принимаются только наличные рубли.</p>
					</div>
					<div class="description__item">
						<h3>Предоплата при оформлении  доставки почтой России</h3>
						<p>При оформлении заказа в регионы РФ, доставка осуществляется почтой России.</p>
						<p>Заказы отправляются по 50% предоплате.</p>
						<p>Предоплата вносится на странице: <a href="index.php">Онлайн оплата.</a></p>
						<p>Предоплату можно внести посредством Яндекс денег или при помощи оплаты банковской картой.  В обоих случаях, с платежа взымается комиссия 3%.</p>
					</div>
				</div> <!-- /.col -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section>
	<!-- PAYMENT PAGE DESCRIPTION SECTION END-->



	<!-- PAYMENT PAGE QUASTIONS SECTION START-->
	<section class="payment__quastions">
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
					<form action="" class="form payment__form">

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

<!-- 	<script>

		wow = new WOW(
			{
			offset:       50,          // default
			mobile:       false,       // default
		}
		)

		wow.init();

	</script> -->


</body>
</html>
