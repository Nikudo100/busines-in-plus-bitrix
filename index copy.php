<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?><div class="pos-rel">
	<div class="bg-bree">
	</div>
</div>
<? $APPLICATION->IncludeComponent(
	"custom:main_page.sys",
	"",
	array(
		"BUTTON_TEXT" => "Кнопка",
		"FILE" => S_T_P . "/assets/img/Frame (21) 1.svg",
		"PROMO_DESC" => "Текст призывающий нажать на эту кнопку Текст призывающий нажать на эту кнопку Текст призывающий нажать на эту кнопку",
		"PROMO_TITLE" => "Система автоматизации бизнеса для мебельных компаний"
	)
); ?>

<? $APPLICATION->IncludeComponent(
	"custom:main_page.advantages",
	".default",
	array(
		"BUTTON_TEXT" => "Пройти тест",
		"COMPONENT_TEMPLATE" => ".default",
		"FILE" => S_T_P . "/assets/img/courses-01-270x289.jpg.jpg",
		"PROMO_DESC" => "CRM + ERP Система Бизнес в Плюсе - единая система вместо 1С, CRM, тысяч отдельных документов",
		"PROMO_TITLE" => "Преимущества Системы <span>Бизнес в Плюсе</span>",
		"STIKERS" => array(0 => "Обеспечиваем прозрачность всех бизнес-процессов", 1 => "Адаптируем систему под вашу реальность", 2 => "Помогаем внедрить систему за короткий срок",)
	)
); ?>

<? $APPLICATION->IncludeComponent(
	"custom:main_page.opportunities",
	".default",
	array(
		"BUTTON_TEXT" => "Подробнее",
		"COMPONENT_TEMPLATE" => ".default",
		"FILE" => S_T_P . "/assets/img/Frame.jpg",
		"OPPORT" => array(0 => "Движение заказов", 1 => "Дизайн, прием заказов", 2 => "Закупки", 3 => "Производство",),
		"OPPORT_TEXT" => array(0 => "раткое описание, чем можно пользоваться, преимущество. С какими модулями предусмотрена связь.", 1 => "раткое описание, чем можно пользоваться, преимущество. С какими модулями предусмотрена связь.", 2 => "раткое описание, чем можно пользоваться, преимущество. С какими модулями предусмотрена связь.", 3 => "раткое описание, чем можно пользоваться, преимущество. С какими модулями предусмотрена связь.",),
		"PROMO_TITLE" => "Возможности системы <span>Бизнес в Плюсе</span>"
	)
); ?>

