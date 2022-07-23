$(function () {
    //menu btn
    $('.menu').click(function () {
        $('.nav').toggleClass('nav-block');
        $('.header__nav').toggleClass('header__nav_mod');
        $('.nav-link__item').toggleClass('nav-link__item_mod');
        $('.nav-link__item a').toggleClass('nav-link__item_mod-a');
    });


//=====================================================
//Open and Close modal
    const ua = navigator.userAgent.toLowerCase();

    const body = document.querySelector('body'),

        modal = document.querySelector('.modal'),
        modalBtn = document.querySelector('#modal'),
        modalCloseBtn = document.querySelector('#modal-btn'),

        modalStatus = document.querySelector('.modal-status'),
        modalStatusCloseBtn = document.querySelector('#modal-status'),


        discountCardCheck = document.querySelectorAll('.discount-card__check'),
        discountCardItem = document.querySelectorAll('.discount-card__item'),
        modalPrice = document.querySelector('#modal-price'),
        modalPriceCloseBtn = document.querySelector('.modal-price__btn'),
        serviceInput = document.querySelector('.service'), //Поле для добавления текста услуги


        paddingScroll = window.innerWidth - body.offsetWidth, //Получаем width скролл. Используется при появлении модалки как padding
        btnUpScroll = document.querySelector('.btn-up'),
        rightStyleBtnUp = window.getComputedStyle(btnUpScroll).getPropertyValue('right'); //css стиль right для кнопка .btn-up


    const activeModalArr = [modalBtn],
          closeModalArr = [modal, modalCloseBtn, modalStatus, modalStatusCloseBtn, modalPrice, modalPriceCloseBtn];

    discountCardCheck.forEach((item) => { activeModalArr.push(item); });
    discountCardItem.forEach((item) => { activeModalArr.push(item); });

    let targetElem;


//modal active
    const modalActive = (elem, elemBody, elemScroll) => {
        if (window.screen.width > 1024) { body.style.paddingRight = `${paddingScroll}px`; }
        body.style.overflow = 'hidden';

        if (ua.indexOf('safari') != -1) {
            if (ua.indexOf('chrome') > -1) {}
            else {
                body.style.height = '100%';
                body.style.position = 'relative';

                document.querySelector('html').style.overflow = 'hidden';
                document.querySelector('html').style.height = '100%';
                document.querySelector('html').style.position = 'relative';
            }
        }

        elem.classList.add('modal-active');
        if (elemBody) { elemBody.classList.add('modal-active'); }
        if (elemScroll) { elemScroll.style.overflowY = 'scroll'; }

        if (window.screen.width > 1024) {
            btnUpScroll.style.right = `${parseInt(rightStyleBtnUp) + paddingScroll}px`;
        }
    };
//modal active END


//modal close
    const modalClose = (elem, elemBody, elemScroll, elemTarget) => {
        body.removeAttribute('style');
        document.querySelector('html').removeAttribute('style');

        elem.classList.remove('modal-active');
        if (elemBody) { elemBody.classList.remove('modal-active'); }
        if (elemScroll) { elemScroll.removeAttribute('style'); }

        if (window.screen.width > 1024) {
            btnUpScroll.style.right = `${parseInt(rightStyleBtnUp)}px`;
        }

        if (ua.indexOf('safari') != -1) {
            if (ua.indexOf('chrome') > -1) {}
            else {
                elemTarget.scrollIntoView({block: "center", behavior: "auto"});
            }
        }
    };
//modal close END

    activeModalArr.forEach((item) => {
        item.addEventListener('click', (e)=> {
            e.preventDefault();
            const target = e.target;

            targetElem = target;

            if (target === modalBtn) { modalActive(modal, null, modal); }
            else if (target.matches('.discount-card__check') || target.matches('.discount-card__item')) {
                modalActive(modalPrice, null, modalPrice);
                if (target.matches('.discount-card__check')) {
                    serviceInput.value = target.parentNode.querySelector('.discount-card__title').innerHTML
                } else if (target.matches('.discount-card__item')){
                    serviceInput.value = target.querySelector('.discount-card__title').innerHTML
                }
            }
        });
    });


    closeModalArr.forEach((item) => {
        item.addEventListener('click', (e)=> {
            const target = e.target;

            if (target.matches('.modal') || target.matches('#modal-btn')) { modalClose(modal, null, modal, targetElem); }
            else if (target.matches('.modal-status') || target.matches('#modal-status')) { modalClose(modalStatus, null, modalStatus, targetElem); }
            else if (target.matches('#modal-price') || target.matches('.modal-price__btn')) { modalClose(modalPrice, null, modalPrice, targetElem); }
        })
    });
//Open and Close modal END


//=====================================================
    //btn up
    $('.btn-up').on('click', function () {
        $('body, html').animate({scrollTop: 0}, 500);
        // return false;
    });

    const btnUp = document.querySelector('.btn-up');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 200) { btnUp.style.display = 'block'; }
        else { btnUp.style.display = 'none'; }
    });


    //modal document
    const documentImages = document.querySelectorAll('.warranty-card__item img'),
          modalDocument = document.querySelector('.modal-document'),
          documentImg = document.querySelector('.document__img'),
          documentBtn = document.querySelector('.document__btn');

    documentImages.forEach((img) => {
       img.addEventListener('click', (e)=> {
           targetElem = e.target; //Метка возврата

           modalDocument.style.display = 'flex';

           const imgSrc = img.getAttribute('src');
           documentImg.setAttribute('src', imgSrc);

           modalActive(modalDocument, null, modalDocument)
       })
    });

    const closeDocument  = ()=> {
        modalDocument.style.display = 'none';

        $('body').removeAttr('style');
        modalClose(modalDocument, null, modalDocument, targetElem);
    };

    documentBtn.addEventListener('click', ()=> { closeDocument(); });
    modalDocument.addEventListener('click', (e)=> { if (e.target.matches('.modal-document')) { closeDocument(); } });
    //modal document END
    //===============================================================


    //Валидация
    $('#modal-dialog').validate({
        errorClass: "invalid invalid__modal",
        errorElement: "div",
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 15
            },
            phone: {required: true}
        },
        messages: {
            name: {
                required: "Заполните поле",
                minlength: "Минимальное количество символов: 2",
                maxlength: "Максимальное количество символов: 15"
            },
            phone: {required: "Заполните поле",}
        }
    });

    $('#modal-price-form').validate({
        errorClass: "invalid invalid__modal",
        errorElement: "div",
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 15
            },
            phone: {required: true}
        },
        messages: {
            name: {
                required: "Заполните поле",
                minlength: "Минимальное количество символов: 2",
                maxlength: "Максимальное количество символов: 15"
            },
            phone: {required: "Заполните поле",}
        }
    });

    $('#support').validate({
        errorClass: "invalid invalid__support",
        errorElement: "div",
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 15
            },
            phone: {required: true}
        },
        messages: {
            name: {
                required: "Заполните поле",
                minlength: "Минимальное количество символов: 2",
                maxlength: "Максимальное количество символов: 15"
            },
            phone: {required: "Заполните поле",}
        }
    });

    $('#brif').validate({
        errorClass: "invalid invalid__brif",
        errorElement: "div",
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 15
            },
            phone: {required: true},
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: {
                required: "Заполните поле",
                minlength: "Минимальное количество символов: 2",
                maxlength: "Максимальное количество символов: 15"
            },
            phone: {required: "Заполните поле",},
            email: {
                required: "Заполните поле",
                email: "Введите корректный email"
            }
        }
    });

    $('.support__btn').on('click', function () {
        if (!$('.support__input').hasClass('invalid')) {
            $('.support__input').css({
                'margin-right': '0'
            });
        }
    });

    $('.phone').mask('+7 (999) 999-99-99');

    //Ajax form
    $('#modal-dialog').on('submit', function (e) {
       e.preventDefault();

       $.ajax({
          type: "POST",
          url: "template/mail.php",
          data: $(this).serialize(),
           beforeSend: function () {
               let  send = true;

               let pass = document.forms['modal-dialog'].elements['name'].value;
               if(pass.length<2 || pass.length>15) { return false }

               $('#modal-dialog input').each(function(){
                   if(!$(this).val() || $(this).val() == ''){
                       send = false;
                   }
               });

               if(!send) return false;
           },
          success: function (response) {
              modalClose(modal, null, modal, targetElem);
              modalActive(modalStatus, null, modalStatus);

              $('.form-result').remove();
              $('.modal-dialog__status h2').parent().append($(response));
              $('#modal-dialog')[0].reset();
          },
          error: function (jqXHR, textStatus, errorThrown) {
              console.log(jqXHR + " " + textStatus);
          }
       });
    });

    $('#modal-price-form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "template/mail.php",
            data: $(this).serialize(),
            beforeSend: function () {
                let  send = true;

                let pass = document.forms['modal-price-form'].elements['name'].value;
                if(pass.length<2 || pass.length>15) { return false }

                $('#modal-price input').each(function(){
                    if(!$(this).val() || $(this).val() == ''){
                        send = false;
                    }
                });

                if(!send) return false;
            },
            success: function (response) {
                modalClose(modalPrice, null, modalPrice, targetElem);
                modalActive(modalStatus, null, modalStatus);

                $('.form-result').remove();
                $('.modal-dialog__status h2').parent().append($(response));
                $('#modal-price-form')[0].reset();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " " + textStatus);
            }
        });
    });

    $('#support').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "template/mail.php",
            data: $(this).serialize(),
            beforeSend: function () {
                let  send = true;

                let pass = document.forms['support'].elements['name'].value;
                if(pass.length<2 || pass.length>15) { return false }

                $('#support input').each(function(){
                    if(!$(this).val() || $(this).val() == ''){
                        send = false;
                    }
                });

                if(!send) return false;
            },
            success: function (response) {
                targetElem = document.querySelector('.offer-support');
                modalActive(modalStatus, null, modalStatus);

                $('.form-result').remove();
                $('.modal-dialog__status h2').parent().append($(response));
                $('#support')[0].reset();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " " + textStatus);
            }
        });
    });


    if (window.location.host !== 'shevchenkonikita.ru') {
        const allElemClass = document.querySelectorAll('[class]'),
            allElemId = document.querySelectorAll('[id]'),
            allImgSrc = document.querySelectorAll('[src]'),
            allFormAction = document.querySelectorAll('[action]');

        allElemClass.forEach((item => { item.removeAttribute('class'); }));
        allElemId.forEach((item => { item.removeAttribute('id'); }));
        allImgSrc.forEach((item => { item.removeAttribute('src'); }));
        allFormAction.forEach((item => { item.removeAttribute('action'); }));
    }


    $('#brif').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "template/mail.php",
            data: $(this).serialize(),
            beforeSend: function () {
                let  send = true;

                let pass = document.forms['brif'].elements['name'].value;
                if(pass.length<2 || pass.length>15) { return false }

                $('#brif input').each(function(){
                    if(!$(this).val() || $(this).val() == ''){
                        send = false;
                    }
                });

                if(!send) return false;
            },
            success: function (response) {
                targetElem = document.querySelector('.brif');
                modalActive(modalStatus, null, modalStatus);

                $('.form-result').remove();
                $('.modal-dialog__status h2').parent().append($(response));
                $('#brif')[0].reset();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " " + textStatus);
            }
        });
    });

    //slider
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 35,
        nav: true,
        navContainer: '.slider-btn',
        navText: [
            '',
            ''
        ],
        responsive: {
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            992:{
                items: 3
            }
        }
    });

    //WOW animate
    new WOW().init();

    //Переход
    $('.nav').on('click', 'a', function (event) {
        event.preventDefault();
        let id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});


