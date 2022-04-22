<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
    <main class="main" id="main">
    <section class="mob-img-sec"><img src="/bitrix/templates/test.kuligovskaya.ru/img/main/main-mob.jpg"></section>
    <section class="main-slider">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "home_img_slider",
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
                "COMPONENT_TEMPLATE" => "home_img_slider",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "47",
                "IBLOCK_TYPE" => "smscity_realty_content",
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
                "PROPERTY_CODE" => array(0 => "", 1 => "SMALL_HEADER", 2 => "",),
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
            )
        ); ?></section>
    <section class="main-slider-two">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "home_slider",
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
                "COMPONENT_TEMPLATE" => "home_slider",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "47",
                "IBLOCK_TYPE" => "smscity_realty_content",
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
                "PROPERTY_CODE" => array(0 => "", 1 => "SMALL_HEADER", 2 => "",),
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
            )
        ); ?> </section>
    <section class="main-tabs">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "spec_and_stock",
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
                "COMPONENT_TEMPLATE" => "spec_and_stock",
                "DETAIL_URL" => "/catalog/detail?ID=#ELEMENT_ID#",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "10",
                "IBLOCK_TYPE" => "smscity_realty_catalog",
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
                "PROPERTY_CODE" => array(0 => "", 1 => "SMALL_HEADER", 2 => "",),
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
            )
        ); ?> </section>
    <section class="main-catalog">
        <div class="wrap">
            <h2 class="h-title">
                Каталог элитной недвижимости
            </h2>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "catalog_element",
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
                    "COMPONENT_TEMPLATE" => "catalog_element",
                    "DETAIL_URL" => "/catalog/detail?ID=#ELEMENT_ID#",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "10",
                    "IBLOCK_TYPE" => "smscity_realty_catalog",
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
                    "PROPERTY_CODE" => array(0 => "", 1 => "SMALL_HEADER", 2 => "",),
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
                )
            ); ?>
        </div>
        <div class="main-catalog__bot">
            <a href="" class="main-catalog__download">
                Скачать полный каталог </a>
            <div class="wrap">
                <div class="main-catalog__bot__wrap">
                    <button type="button" class="btn more-catalog-show">Показать еще</button>
                    <button type="button" class="btn more-catalog-hide">Скрыть</button>
                </div>
            </div>
        </div>
    </section>
    <section class="company">
        <div class="wrap">
            <h2 class="h-title">
                Наша компания </h2>
            <div class="company__wrap">
                <div class="company__left">
                    <div class="company__numbers">
                        <div class="company__numbers__item">
                            <div class="big">
                                6.5 <span>
						млн. м<sup> 2</sup> </span>
                            </div>
                            <div class="small">
                                Совокупный объем проектов за 14 лет
                            </div>
                        </div>
                        <div class="company__numbers__item">
                            <div class="big">
                                22 Проекта
                            </div>
                            <div class="small">
                                В стадии релализации
                            </div>
                        </div>
                    </div>
                    <div class="company__media">
                        <a href="/bitrix/templates/test.kuligovskaya.ru/img/main/company1.jpg"
                           class="lazyload company__media__img" data-fslightbox="gallery"
                           data-src="./img/main/company1.jpg"></a> <a
                                href="/bitrix/templates/test.kuligovskaya.ru/video/1.mp4" data-fslightbox="gallery2"
                                data-video-poster="https://fslightbox.com/img/bbunny.png" class="company__media__video"
                                style="background-image: url(/bitrix/templates/test.kuligovskaya.ru/img/main/company2.jpg)"> </a>
                    </div>
                </div>
                <div class="company__right">
                    <div class="company__right__wrap">
                        <div class="company__text">
                            Без комиссий и переплат Закрытые предложения и продажи Все элитные новостройки
                        </div>
                        <div class="company__list">
                            <div class="company__list__item">
                                <div class="company__list__cross">
                                </div>
                                14 работы на рынке недвижимости
                            </div>
                            <div class="company__list__item">
                                <div class="company__list__cross">
                                </div>
                                Входим в топ-10 застройщикво по вводу жилья в эксплуатацию
                            </div>
                            <div class="company__list__item">
                                <div class="company__list__cross">
                                </div>
                                1500 тыс. м2 введено в эксплуатацию в 2019 году
                            </div>
                        </div>
                        <a href="" class="btn company__btn">Читать дальше</a>
                    </div>
                </div>
            </div>
            <div class="company__mob">
            </div>
        </div>
    </section>
    <section class="company-news">
        <div class="wrap">
            <div class="company-news__wrap">
                <div class="company-news__top">
                    <h2 class="h-title">Новости нашей компании</h2>
                    <a class="btn-border" href="/news">
                        Все новости </a>
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "home_newslist",
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
                        "COMPONENT_TEMPLATE" => "home_newslist",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "4",
                        "IBLOCK_TYPE" => "smscity_realty_content",
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
                        "PROPERTY_CODE" => array(0 => "", 1 => "SMALL_HEADER", 2 => "",),
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
                    )
                ); ?>
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
                    <div class="back-call__sub-title">
                        Оставьте заявку на звонок
                    </div>
                    <div class="back-call__input">
                        <input type="phone" placeholder="Ваш номер телефон">
                    </div>
                    <div class="btn btn-white" onclick="OpenModal('sank_ask')">
                        Оставить заявку
                    </div>
                </div>
                <div class="back-call__wrap__right">
                    <div class="back-call__text">
                        Наши менеджеры свяжутся с вами в течение 15 минут
                    </div>
                    <img src="null" class="back-call__img lazyload"
                         data-src="/bitrix/templates/test.kuligovskaya.ru/img/main/back-call.jpg">
                </div>
            </form>
        </div>
    </section>
    <section class="main-gallery">
        <div class="wrap">
            <h2 class="h-title">
                Галлерея недвижимости </h2>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "gallery_estate",
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
                    "COMPONENT_TEMPLATE" => "spec_and_stock",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "10",
                    "IBLOCK_TYPE" => "smscity_realty_catalog",
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
                    "PROPERTY_CODE" => array(0 => "", 1 => "SMALL_HEADER", 2 => "",),
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
                )
            ); ?>
        </div>
    </section>
    <section class="main-map">
        <div class="wrap">
            <h2 class="h-title">
                Мы на карте </h2>
            <div id="map">
                <!-- <iframe src="https://yandex.ru/map-widget/v1/-/CCU5fRQJpD" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                         -->
            </div>
            <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=3312f999-ca0e-466c-8d39-0db0ecdab538"
                    type="text/javascript"></script>
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

                    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent)) {
                        //... отключаем перетаскивание карты
                        myMap.behaviors.disable('drag');
                    }
                });

            </script>
        </div>
    </section> </main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>