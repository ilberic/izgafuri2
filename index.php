<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <title>IZGAFURI</title>
</head>
<body>
    <header id="head" class="">
        <nav>
            <div class="container">
                <ul class="nav__menu">
                    <li class="nav__item"><a href="#adv" class="scrollLink">О нас</a></li>
                    <li class="nav__item"><a href="#skill" class="scrollLink">Услуги</a></li>
                    <li class="nav__item"><img src="icons/logo.svg" alt="" class="nav__logo"></li>
                    <li class="nav__item"><a href="#port" class="scrollLink">Портфолио</a></li>
                    <li class="nav__item"><a href="#cont" class="scrollLink">Контакты</a></li>
                </ul>
            </div>
        </nav>
        <a href="#head" class="scrollLink" id="anchor"></a>
        <div class="container">
            <div class="promo">
                <h1 class="title">Архитектурная и интерьерная 3D визуализация:</h1>
                <p class="promo__descr">Предлагаем услуги по компьютерной графике.<br><br> Вы недавно купили квартиру или дом, и теперь вам нужно красивое оформление и функциональное обустройство?<br><br> Вы хотите уникальную дизайнерскую мебель из хороших материалов?<br><br> Может вам нужно рекламное видео, ролик для презентации вашего товара, услуги или жилого комплекса?<br><br> Или же вы хотите построить дом и предварительно выбрав материалы, цвета, фасады, посмотреть каким он будет?<br><br> <span>Тогда вы обратились по адресу.</span></p>
                <button class="btn">Оставить заявку</button>
            </div>
        </div>
        <div class="shad"></div>
        <form class="contact-form" id="contact-form_1" method="POST" enctype="multipart/form-data">
            <div class="close"></div>
            <p class="contact-form__title">Оставьте заявку на расчет времени и стоимости</p>
            <p class="contact-form__description"></p>
            <div class="contact-form__input-wrapper">
              <input name="name" type="text" class="contact-form__input contact-form__input_name" placeholder="Введите ваше имя">
              <div class="contact-form__error contact-form__error_name"></div>
            </div>
                       
            <div class="contact-form__input-wrapper">
              <input name="tel" type="tel" class="contact-form__input contact-form__input_tel" placeholder="Введите ваш телефон">
              <div class="contact-form__error contact-form__error_tel"></div>
            </div>
           
            <div class="contact-form__input-wrapper"> 
               <input name="email" type="email" class="contact-form__input contact-form__input_email" placeholder="Введите ваш email">
               <div class="contact-form__error contact-form__error_email"></div>
            </div>
           
            <button class="contact-form__button" type="submit"> Оставить заявку </button>
        </form>
    </header>

    <section class="advantages" id="adv">
        <div class="container">
            <div class="title title_left" >
                Преимущества работы с <br> нами:
            </div>
            <div class="advantages__wrapper">
                <div class="advantages__wrapper_item">
                    <img src="icons/advantages_icons/punctuality.svg" alt="clock">
                    <div class="advantages__text">
                        <div class="title title_sub">Пунктуальность</div>
                        <div class="advantages__descr">Благодаря многолетнему опыту мы всегда разумно<br> оцениваем время выполнения работы. Вы всегда<br> получаете результат точно в срок.</div>
                    </div>
                </div>
                <div class="advantages__wrapper_item">
                    <img src="icons/advantages_icons/success.svg" alt="success">
                    <div class="advantages__text">
                        <div class="title title_sub">Фиксированная цена</div>
                        <div class="advantages__descr">Вы всегда знаете, за что платите, а мы никогда не меняем<br> цену в процессе работы. У нас нет никаких скрытых и<br> «дополнительных» платежей.</div>
                    </div>
                </div>
                <div class="advantages__wrapper_item">
                    <img src="icons/advantages_icons/price.svg" alt="price">
                    <div class="advantages__text">
                        <div class="title title_sub">Качество</div>
                        <div class="advantages__descr">Мы не делим проекты на категории по качеству. Вы<br> всегда получаете лучшее.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <img src="img/sculpture.png" alt="sculpture" class="advantages__img">
    </section>

    <section class="skills" id="skill">
        <div class="container">
            <div class="title title_black">Мы - молодая амбициозная команда</div>
            <div class="skills__subtitle">
                Мы работаем с 2013 года, нами выполнено более 500 проектов. Мы гордимся своей работой. Сотрудничаем со многими архитекторами, строительными и девелоперскими компаниями, а так же рекламными агентствами по всей стране. Почти все наши заказчики стали нашими постоянными клиентами, а некоторые  даже друзьями. Мы можем:
            </div>
            <div class="skills__wrapper">
                <div class="skills__wrapper_item"><img src="icons/service_icons/sofa.svg" alt="sofa"><span class="skills__descr">Создавать<br> дизайны<br> интерьеров</span></div>
                <div class="skills__wrapper_item"><img src="icons/service_icons/house.svg" alt="house"><span class="skills__descr">3D<br> визуализацию<br> архитектуры</span></div>
                <div class="skills__wrapper_item"><img src="icons/service_icons/desk.svg" alt="desk"><span class="skills__descr">3D визуализацию <br>мебели</span></div>
                <div class="skills__wrapper_item"><img src="icons/service_icons/sculpt.svg" alt="sculpt"><span class="skills__descr">3D моделирование и <br>скульптинг</span></div>
            </div>
            
        </div>
    </section>

    <section class="portfolio " id="port">
        <div class="container">
            <div class="title title_black">ПОРТФОЛИО РАБОТ:</div>
            <div class="portfolio__wrapper">
                <a href="#slwrp" class="portfolio__wrapper_item"></a>
                <a href="#slwrp" class="portfolio__wrapper_item"></a>
                <a href="#slwrp" class="portfolio__wrapper_item"></a>
                <a href="#slwrp" class="portfolio__wrapper_item"></a>
            </div>
                </div>
    </section>
    <hr id="slwrp">
    <section class="slider__wrapper">
        <div class="container">
            <div class="slider tabContent  show">
                <div class="slider__screen">
                    <div class="slider__img  show">
                        <div class="slider__img_text"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                    <div class="slider__img hide">
                        <div class="slider__img_text"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                    <div class="slider__img hide">
                        <div class="slider__img_text"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                </div>
                <img src="icons/arrow_left.png" class="prev"  alt="arrow_left">
                <img src="icons/arrow_right.png" class="next" alt="arrow_right">  
            </div>
            <div class="slider2 tabContent  hide">
                <div class="slider2__screen2">
                    <div class="slider2__img2 show">
                        <div class="slider2__img2_text2"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                    <div class="slider2__img2 hide">
                        <div class="slider2__img2_text2"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                    <div class="slider2__img2 hide">
                        <div class="slider2__img2_text2"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                </div>
                <img src="icons/arrow_left.png" class="prev2"  alt="arrow_left">
                <img src="icons/arrow_right.png" class="next2" alt="arrow_right">  
            </div>
            <div class="slider3 tabContent  hide">
                <div class="slider3__screen3">
                    <div class="slider3__img3 show">
                        <div class="slider3__img3_text3"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                    <div class="slider3__img3 hide">
                        <div class="slider3__img3_text3"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                    <div class="slider3__img3 hide">
                        <div class="slider3__img3_text3"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                </div>
                <img src="icons/arrow_left.png" class="prev3"  alt="arrow_left">
                <img src="icons/arrow_right.png" class="next3" alt="arrow_right">  
            </div>
            <div class="slider4 tabContent  hide">
                <div class="slider4__screen4">
                    <div class="slider4__img4 show">
                        <div class="slider4__img4_text4"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                    <div class="slider4__img4 hide">
                        <div class="slider4__img4_text4"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                    <div class="slider4__img4 hide">
                        <div class="slider4__img4_text4"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione sapiente voluptatum excepturi debitis quisquam eaque corporis porro nostrum autem hic aut eveniet atque modi, sequi, molestias tempora ipsum? Esse, in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae obcaecati sed dolorum architecto amet. Voluptates incidunt cupiditate explicabo numquam earum voluptas odio placeat quia, obcaecati ipsum provident nam! Sequi, non?</span></div>
                    </div>
                </div>
                <img src="icons/arrow_left.png" class="prev4"  alt="arrow_left">
                <img src="icons/arrow_right.png" class="next4"  alt="arrow_right"">  
            </div>
        </div>
    </section>

    <footer class="footer" id="cont">
       <div class="container">
            <div class="title title_black" >НАШИ КОНТАКТЫ:</div>
            <div class="contact__wrapper">
                <a href="tel:89874925921" class="contact__wrapper_item">
                    <img src="icons/phone.svg" alt="phone">
                    <span>+89874925921</span>
                </a>
                <a href="mailto:clsdlsdldl@glalslas.ru" class="contact__wrapper_item">
                    <img src="icons/mail.svg" alt="phone">
                    <span>clsdlsdldl@glalslas.ru</span>
                </a>
            </div>
            <script charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6f487c3d1a375528ca428ebbf4e8d625423009b43e855579db4d9f58fc9ef3a1&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
            <div class="footer__wrapper">
                <div class="footer__wrapper_item">by Belyaev Vadim</div>
                <div class="footer__wrapper_item">IZGAFURI</div>
                <div class="footer__wrapper_item">2020</div>
            </div>
       </div>
    </footer>
    <script src="js/jQuery.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="mail/js/mail.js"></script>
    <script src="js/script.js"></script>
</body>
</html>