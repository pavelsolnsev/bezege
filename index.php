<?php
    define("base_path","../system/");
    require_once '../vendor/autoload.php';

    $utm = new UTM_class();
    $utm->parseUTM( 'bezege');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<base href="">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Поступление без ЕГЭ</title>

	<meta property="og:title" content="Поступление без ЕГЭ">
	<meta property="og:description" content="Программа двух дипломов по непрерывному обучению «Колледж + ВУЗ»">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<link rel="image_src" href="">
	<link rel="icon" href="img/common/favicon.ico" type="image/x-icon">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/style.css">
	<?php if ($Facebook_ID != '') { ?>
		<!-- Facebook Pixel Code -->
		<script>
			! function(f, b, e, v, n, t, s) {
				if (f.fbq) return;
				n = f.fbq = function() {
					n.callMethod ?
						n.callMethod.apply(n, arguments) : n.queue.push(arguments)
				};
				if (!f._fbq) f._fbq = n;
				n.push = n;
				n.loaded = !0;
				n.version = '2.0';
				n.queue = [];
				t = b.createElement(e);
				t.async = !0;
				t.src = v;
				s = b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t, s)
			}(window, document, 'script',
				'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '<?= $Facebook_ID ?>');
			fbq('track', 'PageView');
		</script>
		<!-- End Facebook Pixel Code -->
	<?php } ?>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
		{'gtm.start': new Date().getTime(),event:'gtm.js'}
		);var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5RTF3MR');
	</script>
</head>

