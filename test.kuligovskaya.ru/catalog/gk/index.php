<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");

?>
    <main class="main" id="main">
        <div class="inner-page">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "gk_detail",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "gk_detail",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => $_REQUEST["ID"],
                    "FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
                    "IBLOCK_ID" => "61",
                    "IBLOCK_TYPE" => "kuligovskaya_catalog",
                    "IBLOCK_URL" => "#SITE_DIR#",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Страница",
                    "PROPERTY_CODE" => array(0=>"",1=>"ADDRESS",2=>"",),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N",
                    "USE_SHARE" => "N"
                )
            );?>

            <section class="catalog">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "gk_object",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "COMPONENT_TEMPLATE" => "vacancy",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "DETAIL_PICTURE",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "55",
                        "IBLOCK_TYPE" => "kuligovskaya_content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "20",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "SMALL_HEADER",
                            2 => "",
                        ),
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    ),
                    false
                ); ?>
            </section>
            <section class="main-gallery gallery_residential_complex">
                <div class="wrap">
                    <h2 class="h-title">
                        Галлерея недвижимости
                    </h2>
                    <div class="custom-swiper promo">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div data-src="/bitrix/templates/test.kuligovskaya.ru/img/catalog/1.jpg" class="main-gallery__item lazyload" >
                                    <div class="main-gallery__item__title">Калиновский лесопарк</div>
                                    <div class="main-gallery__item__text">Расстояние от комплекса: 30 мин.</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div data-src="/bitrix/templates/test.kuligovskaya.ru/img/catalog/2.jpg" class="main-gallery__item lazyload" >
                                    <div class="main-gallery__item__title">Калиновский лесопарк</div>
                                    <div class="main-gallery__item__text">Расстояние от комплекса: 30 мин.</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div data-src="/bitrix/templates/test.kuligovskaya.ru/img/catalog/3.jpg" class="main-gallery__item lazyload" >
                                    <div class="main-gallery__item__title">Калиновский лесопарк</div>
                                    <div class="main-gallery__item__text">Расстояние от комплекса: 30 мин.</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div data-src="/bitrix/templates/test.kuligovskaya.ru/img/catalog/4.jpg" class="main-gallery__item lazyload" >
                                    <div class="main-gallery__item__title">Калиновский лесопарк</div>
                                    <div class="main-gallery__item__text">Расстояние от комплекса: 30 мин.</div>
                                </div>
                            </div>
                        </div>

                        <div class="custom-swiper__bot">
                            <div class="swiper-pagination-custom"></div>
                            <div class="swiper-arrows-custom">
                                <div class="swiper-button-prev-custom">
                                    <svg width="7.5" height="15">
                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#arr-left"></use>
                                    </svg>
                                </div>
                                <div class="swiper-arrows-custom__separator"></div>
                                <div class="swiper-button-next-custom">
                                    <svg width="7.5" height="15">
                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#arr-right"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about_company_residential_complex">
                <div class="wrap">
                    <div class="logo_box_about_company">
                        <div class="icon_logo_box_about_company">
                            <img src="/bitrix/templates/test.kuligovskaya.ru/img/company_realty/2.png" alt="">
                        </div>
                        <div class="text_logo_box_about_company">
                            <div class="mini_title_text_logo_box_about_company">Застройщик</div>
                            <div class="title_text_logo_box_about_company">Брусника</div>
                        </div>
                    </div>
                    <div class="info_about_company">
                        <div class="number_items_info_about_company">
                            <div class="number_item_info_about_company">
                                <div class="number_info_about_company">2004</div>
                                <div class="text_info_about_company">Год основания</div>
                            </div>
                            <div class="number_item_info_about_company">
                                <div class="number_info_about_company">112</div>
                                <div class="text_info_about_company">Домов сдано в 22 ЖК</div>
                            </div>
                            <div class="number_item_info_about_company">
                                <div class="number_info_about_company">59</div>
                                <div class="text_info_about_company">Домов строится в 22 ЖК</div>
                            </div>
                        </div>
                        <div class="big_text_info_about_company">
                            Брусника – российская девелоперская компания. Специализируется на строительстве жилых многоэтажных домов. Основана в 2004 году. Штаб-квартира находится в Екатеринбурге. Сегодня Брусника строит
                        </div>
                    </div>
                </div>
            </section>
            <section class="my-object custom_irp">
                <div class="wrap">
                    <div class="h-title">
                        Жилые комплексы от застройщика
                    </div>
                    <div class="custom-swiper promo">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="promo__item">
                                    <div class="promo__item__img">
                                        <img data-src="/bitrix/templates/test.kuligovskaya.ru/img/main/tabs/1.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#star"></use>
                                            </svg>
                                        </button>
                                        <div class="promo__item__numb">01</div>
                                    </div>
                                    <div class="promo__item__wrap">
                                        <a href="" class="promo__item__title">
                                            Квартира в ЖК "Макаровский Элит"
                                        </a>
                                        <div class="promo__item__text">
                                            Олимпийская набережная, 5
                                        </div>
                                        <div class="promo__item__row">
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Этаж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11  этаж
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Строительная компания:
                                                </div>
                                                <div class="promo__item__param">
                                                    “Поляна”
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="promo__item__bot">
                                        <button type="button" onclick="OpenModal('ask_viewing')" class="btn-border">
                                            Связаться
                                        </button>
                                        <a href="" class="link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="promo__item">
                                    <div class="promo__item__img">
                                        <img data-src="/bitrix/templates/test.kuligovskaya.ru/img/main/tabs/2.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#star"></use>
                                            </svg>
                                        </button>
                                        <div class="promo__item__numb">02</div>
                                    </div>
                                    <div class="promo__item__wrap">
                                        <a href="" class="promo__item__title">
                                            Квартира в ЖК "Макаровский Элит"
                                        </a>
                                        <div class="promo__item__text">
                                            Олимпийская набережная, 5
                                        </div>
                                        <div class="promo__item__row">
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Этаж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11  этаж
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Строительная компания:
                                                </div>
                                                <div class="promo__item__param">
                                                    “Поляна”
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="promo__item__bot">
                                        <button type="button" onclick="OpenModal('ask_viewing')" class="btn-border">
                                            Связаться
                                        </button>
                                        <a href="" class="link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="promo__item">
                                    <div class="promo__item__img">
                                        <img data-src="/bitrix/templates/test.kuligovskaya.ru/img/main/tabs/3.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#star"></use>
                                            </svg>
                                        </button>
                                        <div class="promo__item__numb">03</div>
                                    </div>
                                    <div class="promo__item__wrap">
                                        <a href="" class="promo__item__title">
                                            Квартира в ЖК "Макаровский Элит"
                                        </a>
                                        <div class="promo__item__text">
                                            Олимпийская набережная, 5
                                        </div>
                                        <div class="promo__item__row">
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Этаж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11  этаж
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Строительная компания:
                                                </div>
                                                <div class="promo__item__param">
                                                    “Поляна”
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="promo__item__bot">
                                        <button type="button" onclick="OpenModal('ask_viewing')" class="btn-border">
                                            Связаться
                                        </button>
                                        <a href="" class="link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="promo__item">
                                    <div class="promo__item__img">
                                        <img data-src="/bitrix/templates/test.kuligovskaya.ru/img/main/tabs/1.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#star"></use>
                                            </svg>
                                        </button>
                                        <div class="promo__item__numb">04</div>
                                    </div>
                                    <div class="promo__item__wrap">
                                        <a href="" class="promo__item__title">
                                            Квартира в ЖК "Макаровский Элит"
                                        </a>
                                        <div class="promo__item__text">
                                            Олимпийская набережная, 5
                                        </div>
                                        <div class="promo__item__row">
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Этаж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11  этаж
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Строительная компания:
                                                </div>
                                                <div class="promo__item__param">
                                                    “Поляна”
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="promo__item__bot">
                                        <button type="button" onclick="OpenModal('ask_viewing')" class="btn-border">
                                            Связаться
                                        </button>
                                        <a href="" class="link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="custom-swiper__bot">
                            <div class="swiper-pagination-custom"></div>
                            <div class="swiper-arrows-custom">
                                <div class="swiper-button-prev-custom">
                                    <svg width="7.5" height="15">
                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#arr-left"></use>
                                    </svg>
                                </div>
                                <div class="swiper-arrows-custom__separator"></div>
                                <div class="swiper-button-next-custom">
                                    <svg width="7.5" height="15">
                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#arr-right"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="back-call">
                <div class="wrap">
                    <form class="back-call__wrap">
                        <div class="back-call__wrap__left">
                            <div class="back-call__title">
                                Возникли сложности при выборе?
                            </div>
                            <div class="back-call__sub-title">Оставьте заявку на звонок</div>
                            <div class="back-call__input">
                                <svg width="16" height="16">
                                    <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#phone"></use>
                                </svg>
                                <input type="phone" placeholder="Ваш номер телефон">
                            </div>
                            <div class="btn btn-white" onclick="OpenModal('sank_ask')">Оставить заявку</div>
                        </div>
                        <div class="back-call__wrap__right">
                            <div class="back-call__text">
                                Наши менеджеры свяжутся
                                с вами в течение 15 минут
                            </div>
                            <img class="back-call__img lazyload" data-src="/bitrix/templates/test.kuligovskaya.ru/img/main/back-call.jpg">
                        </div>
                    </form>
                </div>
            </section>

            <section class="main-map">
                <div class="wrap">
                    <h2 class="h-title">
                        ЖК на карте
                    </h2>
                    <div id="map">

                        <!-- <iframe src="https://yandex.ru/map-widget/v1/-/CCU5fRQJpD" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                    -->
                    </div>
                    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=3312f999-ca0e-466c-8d39-0db0ecdab538" type="text/javascript"></script>
                    <script>

                        ymaps.ready(function () {
                            var myMap = new ymaps.Map('map', {
                                center: [56.837995, 60.600480],
                                zoom: 15.8,
                                controls: ['zoomControl']
                            }, {
                                searchControlProvider: 'yandex#search'
                            })


                            myPlacemark = new ymaps.Placemark(myMap.getCenter(),
                                {
                                    hintContent: 'Собственный значок метки',
                                    balloonContent: 'Это красивая метка'
                                },
                                {
                                    // Опции.
                                    // Необходимо указать данный тип макета.
                                    iconLayout: 'default#image',
                                    // Своё изображение иконки метки.
                                    iconImageHref: '/assets/img/label.png',
                                    // Размеры метки.
                                    iconImageSize: [40, 62],
                                    // Смещение левого верхнего угла иконки относительно
                                    // её "ножки" (точки привязки).
                                    iconImageOffset: [-5, -38]
                                })
                            // myMap.geoObjects
                            // .add(myPlacemark)

                            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent)){
                                //... отключаем перетаскивание карты
                                myMap.behaviors.disable('drag');
                            }
                        });

                    </script>
                </div>
            </section>

            <section class="company company_residential_complex">
                <div class="wrap">
                    <h2 class="h-title">
                        Почему через нас покупать выгодно
                    </h2>
                    <div class="company__numbers">
                        <div class="company__numbers__item">
                            <div class="big">
                                6.5
                                <span>
                                        млн. м<sup> 2</sup>
                                    </span>
                            </div>
                            <div class="small">
                                Совокупный объем проектов
                                за 14 лет
                            </div>
                        </div>
                        <div class="company__numbers__item">
                            <div class="big">
                                22
                                <span>
                                        Проекта
                                    </span>
                            </div>
                            <div class="small">
                                В стадии релализации
                            </div>
                        </div>
                        <div class="company__numbers__item">
                            <div class="big">
                                22
                                <span>
                                        Проекта
                                    </span>
                            </div>
                            <div class="small">
                                В стадии релализации
                            </div>
                        </div>
                        <div class="company__numbers__item">
                            <div class="big">
                                6.5
                                <span>
                                        млн. м<sup> 2</sup>
                                    </span>
                            </div>
                            <div class="small">
                                Совокупный объем проектов
                                за 14 лет
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="faq">
                <div class="wrap">
                    <div class="title_faq">Вопрос ответ</div>
                    <div class="faq__list">
                        <div class="faq__row">
                            <div class="faq__header">
                                <div class="title_faq__header">
                                    Очень важный вопрос о недвижимости
                                </div>
                                <button type="button" class="faq__btn">
                                    <svg width="15px" height="7.5">
                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#vector"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="faq__body" style="display: none">
                                <div class="faq__body__wrap">
                                    <div class="faq__body__col">
                                        <p>
                                        <div class="vakancii__span">Требования:</div>
                                        Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию Помощника Брокера по элитной недвижимости. Основной функционал - организация и проведение просмотров объектов недвижимости с Клиентами.
                                        </p>
                                        <p>
                                        <ul>
                                            <li> возраст 25-45 лет</li>
                                            <li> наличие автомобиля</li>
                                            <li>высокие коммуникативные навыки</li>
                                            <li>хорошо поставленная речь</li>
                                            <li> чувство вкуса и стиля</li>
                                            <li>  пунктуальность</li>
                                            <li> высокая работоспособность</li>
                                            <li>презентабельная внешность</li>
                                            <li>опыт работы в сегменте LUXURY является конкурентным преимуществом</li>
                                        </ul>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="faq__row">
                            <div class="faq__header">
                                <div class="title_faq__header">
                                    Очень важный вопрос о недвижимости
                                </div>
                                <button type="button" class="faq__btn">
                                    <svg width="15px" height="7.5">
                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#vector"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="faq__body" style="display: none">
                                <div class="faq__body__wrap">
                                    <div class="faq__body__col">
                                        <p>
                                        <div class="vakancii__span">Требования:</div>
                                        Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию Помощника Брокера по элитной недвижимости. Основной функционал - организация и проведение просмотров объектов недвижимости с Клиентами.
                                        </p>
                                        <p>
                                        <ul>
                                            <li> возраст 25-45 лет</li>
                                            <li> наличие автомобиля</li>
                                            <li>высокие коммуникативные навыки</li>
                                            <li>хорошо поставленная речь</li>
                                            <li> чувство вкуса и стиля</li>
                                            <li>  пунктуальность</li>
                                            <li> высокая работоспособность</li>
                                            <li>презентабельная внешность</li>
                                            <li>опыт работы в сегменте LUXURY является конкурентным преимуществом</li>
                                        </ul>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="faq__row">
                            <div class="faq__header">
                                <div class="title_faq__header">
                                    Очень важный вопрос о недвижимости
                                </div>
                                <button type="button" class="faq__btn">
                                    <svg width="15px" height="7.5">
                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#vector"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="faq__body" style="display: none">
                                <div class="faq__body__wrap">
                                    <div class="faq__body__col">
                                        <p>
                                        <div class="vakancii__span">Требования:</div>
                                        Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию Помощника Брокера по элитной недвижимости. Основной функционал - организация и проведение просмотров объектов недвижимости с Клиентами.
                                        </p>
                                        <p>
                                        <ul>
                                            <li> возраст 25-45 лет</li>
                                            <li> наличие автомобиля</li>
                                            <li>высокие коммуникативные навыки</li>
                                            <li>хорошо поставленная речь</li>
                                            <li> чувство вкуса и стиля</li>
                                            <li>  пунктуальность</li>
                                            <li> высокая работоспособность</li>
                                            <li>презентабельная внешность</li>
                                            <li>опыт работы в сегменте LUXURY является конкурентным преимуществом</li>
                                        </ul>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="faq__row">
                            <div class="faq__header">
                                <div class="title_faq__header">
                                    Очень важный вопрос о недвижимости
                                </div>
                                <button type="button" class="faq__btn">
                                    <svg width="15px" height="7.5">
                                        <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#vector"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="faq__body" style="display: none">
                                <div class="faq__body__wrap">
                                    <div class="faq__body__col">
                                        <p>
                                        <div class="vakancii__span">Требования:</div>
                                        Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию Помощника Брокера по элитной недвижимости. Основной функционал - организация и проведение просмотров объектов недвижимости с Клиентами.
                                        </p>
                                        <p>
                                        <ul>
                                            <li> возраст 25-45 лет</li>
                                            <li> наличие автомобиля</li>
                                            <li>высокие коммуникативные навыки</li>
                                            <li>хорошо поставленная речь</li>
                                            <li> чувство вкуса и стиля</li>
                                            <li>  пунктуальность</li>
                                            <li> высокая работоспособность</li>
                                            <li>презентабельная внешность</li>
                                            <li>опыт работы в сегменте LUXURY является конкурентным преимуществом</li>
                                        </ul>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="back-call back_call_residential_complex">
                <div class="wrap">
                    <form class="back-call__wrap">
                        <div class="back-call__wrap__left">
                            <div class="back-call__title">
                                Возникли сложности при выборе?
                            </div>
                            <div class="back-call__sub-title">Оставьте заявку на звонок</div>
                            <div class="back-call__input">
                                <svg width="16" height="16">
                                    <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#phone"></use>
                                </svg>
                                <input type="phone" placeholder="Ваш номер телефон">
                            </div>
                            <div class="btn btn-white"  onclick="OpenModal('sank_ask')">Оставить заявку</div>
                        </div>
                        <div class="back-call__wrap__right">
                            <div class="back-call__text">
                                Наши менеджеры свяжутся
                                с вами в течение 15 минут
                            </div>
                            <img class="back-call__img lazyload" data-src="/bitrix/templates/test.kuligovskaya.ru/img/main/back-call.jpg">
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>




<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>