<? $APPLICATION->IncludeComponent(
	"custom:main_page.with",
	".default",
	array(
		"BUTTON_TEXT" => "Подробнее",
		"COMPONENT_TEMPLATE" => ".default",
		"FILE" => S_T_P . "/assets/img/image 2.jpg",
		"POGRESS_TEXTS" => array(0 => "1", 1 => "Уменьшение срока выполнения заказа", 2 => "Сокращение расходов, связанных с рекламациями", 3 => "Экономия времени сотрудников на операционные действия", 4 => "31314144124", 5 => "3124324324", 6 => "",),
		"PROGRESS_PERENTAGES" => array(0 => "30%", 1 => "25%", 2 => "30%", 3 => "40%", 4 => "",),
		"PROMO_TITLE" => "Возможности системы <span>Бизнес в Плюсе</span>"
	)
); ?>
<div class="bg-3">
	<div class="bg-3-img">
	</div>
	<? $APPLICATION->IncludeComponent(
		"custom:main_page.why",
		".default",
		array(
			"BUTTON_TEXTS" => array(0 => "ВЫГОДНО", 1 => "Быстро", 2 => "БЕЗОПАСНО", 3 => "ЭФФЕКТИВНО", 4 => "ПРОСТО", 5 => "ПЕРСПЕКТИВНО", 6 => "", 7 => "ВЫГОДНО",),
			"BUTTON_TEXTS_INNER" => array(0 => "1) Вы получаете готовый продукт ERP система + CRM. Не нужны многочисленные программные доработки и дополнительное ПО. 2) В ERP уже встроена база справочных материалов, нужных отчетов и шаблонов документов. 3) Вы имеете бесплатный доступ к доработкам других компаний, и можете применять эти инновации в своем бизнесе.", 1 => "Ф1) Вы получаете готовый продукт ERP система + CRM. Не нужны многочисленные программные доработки и дополнительное ПО. 2) В ERP уже встроена база справочных материалов, нужных отчетов и шаблонов документов. 3) Вы имеете бесплатный доступ к доработкам других компаний, и можете применять эти инновации в своем бизнесе.", 2 => "А1) Вы получаете готовый продукт ERP система + CRM. Не нужны многочисленные программные доработки и дополнительное ПО. 2) В ERP уже встроена база справочных материалов, нужных отчетов и шаблонов документов. 3) Вы имеете бесплатный доступ к доработкам других компаний, и можете применять эти инновации в своем бизнесе.", 3 => "1) Вы получаете готовый продукт ERP система + CRM. Не нужны многочисленные программные доработки и дополнительное ПО. 2) В ERP уже встроена база справочных материалов, нужных отчетов и шаблонов документов. 3) Вы имеете бесплатный доступ к доработкам других компаний, и можете применять эти инновации в своем бизнесе.", 4 => "1) Вы получаете готовый продукт ERP система + CRM. Не нужны многочисленные программные доработки и дополнительное ПО. 2) В ERP уже встроена база справочных материалов, нужных отчетов и шаблонов документов. 3) Вы имеете бесплатный доступ к доработкам других компаний, и можете применять эти инновации в своем бизнесе.", 5 => "1) Вы получаете готовый продукт ERP система + CRM. Не нужны многочисленные программные доработки и дополнительное ПО. 2) В ERP уже встроена база справочных материалов, нужных отчетов и шаблонов документов. 3) Вы имеете бесплатный доступ к доработкам других компаний, и можете применять эти инновации в своем бизнесе.", 6 => "",),
			"COMPONENT_TEMPLATE" => ".default",
			"FILE" => "",
			"PROMO_TITLE" => "Почему система <span>Бизнес в Плюсе</span>"
		)
	); ?>
	<? $APPLICATION->IncludeComponent(
		"custom:main_page.man",
		".default",
		array(
			
		)
	); ?>

	<div class="container">
		<div class="tarif">
			<div class="tarif-title">
				Тариффф
			</div>
			<div class="d-flex">
				<div class="tarif-block">
					<div class="tarif-block-title">
						Мини 5
					</div>
					<div class="tarif-block-price">
						О руб
						<p>
							в месяц
						</p>
					</div>
					<div class="tarif-block-text">
						5 пользователей <span class="one_img_dots">Задачи и проекты</span>
						Параметр для сравнения <span class="disabled">Параметр для сравнения</span> <span class="disabled">Параметр для сравнения</span> <span class="disabled">Параметр для сравнения</span> <a href="#">Узнать больше</a> <button class="tarif-block-text-button">Начать</button>
					</div>
				</div>
				<div class="tarif-block">
					<div class="tarif-block-title">
						Мини 15
					</div>
					<div class="tarif-block-price">
						1 50О / 10 000 руб
						<p>
							в месяц/год
						</p>
					</div>
					<div class="tarif-block-text">
						25 пользователей <span class="one_img_dots">Задачи и проекты</span>
						Параметр для сравнения <span class="disabled">Параметр для сравнения</span> <span class="disabled">Параметр для сравнения</span> <span class="disabled">Параметр для сравнения</span> <a href="#">Узнать больше</a> <button class="tarif-block-text-button">Начать</button>
					</div>
				</div>
				<div class="tarif-block">
					<div class="tarif-block-title">
						Мини 30
					</div>
					<div class="tarif-block-price">
						2 50О / 20 000 руб
						<p>
							в месяц/год
						</p>
					</div>
					<div class="tarif-block-text">
						50 пользователей <span class="one_img_dots">Задачи и проекты</span>
						Параметр для сравнения <span class="disabled">Параметр для сравнения</span> <span class="disabled">Параметр для сравнения</span> <span class="disabled">Параметр для сравнения</span> <a href="#">Узнать больше</a> <button class="tarif-block-text-button">Начать</button>
					</div>
				</div>
				<div class="tarif-block">
					<div class="tarif-block-title">
						Премиум
					</div>
					<div class="tarif-block-price">
						3 50О / 30 000 руб
						<p>
							в месяц/год
						</p>
					</div>
					<div class="tarif-block-text">
						<span class="c666">100 пользователей</span> <span class="one_img_dots">Задачи и проекты</span> <span class="c666">Параметр для сравнения</span> <span class="c666">Параметр для сравнения</span> <span class="c666">Параметр для сравнения</span> <span class="c666">Параметр для сравнения</span> <a href="#">Узнать больше</a> <button class="tarif-block-text-button">Начать</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="events">
		<div class="events-title">
			Мероприятия
		</div>
		<div class="d-flex">
			<div class="events-block">
				<div class="events-block-data">
					21.01.24
				</div>
				<div class="events-block-img">
					<img src="<?= S_T_P ?>/assets/img/pseudo.png" alt="">
				</div>
				<div class="events-block-text">
					<div class="events-block-text-title">
						Заголовок новости возможно будет длинным в две или даже три строчки
					</div>
					<div class="events-block-text-sub">
						Анонс новости возможно будет длинным в дви или даже три строчки. Анонс новости возможно будет длинным в дви или даже три строчки. Анонс новости возможно будет длинным в дви или даже три строчки.
					</div>
				</div>
			</div>
			<div class="events-block">
				<div class="events-block-data">
					21.01.24
				</div>
				<div class="events-block-img">
					<img src="<?= S_T_P ?>/assets/img/pseudo.png" alt="">
				</div>
				<div class="events-block-text">
					<div class="events-block-text-title">
						Заголовок новости возможно будет длинным в две или даже три строчки
					</div>
					<div class="events-block-text-sub">
						Анонс новости возможно будет длинным в дви или даже три строчки. Анонс новости возможно будет длинным в дви или даже три строчки. Анонс новости возможно будет длинным в дви или даже три строчки.
					</div>
				</div>
			</div>
			<div class="events-block">
				<div class="events-block-data">
					21.01.24
				</div>
				<div class="events-block-img">
					<img src="<?= S_T_P ?>/assets/img/pseudo.png" alt="">
				</div>
				<div class="events-block-text">
					<div class="events-block-text-title">
						Заголовок новости возможно будет длинным в две или даже три строчки
					</div>
					<div class="events-block-text-sub">
						Анонс новости возможно будет длинным в дви или даже три строчки. Анонс новости возможно будет длинным в дви или даже три строчки. Анонс новости возможно будет длинным в дви или даже три строчки.
					</div>
				</div>
			</div>
		</div>
		<button class="events-button">Все мероприятия</button>
	</div>
