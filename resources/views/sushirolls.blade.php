<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Магазин роллов</title>
	<link rel="stylesheet" href="/libs/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">

</head>

<body>

	<header class="header">
		<div class="container mb-5">
			<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="/index.html">
						<img src="/img/logo/logo.png" alt="Logo" width="30" class="d-inline-block align-text-top">
						SushiRolls
					</a>
				  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="d-flex justify-content-end">
				  <div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ">
					  

					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="/index.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						  Меню
						</a>
						<ul class="dropdown-menu">
						  <li><a class="dropdown-item" href="/sushirolls.html">Суши и роллы</a></li>
						  <li><a class="dropdown-item" href="/sets.html">Сеты</a></li>
						  <li><a class="dropdown-item" href="/pizzas.html">Пицца</a></li>
						  <li><a class="dropdown-item" href="/hotdishes.html">Горячие блюда</a></li>
						  <li><a class="dropdown-item" href="/drinks.html">Напитки</a></li>
						</ul>
					  </li>

					  <li class="nav-item">
						<a class="nav-link" href="/about.html">О нас</a>
					  </li>

					  <li class="nav-item">
						<a class="nav-link" href="/contacts.html">Контакты</a>
					  </li>

					  <li class="nav-item">
						<a class="nav-link" href="/delivery.html">Доставка</a>
					  </li>

					  <li class="nav-item">
						<a class="nav-link" href="/cart.html">Корзина</a>
					  </li>

					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="/authorization.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						  Вход
						</a>
						<ul class="dropdown-menu">
						  <li><a class="dropdown-item" href="/registration.html">Регистрация</a></li>
						</ul>
					  </li>

					</ul>
				  </div>
				</div>
				</div>
			  </nav>
		</div>
		<div class="container">
			
			<p class="lead">Меню > Суши и роллы</p>
			<h3>{{$sushirolls}}</h3>
		</div>
	</header>
<main>
	<div class="container mb-5">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<!-- Ролл -->
					<div class="col-lg-4">
						<div class="card lg-4" data-id="01">
							<img class="product-img" src="/img/menu/roll/1.png" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Ролл Спайси краб</h4>
								<p class="pb-4"><small data-items-in-box class="text-muted">Рис, нори, соус «Спайс», огурец, такуан</small></p>

								
								<div class="details-wrapper">

									<!-- Cчетчик -->
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>
									<!-- // Cчетчик -->

									<div class="price">
										<div class="price__weight">8 шт</div>
										<div class="price__currency">300 ₽</div>
									</div>
								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">+ B корзину</button>

							</div>
						</div>
					</div>
					<!-- // Ролл -->

					<!-- Ролл -->
					<div class="col-lg-4">
						<div class="card mb-4" data-id="02">
							<img class="product-img" src="/img/menu/roll/2.png" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Ролл Инь и Ян</h4>
								<p class="pb-4"><small data-items-in-box class="text-muted">Рис, огурец, копчёный угорь, лосось, тунец</small></p>

								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>

									<div class="price">
										<div class="price__weight">8 шт</div>
										<div class="price__currency">450 ₽</div>
									</div>
								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">+ В корзину</button>

							</div>
						</div>
					</div>
					<!-- // Ролл -->

					<!-- Ролл -->
					<div class="col-lg-4">
						<div class="card mb-4" data-id="03">
							<img class="product-img" src="/img/menu/roll/3.png" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Ролл Филадельфия</h4>
								<p class="pb-4"><small data-items-in-box class="text-muted">Рис, лосось, сливочный сыр, нори </small></p>

								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>

									<div class="price">
										<div class="price__weight">8 шт</div>
										<div class="price__currency">230 ₽</div>
									</div>

								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">+ В корзину</button>

							</div>
						</div>
					</div>
					<!-- // Ролл -->

					<!-- Ролл -->
					<div class="col-lg-4">
						<div class="card lg-4" data-id="04">
							<img class="product-img" src="/img/menu/roll/4.png" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Ролл c авокадо</h4>
								<p class="pb-4"><small data-items-in-box class="text-muted">Рис, лосось, сливочный сыр, авокадо, нори </small></p>

								
								<div class="details-wrapper">

									<!-- Cчетчик -->
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>
									<!-- // Cчетчик -->

									<div class="price">
										<div class="price__weight">8 шт</div>
										<div class="price__currency">300 ₽</div>
									</div>
								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">+ B корзину</button>

							</div>
						</div>
					</div>
					<!-- // Ролл -->

					<!-- Ролл -->
					<div class="col-lg-4">
						<div class="card mb-4" data-id="05">
							<img class="product-img" src="/img/menu/roll/5.png" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Ролл с морским гребешком</h4>
								<p class="pb-4"><small data-items-in-box class="text-muted">рис, нори, сливочный сыр, огурец, такуан</small></p>

								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>

									<div class="price">
										<div class="price__weight"></div>
										<div class="price__currency">250 ₽</div>
									</div>
								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">+ В корзину</button>

							</div>
						</div>
					</div>
					<!-- // Ролл -->

					<!-- Ролл -->
					<div class="col-lg-4">
						<div class="card mb-4" data-id="06">
							<img class="product-img" src="/img/menu/roll/6.png" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Ролл Тар-тар</h4>
								<p class="pb-4"><small data-items-in-box class="text-muted">рис, нори, кунжут, сливочный сыр</small></p>

								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>

									<div class="price">
										<div class="price__weight"></div>
										<div class="price__currency">330 ₽</div>
									</div>

								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">+ В корзину</button>

							</div>
						</div>
					</div>
					<!-- // Ролл -->

					
			</div>
		</div>
	</div>
</main>
<!-- ======= Footer ======= -->
<footer class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Адрес</h4>
            <p>
              г. Чебоксары <br>
              ул. Декабристов, 17<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Связаться с нами</h4>
            <p>
              <strong>Телефон:</strong> +7 558 554 88 55<br>
              <strong>Email:</strong> sushirolls@mail.ru<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Часы работы</h4>
            <p>
              <strong>Пн-Сб: </strong>11:00 - 00:00<br>
              Вс: 11:00 - 23:00
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Мы в соцсетях</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-telegram"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    

  </footer><!-- End Footer -->
  <!-- End Footer -->

	<!-- Подключаем скрипты -->
	<script type="text/javascript" src="libs/jquery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="libs/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
	<script type="text/javascript" src="libs/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	


	<script src="/js/counter.js"></script>
	<script src="/js/cart.js"></script>
	
</body>

</html>
