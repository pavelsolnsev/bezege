$(function () {
    initLazy();
    initFaq();
    initMore();
    initScrollHeader();
    initScroll();
    initMenu();
    initProgramsTabs();
    initBtnScroll();
    initCheckbox()
    initMaskTel();
    function initBtnScroll() {
        $(window).on('scroll', function () {
            if (window.scrollY > $('.main__wrapper').offset().top) {
                $('.fixed').addClass('show-button');
            } else {
                $('.fixed').removeClass('show-button');
            }
        });
    }

    function initMenu() {
        const body = document.querySelector('body');
        const hamburger = document.querySelector('#hamburger');
        const closeMobileMenu = document.querySelector('#close');
        const mobileMenu = document.querySelector('#menu-modal');
        const itemMenu = document.querySelectorAll('.header__link');
        function blockedScroll() {
            if (body.classList.contains('blocked-scroll')) {
                body.classList.remove('blocked-scroll');
            } else {
                body.classList.add('blocked-scroll');
            }
        }

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            blockedScroll();

        });

        closeMobileMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            blockedScroll();
        });

        itemMenu.forEach(item => {
            item.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                blockedScroll();
            })
        })
    }



    function initScrollHeader() {
        const header = $('.header');
        const scroll = $(window).scrollTop();
        if (scroll >= 20) {
            header.addClass('active');

        } else {
            header.removeClass('active');
        }
    }

    $(window).scroll(() => initScrollHeader())


    function initScroll() {
        if (!$('.scroll').length) return;

        $(document).on('click scroll.init', '.scroll', function (event) {
            event.preventDefault();
            $.fancybox.close();

            var
                hrefId = $(this).attr('href') || $(this).data('href'),
                posTop = $(hrefId).offset().top - $('.header').height() + 0.5
                ;
            $('html, body').animate({ scrollTop: posTop }, 1000);
        });
    }

    function initLazy() {

        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }

    function initFaq() {
        let faqs = $('.faq__acco-item')
        faqs.each(function (i, el) {
            let faq = $(el)
            let faqHeader = faq.find('.faq__acco-trigger')
            let faqContent = faq.find('.faq__acco-text')

            faqHeader.on('click', function () {
                if (faq.hasClass('open')) {
                    faqContent.slideUp()
                    faq.removeClass('open')
                } else {
                    faqContent.slideDown()
                    faq.addClass('open')
                }
            })
        })
    }

    function initMore() {
        var programList = $(".services__mob-box");
        var listSizeProgram = programList.children().length;

        if ($(window).width() <= '500') {
            var defaultSizeProgram = 4;
            console.log(defaultSizeProgram)
        } else {
            var defaultSizeProgram = 6;
        }
        programList.children().hide();
        programList.children().slice(0, defaultSizeProgram).fadeIn();
        $('.services__mob-more').click(function (event) {
            event.preventDefault();
            var programList = $(".services__mob-box");
            if ($(window).width() <= '500') {
                defaultSizeProgram = (defaultSizeProgram + 4 <= listSizeProgram) ? defaultSizeProgram + 4 : listSizeProgram;
            } else {
                defaultSizeProgram = (defaultSizeProgram + 6 <= listSizeProgram) ? defaultSizeProgram + 6 : listSizeProgram;
            }
            programList.children().slice(0, defaultSizeProgram).fadeIn();
            if (defaultSizeProgram == listSizeProgram) {
                $('.services__mob-more').hide();
            }
        });
    };

    let infoButton = document.querySelector('.services__info-button'),
        inputHidden = document.querySelector('.form__lidforma');
    infoButton.dataset.title = this.querySelector('.services__items-item-title').innerHTML.trim();
    infoButton.addEventListener('click', function () {
        inputHidden.value = infoButton.dataset.title
    })

    $('.services__info-button-mob').on('click', function () {
        inputHidden.value = $(this).data('title')
    })
    function initProgramsTabs() {
        let clickElem = document.querySelectorAll('.services__items-item'),
            infoName = document.querySelector('.services__info-title'),
            infoTxt = document.querySelector('.services__info-txt');

        for (let elem of clickElem) {
            elem.addEventListener('click', function () {
                let activeEl = document.querySelector('.active-program');
                activeEl.classList.remove('active-program');
                this.classList.add('active-program');
                infoName.innerHTML = this.querySelector('.services__items-item-title').innerHTML;
                infoTxt.innerHTML = this.querySelector('.services__items-item-txt').innerHTML;
                infoButton.dataset.title = this.querySelector('.services__items-item-title').innerHTML.trim();
            })
        }
    }

    /* Checkbox */
    function initCheckbox() {
        $('form').on('change', ':checkbox[name="personalDataAgree"]', function () {
            var $form = $(this).closest('form');
            var $checkbox = $form.find(':checkbox[name="personalDataAgree"]:checked');
            if ($checkbox.length) {
                $(':submit', $form).attr('disabled', 'disabled');
            } else {
                $(':submit', $form).removeAttr('disabled');
            }
        });
    }

    $("form").submit(function (e) {
        e.preventDefault();
        const $form = $(this).closest('form');
        let utms = '';
        let medium = '';
        let lidForm = $form.find('.form__lidforma').val();
        let myLidForm = ''
        if (lidForm) {
            myLidForm = lidForm.replace(/\s/g, '');
        }
        if (window.location.search.substring(1).includes('utm_source=')) {
            utms += 'utm_source=edunetwork_lp';
            const regex = /(^|\&)utm_medium=([\wа-яА-ЯёЁ\.\-]+)/g;
            if ((medium = regex.exec(window.location.search.substring(1))) !== null) {
                medium = (medium[2]);
            }
        } else {
            utms += 'utm_source=edunetwork_lp';
        }
        //utm_source=yandex_s&utm_medium=cpc&utm_campaign=58772729&utm_content=10191526677&utm_group=4441165174&utm_term=%D1%81%D0%B8%D0%BD%D0%B5%D1%80%D0%B3%D0%B8%D1%8F&site=none&marketer=edu&produkt=123456778&utm_gen=3&otdel=rsv&utm_keyword=brand

        // utms += '&utm_campaign=' + 'Лид пришел с сайта bezege.edunetwork.ru/&utm_content=' + `${lidForm}`
        utms += '&utm_campaign=' + 'Лид пришел с сайта bezege.edunetwork ' + `${myLidForm}`

        const submitText = $("button", $form).text();
        let a = true;
        $(".validate", $form).each(function () {
            if (!$(this).is(".valid")) {
                M.toast({ html: 'Не все поля заполнены корректно' });
                a = false;
                return false;
            }
        });
        if (a) {
            $("button", $form).attr("disabled", "disabled").html("Отправка");
            // console.log('Проверк клика')
            // console.log($form.find('.form__name').val());
            // console.log($form.find('.form__tel').val());
            let buf = document.cookie.match(/ednw=(.+?)(;|$)/);
            let ednw = '';
            if (buf != null && 1 in buf) {
                ednw = buf[1];
            }

            $.ajax({
                type: 'POST',
                url: '//mods.edunetwork.ru/ylead.php',
                data: {
                    name: $form.find('.form__name').val(),
                    email: $form.find('.form__email').val().trim(),
                    phone: $form.find('.form__tel').val(),
                    utms: utms,
                    ednw: ednw,
                },
                success: function (msg) {
                    switch (msg) {
                        case 'Ok':
                            $("button", $form).html('Готово!');
                            document.location.href = 'thanks/';
                            break;
                        case 'Err:Limit':
                            document.location.href = 'limit/';
                            break;
                        default:
                            $form.html('Заявка не отправлена. Некорректный ответ сервера. Если у вас активен блокировщик рекламы - отключите его временно или полностью для сайта edunetwork и повторите отправку формы/заявки.');
                            break;
                    }
                    // if (msg === 'Ok') {
                    //     // M.toast({html: 'Заявка успешно отправлена'});
                    //     $("button", $form).html('Готово!');
                    //     document.location.href = 'thanks/';
                    // } else {
                    //     $("button", $form).html(submitText).removeAttr("disabled");
                    //     if (msg.substr(0, 3) === 'Err') {
                    //         console.log({ html: msg });
                    //     } else {
                    //         console.log({ html: 'Заявка не отправлена. Некорректный ответ сервера. Если у вас активен блокировщик рекламы - отключите его временно или полностью для сайта edunetwork и повторите отправку формы/заявки.' });
                    //     }
                    // }
                },
                error: function () {
                    $("button", $form).html(submitText).removeAttr("disabled");
                    M.toast({ html: 'Ошибка сервера' });
                }
            });
        }
    });
    function initMaskTel() {
        [].forEach.call(document.querySelectorAll('.tel'), function (input) {
            var keyCode;
            function mask(event) {
                event.keyCode && (keyCode = event.keyCode);
                var pos = this.selectionStart;
                if (pos < 3) event.preventDefault();
                var matrix = "+7 (___) ___ ____",
                    i = 0,
                    def = matrix.replace(/\D/g, ""),
                    val = this.value.replace(/\D/g, ""),
                    new_value = matrix.replace(/[_\d]/g, function (a) {
                        return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                    });
                i = new_value.indexOf("_");
                if (i != -1) {
                    i < 5 && (i = 3);
                    new_value = new_value.slice(0, i)
                }
                var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                    function (a) {
                        return "\\d{1," + a.length + "}"
                    }).replace(/[+()]/g, "\\$&");
                reg = new RegExp("^" + reg + "$");
                if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
                if (event.type == "blur" && this.value.length < 5) this.value = ""
            }

            input.addEventListener("input", mask, false);
            input.addEventListener("focus", mask, false);
            input.addEventListener("blur", mask, false);
            input.addEventListener("keydown", mask, false)

        });

    }
});
