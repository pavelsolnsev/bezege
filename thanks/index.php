<!DOCTYPE html>
<html lang="ru">
<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
$query_string = http_build_query($_GET);
//include_once $ROOT . 'version.php';
?>
<head>
	<base href="<?= $BASE_HREF . ($query_string ? '?' . $query_string : '') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= $title ?></title>

	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $desc ?>">
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
	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(

		{'gtm.start': new Date().getTime(),event:'gtm.js'}

		);var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5RTF3MR');</script>
	<!-- End Google Tag Manager -->
</head>

<body class="<?= $version ? 'version-' . $version : '' ?> page-thanks">
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RTF3MR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2487426621502508&ev=PageView&noscript=1" /></noscript>

	<div class="wrapper">
	
	<section class="thanks">
    <div class="container">
        <div class="thanks__content">
            <h1 class="thanks__title">Спасибо за регистрацию!</h1>
            <div class="thanks__desc">В ближайшее время наш менеджер свяжется с вами</div>
            <a class="thanks__button button" href="/">Перейти на главную</a>
        </div>
        <img data-src="img/main/picture.svg" alt="" class="lazy thanks__img">
    </div>
</section>

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
                        <input name="phone" type="text" placeholder="Телефон" class="form__input form__tel" required="" value="">
                    </div>
                    <!-- form__item -->
                    <div class="form__item form__item_text ">
                        <input name="email" type="email" placeholder="Почта" class="form__input" required="" value="">
                    </div>
                    <!-- form__item -->
                    <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить заявку</button></div>
                </div><!-- form__items -->
                <div class="form__more">
                    <label class="form__footer ">
                        <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked="">
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
		
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="js/script.js"></script>
</body>

</html>