<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Ремонт квартир</title>
    <link rel="stylesheet" href="css/main.min.css">
</head>
<body>

    <?php include('template/header.php'); ?>

    <section class="description">
        <div class="container">
            <div class="description-wrapper d-flex">
                <div class="offer description__offer wow fadeInLeft">
                    <h1 class="offer__title">Внутренняя отделка помещений "под&nbsp;ключ"</h1>
                    <p class="offer__text">с гарантией качества, прописанной в&nbsp;договоре</p>
                    <ul class="offer-list">
                        <li class="offer-list__item">
                            <div class="offer-list__clock d-flex">Точно соблюдаем сроки</div>
                        </li>
                        <li class="offer-list__item">
                            <div class="offer-list__calculate d-flex">Рассчитаем смету на работы и&nbsp;материалы в день обращения</div>
                        </li>
                        <li class="offer-list__item">
                            <div class="offer-list__paint d-flex">Предложим более 100 вариантов исполнения&nbsp;дизайна Вашего жилья</div>
                        </li>
                    </ul>
                </div>
                <img class="description-image description__img wow fadeInRight" src="img/room.png" alt="Комната">
            </div>
        </div>
    </section>

    <section class="offer-support" id="section-support">
        <div class="container d-flex">
            <div class="support offer__support">
                <h2 class="support__title">Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!</h2>
                <p class="support__text">Оставьте заявку на разработку бесплатного&nbsp;дизайн&nbsp;-&nbsp;проекта!</p>
                <form action="template/mail.php" method="post" class="form support__form" id="support">
                    <div class="wrap d-flex">
                        <div class="input-wrapper__support"><input type="text" name="name" class="input support__input" placeholder="Ваше имя"></div>
                        <div class="input-wrapper__support"><input type="tel" name="phone" class="input support__input phone" placeholder="Ваш телефон"></div>
                    </div>
                    <button class="btn support__btn">Получить бесплатный дизайн&nbsp;-&nbsp;проект</button>
                </form>
                <div class="info support__info d-flex">
                    <p class="info__time">Наш менеджер перезвонит Вам в&nbsp;течение 60&nbsp;секунд</p>
                    <p class="info__phone d-flex">или перезвоните нам сами <a href="tel:+7(495)42-251-31">+7 (495) 42-251-31</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            <div class="portfolio-wrapper d-flex">
                <h2 class="portfolio__title wow fadeInLeft">Работая с 2007 года,<br>мы сделали более 500 ремонтов в квартирах и домах</h2>
                <div class="owl-carousel slider__owl wow fadeInRight">
                    <div class="slider__item"><img class="slider__image" src="img/slider/slider-1.png" alt="IMG"></div>
                    <div class="slider__item"><img class="slider__image" src="img/slider/slider-2.png" alt="IMG"></div>
                    <div class="slider__item"><img class="slider__image" src="img/slider/slider-3.png" alt="IMG"></div>
                    <div class="slider__item"><img class="slider__image" src="img/slider/slider-1.png" alt="IMG"></div>
                    <div class="slider__item"><img class="slider__image" src="img/slider/slider-2.png" alt="IMG"></div>
                    <div class="slider__item"><img class="slider__image" src="img/slider/slider-3.png" alt="IMG"></div>
                </div>
                <div class="slider-btn btn__slider d-flex"></div>
            </div>
        </div>
    </section>

    <section class="price" id="section-price">
        <div class="container">
            <div class="discount">
                <h2 class="discount__title">У нас очень гибкая система скидок на комплексные работы!</h2>
                <p class="discount__text">Прайс на наши услуги</p>
                <div class="discount-card price__card d-flex">
                    <div class="discount-card__item wow fadeInUp">
                        <div class="discount-card__img"><img src="img/price/price-img-1.png" alt="IMG"></div>
                        <p class="discount-card__title">Ремонт ванных комнат и с/у</p>
                        <a class="discount-card__check" href="#">Узнать цены</a>
                    </div>
                    <div class="discount-card__item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="discount-card__img"><img src="img/price/price-img-2.png" alt="IMG"></div>
                        <p class="discount-card__title">Ремонт комнат и квартир</p>
                        <a class="discount-card__check" href="#">Узнать цены</a>
                    </div>
                    <div class="discount-card__item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="discount-card__img"><img src="img/price/price-img-3.png" alt="IMG"></div>
                        <p class="discount-card__title">Отделка офисных помещений</p>
                        <a class="discount-card__check" href="#">Узнать цены</a>
                    </div>
                    <div class="discount-card__item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="discount-card__img"><img src="img/price/price-img-4.png" alt="IMG"></div>
                        <p class="discount-card__title">Ремонт в новостройках</p>
                        <a class="discount-card__check" href="#">Узнать цены</a>
                    </div>
                    <div class="discount-card__item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="discount-card__img"><img src="img/price/price-img-5.png" alt="IMG"></div>
                        <p class="discount-card__title">Ремонт кухонь</p>
                        <a class="discount-card__check" href="#">Узнать цены</a>
                    </div>
                    <div class="discount-card__item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="discount-card__img"><img src="img/price/price-img-6.png" alt="IMG"></div>
                        <p class="discount-card__title">Ремонт дач и коттеджей</p>
                        <a class="discount-card__check" href="#">Узнать цены</a>
                    </div>
                </div>
            </div>


            <div class="steps">
                <h2 class="steps__title wow fadeInRight" data-wow-delay="0.1s">Наши специалисты готовы выехать на замер в любое удобное для Вас время</h2>
                <p class="steps__text">5 шагов до ремонта</p>
                <div class="step-wrapper d-flex">
                    <div class="step-work price__work d-flex wow rotateInDownRight">
                        <div class="step-work__item d-flex">
                            <img class="step-work__img" src="img/price/step-call.png" alt="IMG">
                            <p class="step-work__title">Вы звоните нам или&nbsp;оставляете заявку</p>
                        </div>
                        <div class="step-work__item d-flex">
                            <img class="step-work__img" src="img/price/step-clock.png" alt="IMG">
                            <p class="step-work__title">Согласуем удобное для Вас время выезда специалиста на замер</p>
                        </div>
                        <div class="step-work__item d-flex">
                            <img class="step-work__img" src="img/price/step-money.png" alt="IMG">
                            <p class="step-work__title">Рассчитываем смету согласовываем с&nbsp;Вами</p>
                        </div>
                        <div class="step-work__item d-flex">
                            <img class="step-work__img" src="img/price/step-list.png" alt="IMG">
                            <p class="step-work__title">Подписываем договор закупаем материал по&nbsp;оптовым ценам</p>
                        </div>
                        <div class="step-work__item d-flex">
                            <img class="step-work__img" src="img/price/step-calendar.png" alt="IMG">
                            <p class="step-work__title">Выполняем ремонт в&nbsp;указанные сроки</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="line-section">
        <div class="container">
            <h2 class="line-section__title">Ремонт обойдется Вам дешевле, так&nbsp;как<br>мы используем качественные материалы по оптовым ценам</h2>
        </div>
    </section>

    <section class="advantage" id="section-advantage">
        <div class="container">
            <div class="help advantage__help d-flex">
                <div class="help__card wow fadeInUp">
                    <p class="help__title">Поможем закупить все материалы по оптовым ценам у проверенных поставщиков</p>
                    <div class="help__img"><img src="img/help/help-price.png" alt="IMG"></div>
                </div>
                <div class="help__card wow fadeInUp" data-wow-delay="0.1s">
                    <p class="help__title">Мы дадим Вам <span>максимальные скидки</span> у наших партнеров для закупки материалов оптом</p>
                    <div class="help__img"><img src="img/help/help-discount.png" alt="IMG"></div>
                </div>
                <div class="help__card wow fadeInUp" data-wow-delay="0.2s">
                    <p class="help__title">Все, что не сможете найти в городе - поможем заказать <span>у проверенных поставщиков</span></p>
                    <div class="help__img"><img src="img/help/help-work.png" alt="IMG"></div>
                </div>
            </div>

            <h2 class="advantage__title">Все наши гарантийные обязательства<br> подробно и прозрачно описаны в&nbsp;договоре</h2>
            <div class="warranty-card advantage__warranty-card d-flex wow fadeInUp">
                <div class="warranty-card__item d-flex">
                    <img src="img/help/warranty-1.png" alt="IMG">
                    <p class="warranty-card__text">Гарантия на качество выполняемых работ</p>
                </div>
                <div class="warranty-card__item d-flex wow fadeInUp" data-wow-delay="0.1s">
                    <img src="img/help/warranty-2.png" alt="IMG">
                    <p class="warranty-card__text">Гарантия на фиксированные цены Виды работ и цены на них прописаны в договоре</p>
                </div>
                <div class="warranty-card__item d-flex wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/help/warranty-3.png" alt="IMG">
                    <p class="warranty-card__text">Гарантия на точное соблюдение сроков и ответственность за их&nbsp;невыполнение</p>
                </div>
            </div>
        </div>
    </section>

    <section class="brif" id="section-brif">
        <div class="container">
            <div class="brif-block section__brif d-flex">
                <div class="interview brif__interview">
                    <h2 class="interview__title">Мы можем озвучить Вам примерную стоимость работы и материалов по телефону</h2>
                    <p class="interview__text">Для этого нужно ответить на 4&nbsp;вопроса:</p>
                    <ul class="interview-list">
                        <li class="interview-list__item d-flex">
                            <span class="interview-list__counter">1.</span>
                            <span class="interview-list__text">Какова площадь помещения?</span>
                        </li>
                        <li class="interview-list__item d-flex">
                            <span class="interview-list__counter">2.</span>
                            <span class="interview-list__text">У Вас новостройка или вторичное жилье?</span>
                        </li>
                        <li class="interview-list__item d-flex">
                            <span class="interview-list__counter">3.</span>
                            <span class="interview-list__text">Где находится помещение, в котором будет производиться ремонт?</span>
                        </li>
                        <li class="interview-list__item d-flex">
                            <span class="interview-list__counter">4.</span>
                            <span class="interview-list__text">Назначение помещения?</span>
                        </li>
                    </ul>
                </div>

                <div class="form brif__form">
                    <h2 class="form__title">Оставьте заявку на бесплатный расчет ремонта по телефону</h2>
                    <p class="form__text">Для этого заполните форму ниже</p>
                    <form action="template/mail.php" method="post" id="brif">
                        <div class="input-wrapper__brif"><input type="text" name="name" class="input brif__input" placeholder="Ваше имя"></div>
                        <div class="input-wrapper__brif"><input type="tel" name="phone" class="input brif__input phone" placeholder="Ваш телефон"></div>
                        <button class="btn brif__btn">Рассчитать стоимость</button>
                    </form>
                    <p class="form__description">Мы перезвоним Вам в течение 60 секунд</p>
                </div>
            </div>
        </div>
    </section>

    <?php include('template/footer.php'); ?>

    <div class="modal d-flex">
        <div class="modal-dialog d-flex">
            <button class="modal-dialog__btn" id="modal-btn">&#10008;</button>
            <h2 class="modal-dialog__title">Узнайте точную стоимость ремонта по телефону!</h2>
            <p class="modal-dialog__text">Заполните поля ниже - мы свяжемся с Вами</p>

            <form action="template/mail.php" method="post" class="form modal-dialog__form" id="modal-dialog">
                <div class="input-wrapper"><input type="text" name="name" class="input modal-dialog__input" placeholder="Ваше имя"></div>
                <div class="input-wrapper"><input type="tel" name="phone" class="input modal-dialog__input phone" placeholder="Ваш телефон"></div>
                <button class="btn modal-dialog_btn">Узнать стоимость</button>
            </form>

            <p class="modal-dialog__info">Или Вы можете перезвонить нам сами по телефону:</p>
            <a class="modal-dialog-info__phone" href="tel:+7(8182)42-51-31">+7 (8182) 42-51-31</a>
        </div>
    </div>

    <div class="modal-status d-flex">
        <div class="modal-dialog__status d-flex">
            <button class="modal-dialog__btn" id="modal-status">&#10008;</button>
            <img class="modal-dialog__mail" src="img/icon/email.svg" alt="mail">
            <h2 class="modal-dialog__title">Спасибо за вашу заявку!</h2>
        </div>
    </div>

    <div class="modal-document d-flex">
        <div class="document modal-document__document">
            <button class="btn document__btn">&#10008;</button>
            <img class="document__img" src="#" alt="Документ">
        </div>
    </div>

    <div class="price-modal d-flex" id="modal-price">
        <div class="modal-price d-flex">
            <button class="modal-price__btn">&#10008;</button>
            <h2 class="modal-price__title">Узнайте точную стоимость ремонта по телефону!</h2>
            <p class="modal-price__text">Заполните поля ниже - мы свяжемся с Вами</p>

            <form action="template/mail.php" method="post" class="form modal-price__form" id="modal-price-form">
                <div class="input-wrapper"><input type="text" name="name" class="input modal-price__input" placeholder="Ваше имя"></div>
                <div class="input-wrapper"><input type="tel" name="phone" class="input modal-price__input phone" placeholder="Ваш телефон"></div>
                <div class="input-wrapper"><input type="text" name="service" class="input modal-price__input service" value="" readonly></div>

                <button class="btn modal-price_btn">Узнать стоимость</button>
            </form>

            <p class="modal-price__info">Или Вы можете перезвонить нам сами по телефону:</p>
            <a class="modal-price-info__phone" href="tel:+7(8182)42-51-31">+7 (8182) 42-51-31</a>
        </div>
    </div>


    <button class="btn-up"><img src="img/icon/up-chevron.svg" alt="UP"></button>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/main.min.js"></script>
</body>
</html>