<body class="">
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2487426621502508&ev=PageView&noscript=1" /></noscript>

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RTF3MR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<div class="wrapper">

		<header class="header">
			<div class="container">
				<div class="header__content">
					<div class="header__logo">
						<img data-src="img/header/logo.svg" alt="EduNetWork" class="lazy">
						<span>Навигатор абитуриентов</span>
					</div>
					<nav class="header__menu" id="menu-modal">
						<div class="header__close" id="close">x</div>
						<ul class="header__list">
							<li class="header__item">
								<a href="#services" class="header__link scroll">Направления</a>
							</li>
							<li class="header__item">
								<a href="#info" class="header__link scroll">Кому подойдет</a>
							</li>
							<li class="header__item">
								<a href="#advantages" class="header__link scroll">Преимущества</a>
							</li>
						</ul>
						<a href="#popup-reg" data-fancybox class="header__button-mob button">Оставить заявку</a>
					</nav>
					<div class="header__contacts">
						<a href="#popup-reg" data-fancybox class="header__button button">Оставить заявку</a>
						<a href="tel:+78003023620" class="header__phone"><img data-src="img/header/phone.svg" alt="" class="lazy"></a>
						<div class="header__hamburger" id="hamburger">
							<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.4551 26H29.4551" stroke="#68B968" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M11.4551 20H29.4551" stroke="#68B968" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M11.4551 14H29.4551" stroke="#68B968" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<rect x="0.955078" y="0.5" width="39" height="39" rx="3.5" stroke="#68B968" />
							</svg>
						</div>
					</div>
				</div>
			</div>
		</header>

		<section class="main" id="main">

			<div class="main__wrapper">
				<div class="container">
					<div class="main__box">
						<h1 class="main__title">Получи высшее<br> образование без ЕГЭ</h1>
						<div class="main__desc">программа двух дипломов<br> по непрерывному обучению «Колледж + ВУЗ»</div>

					</div>
				</div>
				<img data-src="img/main/picture.svg" alt="" class="lazy main__img">
			</div>
			<div class="container container-list">
				<ul class="main__list">
					<li>Перевод без потери<br> курса</li>
					<li>Государственный<br> диплом</li>
					<li>Содействие<br> в трудоустройстве</li>
				</ul>
			</div>
		</section>


		<section class="form-reg form-reg_1">
			<div class="container">
				<form class="form">
					<div class="form__wrapper">
						<h2 class="form__title">Оставьте заявку, чтобы получить консультацию о поступлении </h3>
							<div class="form__items">
								<div class="form__item form__item_text">
									<input name="name" type="text" placeholder="Имя" class="form__input form__name" required="" value="">
								</div><!-- form__item -->

								<div class="form__item form__item_text ">
									<input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel" required="" value="">
								</div>
								<div class="form__item form__item_text">
									<input name="email" type="email" placeholder="email" class="form__input form__email" required="" value="">
								</div><!-- form__item -->
								<div class="form__item form__item_button"><button disabled class="form__button button button_1" type="submit">Отправить заявку</button></div>
							</div><!-- form__items -->
							<div class="form__more">
								<label class="form__footer ">
									<div class="form__footer-checkbox"><input class="check-block" type="checkbox" name="personalDataAgree" checked="">
										<div class="form__footer-checkbox-icon lazy-loaded"></div>
									</div>
									<div class="form__footer-text">
										Нажимая на кнопку, вы соглашаетесь с политикой конфиденциальности <a href="doc/politics.pdf" target="_blank" class="form__more-link">политикой конфиденциальности</a> и на получение рассылок
									</div>
								</label>
							</div>
					</div>
				</form>
			</div>
		</section>


		<section class="services" id="services">
			<div class="container">
				<div class="services__content">
					<div class="services__box">
						<h2 class="services__title title">Программы обучения</h2>
						<div class="services__items">

							<div class="services__items-item active-program">
								<div class="services__items-item-title">
									Педагогический факультет
								</div>
								<div class="services__items-item-txt">
									Научитесь использовать современные образовательные технологии, освоите различные методики преподавания. Сможете работать учителем в&nbsp;школе, преподавателем в&nbsp;вузе или воспитателем в&nbsp;детском саду.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Юридический факультет
								</div>
								<div class="services__items-item-txt">
									Выберите интересную вам область права, научитесь ориентироваться в&nbsp;современном законодательстве и&nbsp;пройдите практику в&nbsp;органах власти и&nbsp;судопроизводства для получения всех компетенций профессионального юриста.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Коммерция (по отраслям)
								</div>
								<div class="services__items-item-txt">
									Научитесь методологии закупки и&nbsp;продажи товаров, определению ассортимента товаров, оценке качества товаров, их&nbsp;конкурентоспособности, изучению спроса, организации товародвижения.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Право и организация социального обеспечения
								</div>
								<div class="services__items-item-txt">
									Область профессиональной деятельности выпускников: реализация правовых норм в&nbsp;социальной сфере, выполнение государственных полномочий по&nbsp;пенсионному обеспечению, государственных и&nbsp;муниципальных полномочий по&nbsp;социальной защите населения.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Анимация
								</div>
								<div class="services__items-item-txt">
									Станьте универсальным специалистом, который умеет в&nbsp;3D&nbsp;все: создавать объекты и&nbsp;окружение, настраивать текстуры и&nbsp;цвет, анимировать и&nbsp;внедрять модели в&nbsp;3D-сцену. Освойте Houdini, Autodesk Maya, Photoshop, ZBrush и&nbsp;Marmoset Toolbag&nbsp;&mdash; и&nbsp;сможете претендовать на&nbsp;работу в&nbsp;рекламе, играх или кино.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Дизайн
								</div>
								<div class="services__items-item-txt">
									Узнайте, как создавать фирменный стиль и&nbsp;разрабатывать логотипы, научитесь работать в&nbsp;Illustrator и&nbsp;Photoshop&nbsp;&mdash; и&nbsp;сделайте свой первый проект.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Менеджмент
								</div>
								<div class="services__items-item-txt">
									Изучите основы менеджмента, экономики, стратегического планирования и работы с персоналом. Узнайте, как управлять проектами любых масштабов и выводить организации на пик эффективности.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Спортивный менеджмент
								</div>
								<div class="services__items-item-txt">
									Получите знания в&nbsp;области спортивного менеджмента и&nbsp;маркетинга. Пройдите практику в&nbsp;спортивных организациях, примите участие в&nbsp;подготовке и&nbsp;проведении спортивных мероприятий и&nbsp;начните работать в&nbsp;индустрии спорта.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Музыкальная звукорежиссура
								</div>
								<div class="services__items-item-txt">
									Научитесь работать со&nbsp;звуком: от&nbsp;записи до&nbsp;сведения и&nbsp;мастеринга. Сможете озвучивать видео, писать саундтреки и&nbsp;заниматься звукорежиссурой. Соберете портфолио и&nbsp;получите востребованную профессию.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Актерское искусство
								</div>
								<div class="services__items-item-txt">
									Освойте актерские приемы, раскройте свой творческий потенциал, развивайте сценическую память и&nbsp;внимание, научитесь работать с&nbsp;партнером на&nbsp;сцене.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Факультет программирования
								</div>
								<div class="services__items-item-txt">
									Вы&nbsp;получите уникальную специальность, глубокие знания языков программирования. Научитесь работать с&nbsp;базами данных и&nbsp;компьютерными сетями.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Информационные системы
								</div>
								<div class="services__items-item-txt">
									Научитесь разрабатывать программное обеспечение, получите углубленные знания&nbsp;1С, погрузитесь в&nbsp;специфику построения IT-инфраструктуры предприятия и&nbsp;станьте универсальным IT-специалистом.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Веб-дизайн
								</div>
								<div class="services__items-item-txt">
									Изучите основы рекламных и&nbsp;цифровых технологий, освойте современные инструменты разработки дизайна и&nbsp;станьте высокооплачиваемым специалистом в&nbsp;области создания веб-сайтов, мобильных приложений и&nbsp;проектирования среды.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Лечебное дело
								</div>
								<div class="services__items-item-txt">
									Лечебное дело подходит тем, кто мечтает быть врачом, хочет погрузиться в&nbsp;самые сложные разделы медицины и&nbsp;быть готовым оказать любую помощь.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Сестринское дело
								</div>
								<div class="services__items-item-txt">
									Медицинские сестры&nbsp;&mdash; важные участники системы здравоохранения, помощь и&nbsp;поддержка врачей. Образование медицинской сестры может стать отличной базой, если в&nbsp;дальнейшем вы&nbsp;захотите стать массажистом, косметологом или врачом.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Фармация
								</div>
								<div class="services__items-item-txt">
									Изучите общую, органическую, токсикологическую и&nbsp;фармацевтическую химию. Получите навыки медицинского и&nbsp;фармацевтического товароведения и&nbsp;сможете работать химиком-аналитиком, провизором или заведующим лабораторией, проводить маркетинговые исследования.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Стоматология
								</div>
								<div class="services__items-item-txt">
									Получите одну из&nbsp;самых востребованных и&nbsp;высокооплачиваемых профессий. Пройдите практику в&nbsp;клиниках Москвы и&nbsp;станьте зубным техником, ортодонтом или хирургом.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Финансы
								</div>
								<div class="services__items-item-txt">
									Изучите современные направления бизнеса и&nbsp;экономики, освойте методы управления экономикой общественного, финансового и&nbsp;банковского сектора.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Бухгалтерский учет анализ и аудит
								</div>
								<div class="services__items-item-txt">
									Получите обширные экономические знания по&nbsp;формированию и&nbsp;анализу необходимой любому предприятию информации об&nbsp;активах, обязательствах, капитале, движении денежных потоков, доходах и&nbsp;расходах, финансовых результатах деятельности предприятия, научитесь профессионально обслуживать предпринимательскую деятельности всех форм собственности и&nbsp;осуществлять реализацию собственных навыков в&nbsp;любой сфере народного хозяйства.
								</div>
							</div>

							<div class="services__items-item ">
								<div class="services__items-item-title">
									Системное администрирование
								</div>
								<div class="services__items-item-txt">
									Вы&nbsp;научитесь настраивать веб-серверы и&nbsp;поддерживать работу сайтов, диагностировать неполадки, пользоваться базами данных. Сможете начать карьеру системного администратора
								</div>
							</div>

						</div>
					</div>
					<div class="services__info">
						<ul class="services__info-list">
							<li><span>Колледж + ВУЗ</span></li>
							<li>Очно/ Онлайн</li>
							<li>Срок обучения: до 5 лет 6 месяцев</li>
						</ul>

						<div class="services__info-title">
							Педагогический факультет
						</div>
						<div class="services__info-txt">
							Научитесь использовать современные образовательные технологии, освоите различные методики преподавания. Сможете работать учителем в&nbsp;школе, преподавателем в&nbsp;вузе или воспитателем в&nbsp;детском саду.
						</div>

						<div class="services__info-title">
							Юридический факультет
						</div>
						<div class="services__info-txt">
							Выберите интересную вам область права, научитесь ориентироваться в&nbsp;современном законодательстве и&nbsp;пройдите практику в&nbsp;органах власти и&nbsp;судопроизводства для получения всех компетенций профессионального юриста.
						</div>

						<div class="services__info-title">
							Коммерция (по отраслям)
						</div>
						<div class="services__info-txt">
							Научитесь методологии закупки и&nbsp;продажи товаров, определению ассортимента товаров, оценке качества товаров, их&nbsp;конкурентоспособности, изучению спроса, организации товародвижения.
						</div>

						<div class="services__info-title">
							Право и организация социального обеспечения
						</div>
						<div class="services__info-txt">
							Область профессиональной деятельности выпускников: реализация правовых норм в&nbsp;социальной сфере, выполнение государственных полномочий по&nbsp;пенсионному обеспечению, государственных и&nbsp;муниципальных полномочий по&nbsp;социальной защите населения.
						</div>

						<div class="services__info-title">
							Анимация
						</div>
						<div class="services__info-txt">
							Станьте универсальным специалистом, который умеет в&nbsp;3D&nbsp;все: создавать объекты и&nbsp;окружение, настраивать текстуры и&nbsp;цвет, анимировать и&nbsp;внедрять модели в&nbsp;3D-сцену. Освойте Houdini, Autodesk Maya, Photoshop, ZBrush и&nbsp;Marmoset Toolbag&nbsp;&mdash; и&nbsp;сможете претендовать на&nbsp;работу в&nbsp;рекламе, играх или кино.
						</div>

						<div class="services__info-title">
							Дизайн
						</div>
						<div class="services__info-txt">
							Узнайте, как создавать фирменный стиль и&nbsp;разрабатывать логотипы, научитесь работать в&nbsp;Illustrator и&nbsp;Photoshop&nbsp;&mdash; и&nbsp;сделайте свой первый проект.
						</div>

						<div class="services__info-title">
							Менеджмент
						</div>
						<div class="services__info-txt">
							Изучите основы менеджмента, экономики, стратегического планирования и работы с персоналом. Узнайте, как управлять проектами любых масштабов и выводить организации на пик эффективности.
						</div>

						<div class="services__info-title">
							Спортивный менеджмент
						</div>
						<div class="services__info-txt">
							Получите знания в&nbsp;области спортивного менеджмента и&nbsp;маркетинга. Пройдите практику в&nbsp;спортивных организациях, примите участие в&nbsp;подготовке и&nbsp;проведении спортивных мероприятий и&nbsp;начните работать в&nbsp;индустрии спорта.
						</div>

						<div class="services__info-title">
							Музыкальная звукорежиссура
						</div>
						<div class="services__info-txt">
							Научитесь работать со&nbsp;звуком: от&nbsp;записи до&nbsp;сведения и&nbsp;мастеринга. Сможете озвучивать видео, писать саундтреки и&nbsp;заниматься звукорежиссурой. Соберете портфолио и&nbsp;получите востребованную профессию.
						</div>

						<div class="services__info-title">
							Актерское искусство
						</div>
						<div class="services__info-txt">
							Освойте актерские приемы, раскройте свой творческий потенциал, развивайте сценическую память и&nbsp;внимание, научитесь работать с&nbsp;партнером на&nbsp;сцене.
						</div>

						<div class="services__info-title">
							Факультет программирования
						</div>
						<div class="services__info-txt">
							Вы&nbsp;получите уникальную специальность, глубокие знания языков программирования. Научитесь работать с&nbsp;базами данных и&nbsp;компьютерными сетями.
						</div>

						<div class="services__info-title">
							Информационные системы
						</div>
						<div class="services__info-txt">
							Научитесь разрабатывать программное обеспечение, получите углубленные знания&nbsp;1С, погрузитесь в&nbsp;специфику построения IT-инфраструктуры предприятия и&nbsp;станьте универсальным IT-специалистом.
						</div>

						<div class="services__info-title">
							Веб-дизайн
						</div>
						<div class="services__info-txt">
							Изучите основы рекламных и&nbsp;цифровых технологий, освойте современные инструменты разработки дизайна и&nbsp;станьте высокооплачиваемым специалистом в&nbsp;области создания веб-сайтов, мобильных приложений и&nbsp;проектирования среды.
						</div>

						<div class="services__info-title">
							Лечебное дело
						</div>
						<div class="services__info-txt">
							Лечебное дело подходит тем, кто мечтает быть врачом, хочет погрузиться в&nbsp;самые сложные разделы медицины и&nbsp;быть готовым оказать любую помощь.
						</div>

						<div class="services__info-title">
							Сестринское дело
						</div>
						<div class="services__info-txt">
							Медицинские сестры&nbsp;&mdash; важные участники системы здравоохранения, помощь и&nbsp;поддержка врачей. Образование медицинской сестры может стать отличной базой, если в&nbsp;дальнейшем вы&nbsp;захотите стать массажистом, косметологом или врачом.
						</div>

						<div class="services__info-title">
							Фармация
						</div>
						<div class="services__info-txt">
							Изучите общую, органическую, токсикологическую и&nbsp;фармацевтическую химию. Получите навыки медицинского и&nbsp;фармацевтического товароведения и&nbsp;сможете работать химиком-аналитиком, провизором или заведующим лабораторией, проводить маркетинговые исследования.
						</div>

						<div class="services__info-title">
							Стоматология
						</div>
						<div class="services__info-txt">
							Получите одну из&nbsp;самых востребованных и&nbsp;высокооплачиваемых профессий. Пройдите практику в&nbsp;клиниках Москвы и&nbsp;станьте зубным техником, ортодонтом или хирургом.
						</div>

						<div class="services__info-title">
							Финансы
						</div>
						<div class="services__info-txt">
							Изучите современные направления бизнеса и&nbsp;экономики, освойте методы управления экономикой общественного, финансового и&nbsp;банковского сектора.
						</div>

						<div class="services__info-title">
							Бухгалтерский учет анализ и аудит
						</div>
						<div class="services__info-txt">
							Получите обширные экономические знания по&nbsp;формированию и&nbsp;анализу необходимой любому предприятию информации об&nbsp;активах, обязательствах, капитале, движении денежных потоков, доходах и&nbsp;расходах, финансовых результатах деятельности предприятия, научитесь профессионально обслуживать предпринимательскую деятельности всех форм собственности и&nbsp;осуществлять реализацию собственных навыков в&nbsp;любой сфере народного хозяйства.
						</div>

						<div class="services__info-title">
							Системное администрирование
						</div>
						<div class="services__info-txt">
							Вы&nbsp;научитесь настраивать веб-серверы и&nbsp;поддерживать работу сайтов, диагностировать неполадки, пользоваться базами данных. Сможете начать карьеру системного администратора
						</div>
						<a class="services__info-button button" data-title="" href="#popup-program" data-fancybox>Оставить заявку</a>
					</div>
				</div>
				<div class="services__mob">
					<h2 class="services__title title">Программы обучения</h2>
					<div class="services__mob-box">

						<div class="services__mob-item">
							<div class="services__info-title">
								Педагогический факультет
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Научитесь использовать современные образовательные технологии, освоите различные методики преподавания. Сможете работать учителем в&nbsp;школе, преподавателем в&nbsp;вузе или воспитателем в&nbsp;детском саду.
							</div>
							<a class="services__info-button services__info-button-mob button"data-title="Педагогический факультет" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Юридический факультет
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Выберите интересную вам область права, научитесь ориентироваться в&nbsp;современном законодательстве и&nbsp;пройдите практику в&nbsp;органах власти и&nbsp;судопроизводства для получения всех компетенций профессионального юриста.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Юридический факультет" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Коммерция (по отраслям)
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Научитесь методологии закупки и&nbsp;продажи товаров, определению ассортимента товаров, оценке качества товаров, их&nbsp;конкурентоспособности, изучению спроса, организации товародвижения.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Коммерция (по отраслям)" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Право и организация социального обеспечения
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Область профессиональной деятельности выпускников: реализация правовых норм в&nbsp;социальной сфере, выполнение государственных полномочий по&nbsp;пенсионному обеспечению, государственных и&nbsp;муниципальных полномочий по&nbsp;социальной защите населения.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Право и организация социального обеспечения" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Анимация
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Станьте универсальным специалистом, который умеет в&nbsp;3D&nbsp;все: создавать объекты и&nbsp;окружение, настраивать текстуры и&nbsp;цвет, анимировать и&nbsp;внедрять модели в&nbsp;3D-сцену. Освойте Houdini, Autodesk Maya, Photoshop, ZBrush и&nbsp;Marmoset Toolbag&nbsp;&mdash; и&nbsp;сможете претендовать на&nbsp;работу в&nbsp;рекламе, играх или кино.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Анимация" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Дизайн
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Узнайте, как создавать фирменный стиль и&nbsp;разрабатывать логотипы, научитесь работать в&nbsp;Illustrator и&nbsp;Photoshop&nbsp;&mdash; и&nbsp;сделайте свой первый проект.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Дизайн" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Менеджмент
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Изучите основы менеджмента, экономики, стратегического планирования и работы с персоналом. Узнайте, как управлять проектами любых масштабов и выводить организации на пик эффективности.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Менеджмент" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Спортивный менеджмент
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Получите знания в&nbsp;области спортивного менеджмента и&nbsp;маркетинга. Пройдите практику в&nbsp;спортивных организациях, примите участие в&nbsp;подготовке и&nbsp;проведении спортивных мероприятий и&nbsp;начните работать в&nbsp;индустрии спорта.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Спортивный менеджмент" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Музыкальная звукорежиссура
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Научитесь работать со&nbsp;звуком: от&nbsp;записи до&nbsp;сведения и&nbsp;мастеринга. Сможете озвучивать видео, писать саундтреки и&nbsp;заниматься звукорежиссурой. Соберете портфолио и&nbsp;получите востребованную профессию.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Музыкальная звукорежиссура" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Актерское искусство
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Освойте актерские приемы, раскройте свой творческий потенциал, развивайте сценическую память и&nbsp;внимание, научитесь работать с&nbsp;партнером на&nbsp;сцене.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Актерское искусство" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Факультет программирования
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Вы&nbsp;получите уникальную специальность, глубокие знания языков программирования. Научитесь работать с&nbsp;базами данных и&nbsp;компьютерными сетями.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Факультет программирования" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Информационные системы
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Научитесь разрабатывать программное обеспечение, получите углубленные знания&nbsp;1С, погрузитесь в&nbsp;специфику построения IT-инфраструктуры предприятия и&nbsp;станьте универсальным IT-специалистом.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Информационные системы" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Веб-дизайн
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Изучите основы рекламных и&nbsp;цифровых технологий, освойте современные инструменты разработки дизайна и&nbsp;станьте высокооплачиваемым специалистом в&nbsp;области создания веб-сайтов, мобильных приложений и&nbsp;проектирования среды.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Веб-дизайн" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Лечебное дело
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Лечебное дело подходит тем, кто мечтает быть врачом, хочет погрузиться в&nbsp;самые сложные разделы медицины и&nbsp;быть готовым оказать любую помощь.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Лечебное дело" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Сестринское дело
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Медицинские сестры&nbsp;&mdash; важные участники системы здравоохранения, помощь и&nbsp;поддержка врачей. Образование медицинской сестры может стать отличной базой, если в&nbsp;дальнейшем вы&nbsp;захотите стать массажистом, косметологом или врачом.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Сестринское дело" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Фармация
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Изучите общую, органическую, токсикологическую и&nbsp;фармацевтическую химию. Получите навыки медицинского и&nbsp;фармацевтического товароведения и&nbsp;сможете работать химиком-аналитиком, провизором или заведующим лабораторией, проводить маркетинговые исследования.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Фармация" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Стоматология
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Получите одну из&nbsp;самых востребованных и&nbsp;высокооплачиваемых профессий. Пройдите практику в&nbsp;клиниках Москвы и&nbsp;станьте зубным техником, ортодонтом или хирургом.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Стоматология" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Финансы
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Изучите современные направления бизнеса и&nbsp;экономики, освойте методы управления экономикой общественного, финансового и&nbsp;банковского сектора.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Финансы" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Бухгалтерский учет анализ и аудит
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Получите обширные экономические знания по&nbsp;формированию и&nbsp;анализу необходимой любому предприятию информации об&nbsp;активах, обязательствах, капитале, движении денежных потоков, доходах и&nbsp;расходах, финансовых результатах деятельности предприятия, научитесь профессионально обслуживать предпринимательскую деятельности всех форм собственности и&nbsp;осуществлять реализацию собственных навыков в&nbsp;любой сфере народного хозяйства.
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Бухгалтерский учет анализ и аудит" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

						<div class="services__mob-item">
							<div class="services__info-title">
								Системное администрирование
							</div>
							<ul class="services__info-list">
								<li><span>Колледж + ВУЗ</span></li>
								<li>Очно/ Онлайн</li>
								<li>Срок обучения: до 5 лет 6 месяцев</li>
							</ul>
							<div class="services__info-txt">
								Вы&nbsp;научитесь настраивать веб-серверы и&nbsp;поддерживать работу сайтов, диагностировать неполадки, пользоваться базами данных. Сможете начать карьеру системного администратора
							</div>
							<a class="services__info-button services__info-button-mob button" data-title="Системное администрирование" href="#popup-program" data-fancybox>Оставить заявку</a>
						</div>

					</div>

					<div class="services__mob-more button">Показать еще</div>
				</div>
			</div>
		</section>



		<section class="form-reg form-reg_2">
			<div class="container">
				<form class="form">
					<div class="form__wrapper">
						<h2 class="form__title">Оставьте заявку, чтобы получить консультацию о поступлении </h3>
							<div class="form__items">
								<div class="form__item form__item_text">
									<input name="name" type="text" placeholder="Имя" class="form__input form__name" required="" value="">
								</div><!-- form__item -->

								<div class="form__item form__item_text ">
									<input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel" required="" value="">
								</div>
								<div class="form__item form__item_text">
									<input name="email" type="email" placeholder="email" class="form__input form__email" required="" value="">
								</div><!-- form__item -->
								<div class="form__item form__item_button"><button disabled class="form__button button button_1" type="submit">Отправить заявку</button></div>
							</div><!-- form__items -->
							<div class="form__more">
								<label class="form__footer ">
									<div class="form__footer-checkbox"><input class="check-block" type="checkbox" name="personalDataAgree" checked="">
										<div class="form__footer-checkbox-icon lazy-loaded"></div>
									</div>
									<div class="form__footer-text">
										Нажимая на кнопку, вы соглашаетесь с политикой конфиденциальности <a href="doc/politics.pdf" target="_blank" class="form__more-link">политикой конфиденциальности</a> и на получение рассылок
									</div>
								</label>
							</div>
					</div>
				</form>
			</div>
		</section>

		<section class="info" id="info">
			<div class="container">
				<h2 class="info__title title">Кому подойдёт <img data-src="img/info/title.svg" alt="" class="lazy"></h2>
				<p class="info__desc">Процедура сдачи ЕГЭ зачастую приносит много стресса и&nbsp;не&nbsp;всегда сопряжена с&nbsp;объективной оценкой знаний слушателей. Именно поэтому&nbsp;мы, совместно с&nbsp;партнерами реализуем программу, позволяющую поступить на&nbsp;нужную вам специальность, даже если отсутствуют баллы ЕГЭ.</p>
				<div class="info__box">
					<div class="info__item">
						<h3 class="info__item-title">ЕГЭ не действителен</h3>
						<p class="info__item-desc">Вы&nbsp;сдавали ЕГЭ давно, но&nbsp;хотите продолжить свое обучение.</p>
					</div>
					<div class="info__item">
						<h3 class="info__item-title">Не набрали<br> баллы по ЕГЭ</h3>
						<p class="info__item-desc">Переволновались или были вынуждены готовиться по&nbsp;другим экзаменам, ситуации бывают разные</p>
					</div>
					<div class="info__item">
						<h3 class="info__item-title">Не сдавали ЕГЭ</h3>
						<p class="info__item-desc">Вы&nbsp;заканчивали школу до&nbsp;2010 года</p>
					</div>
					<div class="info__item">
						<h3 class="info__item-title">Боитесь сдавать ЕГЭ</h3>
						<p class="info__item-desc">Процедура сдачи вызывает у&nbsp;вас беспокойства, а&nbsp;времени готовиться у&nbsp;вас нет</p>
					</div>
				</div>
			</div>
		</section>
		<section class="advantages" id="advantages">
			<div class="container">
				<h2 class="advantages__title title">Преимущества <img data-src="img/advantages/lamp.svg" alt="" class="lazy"></h2>
				<div class="advantages__box">
					<div class="advantages__item">
						<div class="advantages__item-num">01</div>
						<p class="advantages__item-text">Возможность поступить на&nbsp;интересующую специальность без ЕГЭ</p>
					</div>
					<div class="advantages__item">
						<div class="advantages__item-num">02</div>
						<p class="advantages__item-text">Возможность получить две специальности в&nbsp;рамках программы</p>
					</div>
					<div class="advantages__item">
						<div class="advantages__item-num">03</div>
						<p class="advantages__item-text">Два диплома по выпуску</p>
					</div>
					<div class="advantages__item">
						<div class="advantages__item-num">04</div>
						<p class="advantages__item-text">Содействие в трудоустройстве</p>
					</div>
				</div>
			</div>
		</section>



		<section class="form-reg form-reg_3">
			<div class="container">
				<form class="form">
					<div class="form__wrapper">
						<h2 class="form__title">Оставьте заявку, чтобы получить консультацию о поступлении </h3>
							<div class="form__items">
								<div class="form__item form__item_text">
									<input name="name" type="text" placeholder="Имя" class="form__input form__name" required="" value="">
								</div><!-- form__item -->

								<div class="form__item form__item_text ">
									<input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel" required="" value="">
								</div>
								<div class="form__item form__item_text">
									<input name="email" type="email" placeholder="email" class="form__input form__email" required="" value="">
								</div><!-- form__item -->
								<div class="form__item form__item_button"><button disabled class="form__button button button_1" type="submit">Отправить заявку</button></div>
							</div><!-- form__items -->
							<div class="form__more">
								<label class="form__footer ">
									<div class="form__footer-checkbox"><input class="check-block" type="checkbox" name="personalDataAgree" checked="">
										<div class="form__footer-checkbox-icon lazy-loaded"></div>
									</div>
									<div class="form__footer-text">
										Нажимая на кнопку, вы соглашаетесь с <a href="doc/politics.pdf" target="_blank" class="form__more-link">политикой конфиденциальности</a> и на получение рассылок
									</div>
								</label>
							</div>
					</div>
				</form>
			</div>
		</section>


		<section class="faq" id="faq">
			<div class="container">
				<h2 class="faq__title title">Часто задаваемые вопросы <img data-src="img/faq/title.svg" alt="" class="lazy"></h2>
				<ul class="faq__acco">

					<li class="faq__acco-item">
						<div class="faq__acco-trigger">
							<div class="faq__acco-title"><span>Могу ли я сменить специальность во время обучения?</span><img src="img/faq/theme.svg" alt=""></div>
						</div>
						<p class="faq__acco-text">Да, такая возможность есть- в большинстве случаев это происходит без потери курса.</p>
					</li>

					<li class="faq__acco-item">
						<div class="faq__acco-trigger">
							<div class="faq__acco-title"><span>Почему баллы ЕГЭ не нужны?</span><img src="img/faq/theme.svg" alt=""></div>
						</div>
						<p class="faq__acco-text">Программа предусматривает получение двух дипломов, мы зачисляем абитуриентов в колледж на сокращенный срок далее при переходе на высшее образование вы поступаете без ЕГЭ на основании диплома колледжа.</p>
					</li>

					<li class="faq__acco-item">
						<div class="faq__acco-trigger">
							<div class="faq__acco-title"><span>Есть ли у вас партнерство с организациями для стажировок студентов?</span><img src="img/faq/theme.svg" alt=""></div>
						</div>
						<p class="faq__acco-text">Да, ВУЗы участвующие в программе сотрудничают с крупнейшими компаниями на рынке.</p>
					</li>

					<li class="faq__acco-item">
						<div class="faq__acco-trigger">
							<div class="faq__acco-title"><span>Какой диплом я получу в конце обучения?</span><img src="img/faq/theme.svg" alt=""></div>
						</div>
						<p class="faq__acco-text">Вы получите два диплома государственного образца уровней: Среднего профессионального образования и Бакалавра.</p>
					</li>

				</ul>
			</div>
		</section>




		<section class="main main_2" id="main">

			<div class="main__wrapper">
				<div class="container">
					<div class="main__box">
						<h1 class="main__title">Получи высшее<br> образование без ЕГЭ</h1>
						<div class="main__desc">программа двух дипломов<br> по непрерывному обучению «Колледж + ВУЗ»</div>

						<a href="#popup-reg" data-fancybox class="main__button button">Оставить заявку</a>

					</div>
				</div>
				<img data-src="img/main/picture.svg" alt="" class="lazy main__img">
			</div>
			<div class="container container-list">
				<ul class="main__list">
					<li>Перевод без потери<br> курса</li>
					<li>Государственный<br> диплом</li>
					<li>Содействие<br> в трудоустройстве</li>
				</ul>
			</div>
			<section class="form-reg form-reg_4">
				<div class="container">
					<form class="form">
						<div class="form__wrapper">
							<h2 class="form__title">Оставьте заявку, чтобы получить консультацию о поступлении </h3>
								<div class="form__items">
									<div class="form__item form__item_text">
										<input name="name" type="text" placeholder="Имя" class="form__input form__name" required="" value="">
									</div><!-- form__item -->

									<div class="form__item form__item_text ">
										<input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel" required="" value="">
									</div>
									<div class="form__item form__item_text">
										<input name="email" type="email" placeholder="email" class="form__input form__email" required="" value="">
									</div><!-- form__item -->
									<div class="form__item form__item_button"><button disabled class="form__button button button_1" type="submit">Отправить заявку</button></div>
								</div><!-- form__items -->
								<div class="form__more">
									<label class="form__footer ">
										<div class="form__footer-checkbox"><input class="check-block" type="checkbox" name="personalDataAgree" checked="">
											<div class="form__footer-checkbox-icon lazy-loaded"></div>
										</div>
										<div class="form__footer-text">
											Нажимая на кнопку, вы соглашаетесь с <a href="doc/politics.pdf" target="_blank" class="form__more-link">политикой конфиденциальности</a> и на получение рассылок
										</div>
									</label>
								</div>
						</div>
					</form>
				</div>
			</section>
		</section>
		<footer class="footer">
			<div class="container">
				<div class="footer__box">
					<form class="form footer__form form_vertical">
						<div class="form__wrapper">
							<h2 class="form__title">Контакт-центр:</h3>
								<p class="form__text">Получи консультацию от экспертов в образовании, оставив заявку
								<p>
								<div class="form__items">
									<div class="form__item form__item_text">
										<input name="name" type="text" placeholder="Ваше имя" class="form__input form__name" required="" value="">
									</div><!-- form__item -->

									<div class="form__item form__item_text ">
										<input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel" required="" value="">
									</div>
									<div class="form__item form__item_text">
										<input name="email" type="email" placeholder="email" class="form__input form__email" required="" value="">
									</div><!-- form__item -->
									<div class="form__item form__item_button"><button disabled class="form__button button button_1" type="submit">Отправить заявку</button></div>
								</div><!-- form__items -->
								<div class="form__more">
									<label class="form__footer ">
										<div class="form__footer-checkbox"><input class="check-block" type="checkbox" name="personalDataAgree" checked="">
											<div class="form__footer-checkbox-icon lazy-loaded"></div>
										</div>
										<div class="form__footer-text">
											*Нажимая на кнопку я даю согласие на обработку моих персональных данных
										</div>
									</label>
								</div>
						</div>
					</form>

					<div class="footer__content">
						<div class="footer__wrap">
							<ul class="footer__time">
								<li>График работы контакт-центра:</li>
								<li>пн–пт&nbsp; 09:00–20:00</li>
								<li>сб&nbsp; 09:00–19:00</li>
								<li>вс&nbsp; 09:00–17:00</li>
							</ul>
							<ul class="footer__info">
								<li>Информация:</li>
								<li><a href="#info" class="scroll">Кому подойдет</a></li>
								<li><a href="#advantages" class="scroll">Преимущества</a></li>
								<li><a href="#services" class="scroll">Направления</a> </li>
							</ul>
						</div>
						<div class="footer__logo">
							<img data-src="img/footer/logo.svg" alt="" class="lazy ">
						</div>
					</div>
				</div>

				<div class="footer__developer">
					<div class="footer__developer-item">Политика конфиденциальности</div>
					<a class="footer__developer-item" href="doc/politics.pdf" target="_blank">Политика конфиденциальности</a>
				</div>
			</div>
		</footer>

	</div>

	<div class="fixed">
		<a href="#popup-reg" data-fancybox class="fixed__button button">Отправить заявку</a>
	</div>

	<div hidden>

		<div class="popup popup-reg" id="popup-reg">
			<form class="form form_vertical">
				<div class="form__wrapper">
					<h2 class="form__title">Регистрация</h3>
						<div class="form__items">
							<div class="form__item form__item_text">
								<input name="name" type="text" placeholder="Имя" class="form__input form__name" required="" value="">
							</div><!-- form__item -->

							<div class="form__item form__item_text ">
								<input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel" required="" value="">
							</div>
							<!-- form__item -->
							<div class="form__item form__item_text ">
								<input name="email" type="email" placeholder="Почта" class="form__input" required="" value="">
							</div>
							<!-- form__item -->
							<div class="form__item form__item_button"><button disabled class="form__button button" type="submit">Отправить заявку</button></div>
						</div><!-- form__items -->
						<div class="form__more">
							<label class="form__footer ">
								<div class="form__footer-checkbox"><input class="check-block" type="checkbox" name="personalDataAgree" checked="">
									<div class="form__footer-checkbox-icon lazy-loaded"></div>
								</div>
								<div class="form__footer-text">
									Нажимая на кнопку, я соглашаюсь с <a href="doc/politics.pdf" target="_blank" class="form__more-link">политикой конфиденциальности</a> и на получение рассылок
								</div>
							</label>
						</div>
				</div>
			</form>
		</div>
		<div class="popup popup-reg" id="popup-program">
			<form class="form form_vertical">
				<div class="form__wrapper">
					<h2 class="form__title">Регистрация</h3>
						<div class="form__items">
							<div class="form__item form__item_text">
								<input name="name" type="text" placeholder="Имя" class="form__input form__name" required="" value="">
							</div><!-- form__item -->

							<div class="form__item form__item_text ">
								<input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel" required="" value="">
							</div>
							<!-- form__item -->
							<div class="form__item form__item_text ">
								<input name="email" type="email" placeholder="Почта" class="form__input" required="" value="">
							</div>
							<!-- form__item -->
							<div class="form__item form__item_button"><button disabled class="form__button button" type="submit">Отправить заявку</button></div>
							<input class="form__lidforma" type="hidden" name="lidforma" value="">
						</div><!-- form__items -->
						<div class="form__more">
							<label class="form__footer ">
								<div class="form__footer-checkbox"><input class="check-block" type="checkbox" name="personalDataAgree" checked="">
									<div class="form__footer-checkbox-icon lazy-loaded"></div>
								</div>
								<div class="form__footer-text">
									Нажимая на кнопку, я соглашаюсь с <a href="doc/politics.pdf" target="_blank" class="form__more-link">политикой конфиденциальности</a> и на получение рассылок
								</div>
							</label>
						</div>
				</div>
			</form>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
		<script src="js/script.js"></script>
</body>

</html>