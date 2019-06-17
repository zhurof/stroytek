<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	<meta name="description" content="bla bla bla">
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="css/style.css" />
	<noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
</head>
<body>
	<header class="header">
		<div class="header__topline">
			<div class="wrapper">
				<a href="/" class="logo header__logo"><img src="img/logo.png" alt=""></a>
				<div class="header__contacts">
					<div class="header__contact">
						<h3 class="header__subtitle">Центральный офис:</h3>
						<div>г. Екатеринбург, ул. Сурикова 53</div>
					</div>
					<div class="header__contact">
						<h3 class="header__subtitle">Отдел продаж: </h3>
						<div><a href="tel:+73433182188">+7 (343) 318-21-88</a></div>
					</div>
				</div>
				<span class="menu-btn"></span>
			</div>
		</div>
		<div class="header__bottomline">
			<div class="wrapper">
				<ul class="header__menu">
					<li class="has-children">
						<a href="about.php">Компания</a>						
						<ul>
							<li><a href="about.php">О компании</a></li>
							<li><a href="news.php">Новости</a></li>
							<li><a href="javascript:void(0)">Документы</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="javascript:void(0)">Виды деятельности</a>
						<ul>
							<li><a href="javascript:void(0)">Строительство</a></li>
							<li><a href="javascript:void(0)">Продажа недвижимости</a></li>
							<li><a href="javascript:void(0)">Проектирование</a></li>
							<li><a href="javascript:void(0)">Производство</a></li>
							<li><a href="javascript:void(0)">Аренда</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="objects.php">Объекты</a>
						<ul>
							<li><a href="objects.php">Каталог объектов</a></li>
							<li><a href="javascript:void(0)">Вэб-камеры</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)">Подрядчикам</a>
						<ul class="has-children">
							<li><a href="javascript:void(0)">Тендеры по закупкам</a></li>
							<li><a href="javascript:void(0)">Тендеры для подрядчиков</a></li>
						</ul>
					</li>
					<li><a href="vacancies.php">Вакансии</a></li>
					<li><a href="contacts.php">Контакты</a></li>
				</ul>
				<a href="javascript:void(0)" class="btn header__btn">Продажа недвижимости</a>
			</div>
		</div>
	</header>
	<script>
    //Добавление класса активному пункту меню на JS для демонстрации. В процессе посадки на cms - удалить.
    var menuLinks = document.querySelectorAll('.header__menu a');
    for (var i = 0; i<menuLinks.length; i++){
      if(menuLinks[i].href == location.href){
        menuLinks[i].parentElement.classList.add('active');
      }
    }
  </script>
<!-- Переход на страницу со ссылками на современные браузеры для ie9 и ниже -->
<!--[if lt IE 10]><script>location.href='/old-ie.html';</script><![endif]-->