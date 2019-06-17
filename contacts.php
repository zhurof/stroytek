<?php	include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li>Контакты</li>
				</ul>
			</div>
		</div>
		<div class="contacts">
			<div class="wrapper">
				<h1 class="contacts__title triangle-title"><span>Контакты</span></h1>
				<div class="contacts__inner">					
					<div class="contacts__info">
						<h3 class="contacts__subtitle">Центр продаж ГК Стройтэк</h3>
						<p>г. Екатеринбург, ул. Сурикова 53</p>
						<p><a href="tel:+73433182188">+7 (343) 318-21-88</a></p>
						<p>
							Пн-Чт 10.00-19.00 <small>(перерыв 14.00-15.00)</small><br>
							Пт 10.00-18.00 <small>(перерыв 14.00-15.00)</small><br>
							Сб 11.00-13.00<br>
							Вс — выходной
						</p>
					</div>
					<div class="contacts__map" id="map" data-address="г. Екатеринбург, ул. Сурикова 53"></div>					
				</div>
				<div class="box contacts__box">
					<div class="contacts__column">
						<div class="contact">
							<h3 class="contact__title">Дополнительные офисы</h3>
							<p>г. Екатеринбург, ул. Раевского, д. 20, кв. 244 (ЖК "Современник")</p>
							<p>г. Екатеринбург, ул. Чкалова, д. 231, кв. 744</p>
						</div>
						<div class="contact">
							<h3 class="contact__title">Приемная</h3>
							<p><a href="tel:>+73432877778">+7 (343) 287-77-78</a><br/> <a href="tel:+7343290353634">+7 (343) 290-35-36 (34)</a></p>
							<p>Факс: (343) 287-09-12</p>
							<p><a href="mailto:stroytek@stroytek-ek.ru">stroytek@stroytek-ek.ru</a></p>
						</div>
						<div class="contact">
							<h3 class="contact__title">Юридический отдел</h3>
							<p><a href="tel:+73432870961">+7 (343) 287-09-61</a></p>
						</div>
					</div>
					<div class="contacts__column">
						<div class="contact">
							<h3 class="contact__title">Отдел материально-технического снабжения</h3>							
							<p><a href="tel:+73432870970">+7 (343) 287-09-70</a> <br><a href="tel:+73432905045">+7 (343) 290-50-45</a> <br>Факс: (343) 287-78-87</p>
						</div>
						<div class="contact">
							<h3 class="contact__title">Производственно-технический отдел</h3>
							<p><a href="tel:+73432870913">+7 (343) 287-09-13</a></p>
						</div>
						<div class="contact">
							<h3 class="contact__title">Отдел управления персоналом</h3>							
							<p><a href="tel:+73432905595">+7 (343) 290-55-95</a></p>
						</div>
					</div>
					<div class="contacts__column">
						<div class="contact">
							<h3 class="contact__title">Бухгалтерия</h3>							 
							<p><a href="tel:+73432870965">+7 (343) 287-09-65</a></p>
						</div>
						<div class="contact">
							<h3 class="contact__title">Отдел капитального строительства</h3>							
							<p>
								<a href="tel:+73432870962">+7 (343) 287-09-62</a> <br><a href="tel:+73432870963">+7 (343) 287-09-63</a>
							</p>
						</div>
						<div class="contact">
							<h3 class="contact__title">ООО «Стройтэкпроект»</h3>							
							<p>
								<a href="tel:+73432878710">+7 (343) 287-87-10</a> <br><a href="tel:+73432878720">+7 (343) 287-87-20</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- API карты в целях оптимизации подключаю только там, где есть карта-->
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" defer></script>
<?php	include "footer.php";?>	