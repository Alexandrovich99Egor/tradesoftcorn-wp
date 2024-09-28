<?php
/**
 * Template Name: Home page
 */
get_header();
if (!defined("ABSPATH")) {
    exit;
}

?>
<section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="detail-box">
                                <h1>
                                    Зерно.Порядність. <br> Довіра
                                </h1>
                                <div class="btn-box">
                                    <a href="#sect-contacts" class="btn1">
                                        Наші контакти
                                    </a>
                                    <a href="#sect-about" class="btn2">
                                        Про нас
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="detail-box">
                                <h1>
                                    ТОВ <br> "ТРЕЙДСОФТКОРН"
                                </h1>
                                <div class="btn-box">
                                    <a href="#sect-contacts" class="btn1">
                                        Наші контакти
                                    </a>
                                    <a href="#sect-about" class="btn2">
                                        Про нас
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
        </ol>
    </div>

</section>
</div>
<section id="sect-about" class="about_section">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6">
                <div id="1" class="detail-box">
                    <div class="heading_container">
                        <h2>
                            Про нас
                        </h2>
                    </div>
                    <p>
                        На ринку з 2014 року. Основний вид діяльності: оптова торгівля зерновими. Також надаємо послуги
                        перевезень
                        зернових по
                        Україні автомобільним транспортом та усі види елеваторних послуг у Полтавській області.
                    </p>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri() . '/images' . '/photo_2023-10-09_14-25-29.jpg'; ?>"
                        alt="">
                </div>
            </div>

        </div>
    </div>
</section>


<section class="labora">

</section>




<section id="sect-elevator" class="project_section layout_padding">
    <div class="container">
        <h2 class="title__elevator">Послуги елеватору</h2>
        <div class="carousel-wrap ">
            <div class="filter_box">
                <nav class="owl-filter-bar">
                    <a href="#" class="item active" data-owl-filter="*">Всі послуги елеватору</a>
                    <a href="#" class="item" data-owl-filter=".painting">Сушіння зерна</a>
                    <a href="#" class="item" data-owl-filter=".reconstruction">Очистка зерна </a>
                    <a href="#" class="item" data-owl-filter=".repair">Зберігання зерна </a>
                    <a href="#" class="item" data-owl-filter=".residential">Відвантаження на автотранспорт </a>
                    <a href="#" class="item" data-owl-filter=".styling">Відвантаження на залізничний транспорт </a>
                </nav>
            </div>

            <div class="owl-carousel project_carousel">
                <div class="item painting">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo get_template_directory_uri() . '/images'; ?>/kukurudza-zerno-4974169445454-29143.jpg"
                                alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>
                                Сушіння зерна
                            </h5>
                            <p>
                                25-15 % - 100 т/год. Сушарка Brice-Baker SCN-16/72 (ПрАТ «Карлівський машинобудівний
                                завод»). Сушарний
                                агент – пелети
                                соняшникові. Генератори 2*7 мВт ( ТОВ «Греко Трейд»)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item reconstruction">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?= get_template_directory_uri() . '/images'; ?>/latifundist-com-ochistka-zerna-88187.jpg"
                                alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>
                                Очистка зерна
                            </h5>
                            <p>
                                Попередня очистка зерна – ЛУЧ ЗСО 200 ( ТОВ «ОЛІС»)
                                Основна очистка – БСХ – 500 ( ПрАТ «Хорольський механічний завод»)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item repair">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo get_template_directory_uri() . '/images'; ?>/yaya-16466.jpg" alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>
                                Зберігання зерна
                            </h5>
                            <p>
                                Силос МСВУ 220.15.В12 (ПП «Лубнимаш») - 2 шт. по 6 тис . кожен ( по кукурудзі)
                                Силос оперативний - СМВУ.110.09.К45.В12.А (ПрАТ «Карлівський машинобудівний завод») – 3
                                шт., 1 т т
                                кожен.
                                Всього зберігання – 15 тис т .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item residential">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?= get_template_directory_uri() . '/images'; ?>/original (1).jpg" alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>
                                Відвантаження на автотранспорт
                            </h5>
                            <p>
                                250 т/год. Бункер відвантаження на 60т. (ПрАТ «Карлівський машинобудівний завод»)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item styling">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?= get_template_directory_uri() . '/images/photo_2023-10-16_12-35-46 (2).jpg'; ?>"
                                alt="" />

                        </div>
                        <div class="detail-box">
                            <h5>
                                Відвантаження на залізничний транспорт
                            </h5>
                            <p>
                                – 250т/год. (ПрАТ «Карлівський машинобудівний завод»)
                                Бункер відвантаження зерна на залізничний транспорт – 350 т( ТОВ ЗЕО СОКОЛ).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section tabs">
    <div class="container">
        <h2 class="tabs__title">Ціни</h2>
        <h5 class="tabs__title-price">
            Ціна за 1 тонну/грн
        </h5>
        <div class="tabs__scroll-wrapper">
            <table class="tabs__content col-lg-12 col-sm-12 col-md-12">
                <thead>
                    <tr class="tabs__servises">
                        <th class="col-12 custom-col-1">Послуги</th>
                        <th class="col-12 custom-col-1">Од.Виміру</th>
                        <th class="col-12 custom-col-1">Пшениця</th>
                        <th class="col-12 custom-col-1">Соняшник</th>
                        <th class="col-12 custom-col-1">Кукурудза</th>
                        <th class="col-12 custom-col-1">Соя</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $wheat = get_field('wheat', 'option');
                    $sunflower = get_field('sunflower', 'option');
                    $corn = get_field('corn', 'option');
                    $bean = get_field('bean', 'option'); ?>
                    <tr>
                        <td class="tabs-text-bold">Закупівельні ціни</td>
                        <td class="tabs-text-bold">за 1 тонну/грн з ПДВ</td>
                        <td class="tabs-text-bold"><?php echo $wheat; ?>
                        </td>
                        <td class="tabs-text-bold"><?php echo $sunflower; ?></td>
                        <td class="tabs-text-bold"><?php echo $corn; ?></td>
                        <td class="tabs-text-bold"><?php echo $bean; ?></td>
                    </tr>
                    <tr>
                        <td>Сушіння зерна,т%</td>
                        <td>за 1 тонну/день</td>
                        <td>150</td>
                        <td>150</td>
                        <td>150</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>Очистка зерна,т%</td>
                        <td>за 1 тонну/день</td>
                        <td>30</td>
                        <td>45</td>
                        <td>30</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Відвантаження на автотранспорт</td>
                        <td>за 1 тонну/день</td>
                        <td>150</td>
                        <td>150</td>
                        <td>150</td>
                        <td>150</td>

                    </tr>
                    <tr>
                        <td>Відвантаження на залізничний транспорт</td>
                        <td>за 1 тонну/день</td>
                        <td>150</td>
                        <td>200</td>
                        <td>150</td>
                        <td>150</td>

                    </tr>
                    <tr>
                        <td>Зберігання зерна</td>
                        <td>за 1 тонну/день</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>

                    </tr>
                    <tr>
                        <td>Переоформлення</td>
                        <td>одна послуга</td>
                        <td>100</td>
                        <td>100</td>
                        <td>100</td>
                        <td>100</td>
                    </tr>
                </tbody>
            </table>
            <div class="scroll-bar-tabs"></div>
        </div>
    </div>