</div>
<div class="container">
	<div class="what-say">
		<div class="what-say-title">
			Что говорят наши клиенты:
		</div>
		<div class="wrapper news__wrapper">
			<div class="swiper-container swiper what-say__slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide what-say-block d-flex">
						<div class="what-say-block-img">
							<img alt="alt" src="<?= S_T_P ?>/assets/img/Rectangle 3.png" class="item-news__img _fit-img">
						</div>
						<div class="what-say-block-content">
							<div class="what-say-block-content-title">
								Алексей Щербаков <br>
								Директор ООО “Ромашка”
							</div>
							<div class="what-say-block-content-text">
								<p>
									Текст Lorem ipsum — классический текст-«рыба» (условный, зачастую бессмысленный текст-заполнитель, вставляемый в макет страницы). Текст, по-видимому, является искажённым отрывком из философского трактата
								</p>
								<p>
									Марка Туллия Цицерона «О пределах добра и зла»
								</p>
								<p>
									Текст Lorem ipsum — классический текст-«рыба» (условный, зачастую бессмысленный текст-заполнитель,
								</p>
								<a href="">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide what-say-block d-flex">
						<div class="what-say-block-img">
							<img alt="alt" src="<?= S_T_P ?>/assets/img/Rectangle 3.png" class="item-news__img _fit-img">
						</div>
						<div class="what-say-block-content">
							<div class="what-say-block-content-title">
								Алексей Щербаков <br>
								Директор ООО “Ромашка”
							</div>
							<div class="what-say-block-content-text">
								<p>
									Текст Lorem ipsum — классический текст-«рыба» (условный, зачастую бессмысленный текст-заполнитель, вставляемый в макет страницы). Текст, по-видимому, является искажённым отрывком из философского трактата
								</p>
								<p>
									Марка Туллия Цицерона «О пределах добра и зла»
								</p>
								<p>
									Текст Lorem ipsum — классический текст-«рыба» (условный, зачастую бессмысленный текст-заполнитель,
								</p>
								<a href="">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide what-say-block d-flex">
						<div class="what-say-block-img">
							<img alt="alt" src="<?= S_T_P ?>/assets/img/Rectangle 3.png" class="item-news__img _fit-img">
						</div>
						<div class="what-say-block-content">
							<div class="what-say-block-content-title">
								Алексей Щербаков <br>
								Директор ООО “Ромашка”
							</div>
							<div class="what-say-block-content-text">
								<p>
									Текст Lorem ipsum — классический текст-«рыба» (условный, зачастую бессмысленный текст-заполнитель, вставляемый в макет страницы). Текст, по-видимому, является искажённым отрывком из философского трактата
								</p>
								<p>
									Марка Туллия Цицерона «О пределах добра и зла»
								</p>
								<p>
									Текст Lorem ipsum — классический текст-«рыба» (условный, зачастую бессмысленный текст-заполнитель,
								</p>
								<a href="">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="find-out">
		<div class="d-flex">
			<div class="find-out-text">
				<div class="find-out-text-title">
					Чтобы узнать стоимость системы, оставьте заявку:
				</div>
				<div class="find-out-text-sub">
					Текст Lorem ipsum — классический текст-«рыба» (условный, зачастую бессмысленный текст-заполнитель, вставляемый в макет страницы).
				</div>
			</div>
			<form class="find-out-form">
				<div class="find-out-form-row">
					<input placeholder="Имя" type="text"> <input placeholder="Телефон" type="text">
				</div>
				<input class="find-out-form-comment" placeholder="Комментарий" type="text"> <button type="submit" class="find-out-form-submit">Отправить</button>
			</form>
		</div>
	</div>
</div>
<div class="map">
	<div class="container">
		<div class="map-window">
			<div class="map-window-title">
				Контакты
			</div>
			<div class="map-window-adress">
				г. Краснодар, ул Длинноназванная, д 345, оф. 543
			</div>
			<div class="map-window-text">
				За подробной информацией обращайтесь:
			</div>
			<a href="#" class="map-window-phone">+7 (888) 998 89 98</a> <a href="#" class="map-window-email">info@biznesvpluse.ru</a>
			<div href="#" class="map-window-icons d-flex">
				<a href="#"><img src="<?= S_T_P ?>/assets/img/Group 74.svg" alt=""></a> <a href="#"><img src="<?= S_T_P ?>/assets/img/Frame.svg" alt=""></a>
			</div>
		</div>
	</div>
</div>
<br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>