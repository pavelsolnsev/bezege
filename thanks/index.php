<!DOCTYPE html>
<html lang="ru">
<head>
	<base href="../">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Демо: спасибо</title>

	<meta property="og:title" content="Демо: спасибо">
	<meta property="og:description" content="Статичная демонстрация для портфолио.">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<link rel="image_src" href="">
	<link rel="icon" href="img/common/favicon.ico" type="image/x-icon">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="page-thanks">
	<div class="wrapper">

	<section class="thanks">
    <div class="container">
        <div class="thanks__content">
            <h1 class="thanks__title">Спасибо (демо)</h1>
            <div class="thanks__desc">Заявки не отправляются: это статичная демонстрация для портфолио.</div>
            <a class="thanks__button button" href="index.php">На главную</a>
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
    <form class="form form_vertical" action="#" method="post">
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
                        <input name="email" type="email" placeholder="Почта" class="form__input form__email" required="" value="">
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
                            Нажимая на кнопку, я соглашаюсь с <a href="https://example.com/demo/privacy" target="_blank" rel="noopener noreferrer" class="form__more-link">политикой конфиденциальности</a> (заглушка)
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