</section>

<section class="calculator">
    <div class="container">
        <h2 class="calculator__title">Калькулятор знижок</h2>
        <form class="form" action="">
            <label class="col-12" for="slc1">
                <p>Оберіть культуру</p>
                <select class="form__select" name="select" id="slc1">
                    <option value="">Оберіть культуру</option>
                    <option value="wheat">Пшениця</option>
                    <option value="sunflower">Соняшник</option>
                    <option value="corn">Кукурудза</option>
                    <option value="soybeans">Соя</option>
                </select>
            </label>
            <div class="form__input">
                <div class="form__input-container col-lg-6 col-md-6">
                    <p>Введіть показники вологості %</p>
                    <input class="input__select-humidity" type="text" placeholder="Введіть показник, %">
                </div>
                <div class="form__input-container col-lg-6 col-md-6">
                    <p>Введіть показник сміттєвої домішки %</p>
                    <input class="input__select-impurity " type="text" placeholder="Введіть показник, %">
                </div>
            </div>
            <div class="canculator__content row">
                <div class="canculator__counters-item col-6">
                    <span class="canculator-count">Знижка по вологості у грн : <p class="discount-result"></p>
                    </span class="canculator-count">
                    <span class="canculator-count">Знижка по вологості у %:
                        <p class="percent-discount"></p>
                    </span>
                    <span class="canculator-count">Знижка загальна :
                        <p class="total-discount"></p>
                    </span>
                </div>
                <!-- dicount int -->
                <div class="canculator__counters-item col-6">
                    <span class="canculator-count">Знижка по засмічуванню у грн : <p class="discount-result-int"></p>
                    </span>
                    <span class="canculator-count">Знижка по засмічуванню у %:
                        <p class="percent-discount-int"></p>
                    </span>
                    <span class="canculator-count">Знижка загальна :
                        <p class="total-discount-int"></p>
                    </span>
                </div>
            </div>

        </form>
    </div>

</section>



