<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <main class="main" id="main">
    <div class="inner-page">
        <section class="contacts">
            <div class="wrap">
                <h1 class="h1">
                    Контакты </h1>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "contacts_info",
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
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("DETAIL_PICTURE", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "59",
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
                        "PROPERTY_CODE" => array("", "SMALL_HEADER", ""),
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
                <div class="btn_modal_form" onclick="OpenModal('ask_questions')">
                    Задать вопрос
                </div>
            </div>
        </section>
        <section class="contacts_map">
            <div class="wrap">
                <div id="map">
                    <!-- <iframe src="https://yandex.ru/map-widget/v1/-/CCU5fRQJpD" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                             -->
                </div>
                <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=3312f999-ca0e-466c-8d39-0db0ecdab538"
                        type="text/javascript"></script>
                <script>

                    ymaps.ready(function () {
                        var myMap = new ymaps.Map('map', {
                            center: [56.834673, 60.602065],
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
        </section>
    </div>
    </main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>