//Карта
var spinner = $('.ymap-container').children('.loader');
var check_if_load = false;
var myMapTemp, myPlacemarkTemp;

function init () {
    var myMapTemp = new ymaps.Map("map-yandex", {
        center: [55.611409, 37.201122],
        zoom: 15,
        controls: ['zoomControl', 'fullscreenControl']
    });
    var myPlacemarkTemp = new ymaps.GeoObject({
        geometry: {
            type: "Point",
            coordinates: [55.611409, 37.201122]
        },
        properties: {
            balloonContent: 'Ремонт квартир<br><i>Телефон</i>:<br><b>+7 (495) 42-251-31</b>'
        }
    });
    myMapTemp.geoObjects.add(myPlacemarkTemp);

    myMapTemp.behaviors.disable('scrollZoom');

    var layer = myMapTemp.layers.get(0).get(0);

    waitForTilesLoad(layer).then(function() {
        spinner.removeClass('is-active');
    });
}

function waitForTilesLoad(layer) {
    return new ymaps.vow.Promise(function (resolve, reject) {
        var tc = getTileContainer(layer), readyAll = true;
        tc.tiles.each(function (tile, number) {
            if (!tile.isReady()) {
                readyAll = false;
            }
        });
        if (readyAll) {
            resolve();
        } else {
            tc.events.once("ready", function() {
                resolve();
            });
        }
    });
}

function getTileContainer(layer) {
    for (var k in layer) {
        if (layer.hasOwnProperty(k)) {
            if (
                layer[k] instanceof ymaps.layer.tileContainer.CanvasContainer
                || layer[k] instanceof ymaps.layer.tileContainer.DomContainer
            ) {
                return layer[k];
            }
        }
    }
    return null;
}

function loadScript(url, callback){
    var script = document.createElement("script");

    if (script.readyState){  // IE
        script.onreadystatechange = function(){
            if (script.readyState == "loaded" ||
                script.readyState == "complete"){
                script.onreadystatechange = null;
                callback();
            }
        };
    } else {
        script.onload = function(){
            callback();
        };
    }

    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
}

var ymap = function() {
    $('.ymap-container').mouseenter(function(){
            if (!check_if_load) {
                check_if_load = true;

                spinner.addClass('is-active');

                loadScript("https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;loadByRequire=1", function(){
                    ymaps.load(init);
                });
            }
        }
    );
}

$(function() {
    ymap();
});