<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Лабораторія ТОВ "ТРЕЙДСОФТКОРН"
            </h2>
        </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="box">
                                <div class="detail-box">
                                    <img class="carosel-image"
                                        src="<?= get_template_directory_uri() . '/images/photo_2023-10-18_15-45-40.jpg'; ?>"
                                        alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="box">
                                <div class="detail-box">
                                    <img class="carosel-image"
                                        src="<?php echo get_template_directory_uri() . '/images'; ?>/photo_2023-10-18_15-49-11.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel2" data-slide-to="1"></li>
        </ol>
    </div>
</section>


<section class="why_us_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Чому обирають нас?
            </h2>
        </div>
        <div class="why_us_container">
            <div class="box">
                <div class="img-box">
                    <img src="<?= get_template_directory_uri() . '/images'; ?>/w1.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Досвід та професіоналізм:
                    </h5>
                    <p>
                        Ми пишаємося нашими роками досвіду та професіоналізмом. З 2014 року ми допомагаємо
                        сільськогосподарським підприємцям ефективно обробляти та зберігати їхнє зерно. Наша команда
                        кваліфікованих
                        фахівців
                        завжди готова допомогти вам.
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="<?= get_template_directory_uri() . '/images'; ?>/w2.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Якість послуг та обладнання:
                    </h5>
                    <p>
                        У нас ви знайдете сучасне технологічне обладнання, яке гарантує найвищу якість обробки та
                        зберігання
                        вашого зерна. Ми
                        вкладаємо значні зусилля в підтримку якості наших послуг та пропонуємо надійні рішення для вас.
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="<?= get_template_directory_uri() . '/images'; ?>/w3.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Клієнтська підтримка та співпраця
                    </h5>
                    <p>
                        Наша компанія завжди готова співпрацювати з вами та враховувати ваші потреби. Ми слухаємо вас і
                        готові
                        надавати
                        індивідуальні рішення. Ваш успіх - наша мета, і ми прагнемо досягти її разом з вами.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="sect-contacts" class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="col-lg-6 col-md-6">
            <div class="heading_container">
                <h2 class="heading__title">
                    Наші контакти та адреса
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contacts">
                    <ul class="contacts__list">
                        <li class="contacts__list-item">
                            <h5>Телефон</h5>
                            Номер офісу: +380512 70 97 38 <br>
                            Номер елеватору: +380957170501
                        </li>
                        <li class="contacts__list-item">
                            <h5>Адреса</h5>
                            вул. Миру 69, с Руденківка Новосанжарського району(Полтавський район) Полтавської області
                            Залізнична станція – Нові Санжари Південної залізниці Полтавської дирекції. <br> Код станції
                            447405.
                        </li>
                        <li class="contacts__list-item">
                            <h5>Eлектронна пошта</h5>
                            Електронна пошта: demetratrading@ukr.net
                        </li>
                        <li class="contacts__list-item">
                            <h5>Додаткова інформація та права</h5>
                            Компанія і елеватор сертифіковані , як елеватор і трейдер із зерносховищем, Bureau Veritas
                            Polska Sp.
                            z.o.o., Warszawa,
                            Poland, згідно вимог ISCC Certification System(The International Sustainability and Carbon
                            Certification), а саме ISCC
                            EU
                            Також компанія сертифікована згідно фітосанітарних вимог, як елеватор і трейдер, для
                            відвантаження зерна
                            до
                            Китаю(Фітосанітарні вимоги Китайська Народна Республіка IPPC)
                            <a
                                href="https://dpss.gov.ua/storage/app/sites/12/%D0%9A%D0%9D%D0%A0%2029.06.2023/5-mistsyakukurudza.pdf">Більш
                                детально
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="map_container">
                    <div class="maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1629.9750784296007!2d34.41654915933803!3d49.336330476857235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDnCsDIwJzExLjQiTiAzNMKwMjUnMDEuOSJF!5e1!3m2!1sru!2sua!4v1697471636911!5m2!1sru!2sua"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info_section ">
    <div class="container">
        <div class="contact_nav">
            <div class="contact_nav-item">
                <a href="tel:+380503371618">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <a href="tel:+380503371618">Номер офісу: +380512 70 97 38</a>
                    <a href="tel:+380512709738">Номер елеватору: +380957170501</a>
            </div>
            </a>
            <div class="contact_nav-item">
                <a href="mailto:dametratrading@ukr.net">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a href="mailto:dametratrading@ukr.net">dametratrading@ukr.net</a>
                </a>
            </div>
            <div class="contact_nav-item">
                <a href="#sect-contacts">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                        Локація
                    </span>
                </a>
            </div>
        </div>
    </div>
    </div>
</section>
<?php
get_footer();