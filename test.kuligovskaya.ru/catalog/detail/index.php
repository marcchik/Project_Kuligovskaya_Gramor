<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

?>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"catalog_detail", 
	array(
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
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => $_REQUEST["ID"],
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "smscity_realty_catalog",
		"IBLOCK_URL" => "#SITE_DIR#",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
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
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "catalog_detail"
	),
	false
);?>
    <main class="main" id="main">
        <div class="inner-page">
            <section class="internal-page-realty preview_ipr">
                <div class="wrap">
                    <div class="title_params_preview_irp">
                        <div class="title_preview_irp">
                            Квартира в ЖК "Макаровский Элит"
                        </div>
                        <div class="params_preview_irp">
                            <div class="param_item_preview_irp">Мат. капитал</div>
                            <div class="param_item_preview_irp">Низкие проценты</div>
                        </div>
                    </div>
                    <div class="swiper_info_box_irp">
                        <div class="swiper_box_irp">
                            <div class="swiper swiper_irp">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="./img/objects_realty/1.png" alt="123">
                                        <div class="text_in_photo_swiper_irp">Описание фото</div>
                                    </div>
                                    <div class="swiper-slide"><img src="./img/objects_realty/1.png" alt="345">
                                        <div class="text_in_photo_swiper_irp">Описание фото 2</div>
                                    </div>
                                    <div class="swiper-slide"><img src="./img/objects_realty/1.png" alt="567">
                                        <div class="text_in_photo_swiper_irp">Описание фото 3</div>
                                    </div>
                                    <div class="swiper-slide"><img src="./img/objects_realty/1.png" alt="789">
                                        <div class="text_in_photo_swiper_irp">Описание фото 4</div>
                                    </div>
                                    <div class="swiper-slide"><img src="./img/objects_realty/1.png" alt="999">
                                        <div class="text_in_photo_swiper_irp">Описание фото 5</div>
                                    </div>
                                    <div class="swiper-slide"><img src="./img/objects_realty/1.png" alt="999">
                                        <div class="text_in_photo_swiper_irp">Описание фото 6</div>
                                    </div>
                                </div>
                                <a href="./video/1.mp4" data-fslightbox="gallery2" data-video-poster="https://fslightbox.com/img/bbunny.png"   class="btn_play_video_swiper_irp">Смотреть видео</a>
                            </div>
                            <div class="swiper_control_irp">
                                <div class="swiper-pagination_irp"></div>
                                <div class="swiper-arrows_irp">
                                    <div class="swiper-button-prev_irp">
                                        <svg width="7.5" height="15">
                                            <use xlink:href="./img/sprite.svg#arr-left"></use>
                                        </svg>
                                    </div>
                                    <div class="swiper-arrows_irp__separator"></div>
                                    <div class="swiper-button-next_irp">
                                        <svg width="7.5" height="15">
                                            <use xlink:href="./img/sprite.svg#arr-right"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="info_box_irp">
                            <div class="company_info_irp">
                                <div class="mini_title_company_info_irp">Строительная компания:</div>
                                <a class="logo_name_company_info_irp">
                                    <img src="./img/company_realty/1.png" alt="" class="logo_company_info_irp">
                                    <div class="name_company_info_irp">“Поляна”</div>
                                </a>
                            </div>
                            <div class="box_manager_info_irp">
                                <img src="./img/staff/2.jpg" alt="" class="manager_photo_irp">
                                <div class="manager_info_irp">
                                    <div class="mini_title_manager_info_irp">Сотрудник объекта</div>
                                    <a class="fio_manager_info_irp">Боровиков Павел Сергеевич</a>
                                    <div class="connection_items_manager_info_irp">
                                        <div class="connection_item_manager_info_irp">+7 (343) 300-94-42</div>
                                        <div class="connection_item_manager_info_irp">Pavel.borikov@kuligovskaya.ru</div>
                                    </div>
                                </div>
                            </div>
                            <div class="object_info_irp">
                                <div class="mini_title_object_info_irp">Цена:</div>
                                <div class="full_price_object_info_irp">26 500 000 Р</div>
                                <div class="price_square_object_info_irp">146 914 ₽/м<sup>2</sup></div>
                                <div class="btn_object_info_irp" onclick="OpenModal('ask_viewing')">Оставить заявку</div>
                                <a class="ipoteka_object_info_irp" onclick="OpenModal('ask_viewing')">Рассчитать кредит по ипотеке</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="description_ipr">
                <div class="wrap">
                    <div class="title_text_box_description_ipr">
                        <div class="title_description_ipr">Описание квартиры</div>
                        <div class="text_description_ipr">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                            <span><br></span>Все элитные новостройки
                        </div>
                    </div>
                    <div class="items_description_irp">
                        <div class="item_description_irp">
                            <div class="img_item_description_irp">
                                <img src="./img/main/params_object/1.svg">
                            </div>
                            <div class="info_item_description_irp">
                                <div class="mini_title_item_description_irp">Количество комнат</div>
                                <div class="title_item_description_irp">2</div>
                            </div>
                        </div>
                        <div class="item_description_irp">
                            <div class="img_item_description_irp">
                                <img src="./img/main/params_object/2.svg">
                            </div>
                            <div class="info_item_description_irp">
                                <div class="mini_title_item_description_irp">Площадь квартиры</div>
                                <div class="title_item_description_irp">81 м<sup>2</sup></div>
                            </div>
                        </div>
                        <div class="item_description_irp">
                            <div class="img_item_description_irp">
                                <img src="./img/main/params_object/3.svg">
                            </div>
                            <div class="info_item_description_irp">
                                <div class="mini_title_item_description_irp">Жилая площадь</div>
                                <div class="title_item_description_irp">34,5 м<sup>2</sup></div>
                            </div>
                        </div>
                        <div class="item_description_irp">
                            <div class="img_item_description_irp">
                                <img src="./img/main/params_object/4.svg">
                            </div>
                            <div class="info_item_description_irp">
                                <div class="mini_title_item_description_irp">Площадь кухни</div>
                                <div class="title_item_description_irp">11,6 м<sup>2</sup></div>
                            </div>
                        </div>
                        <div class="item_description_irp">
                            <div class="img_item_description_irp">
                                <img src="./img/main/params_object/5.svg">
                            </div>
                            <div class="info_item_description_irp">
                                <div class="mini_title_item_description_irp">Этаж</div>
                                <div class="title_item_description_irp">1 из 5</div>
                            </div>
                        </div>
                        <div class="item_description_irp">
                            <div class="img_item_description_irp">
                                <img src="./img/main/params_object/6.svg">
                            </div>
                            <div class="info_item_description_irp">
                                <div class="mini_title_item_description_irp">Мебель</div>
                                <div class="title_item_description_irp">Нет</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tabs_ipr">
                <div class="wrap">
                    <ul class="tabs_ipr__nav list-reset">
                        <li class="active">
                            Информация
                        </li>
                        <li>
                            Описание
                        </li>
                        <li>
                            Посмотреть на карте
                        </li>
                    </ul>
                    <div class="tabs_ipr__wrap">
                        <div class="tabs_ipr__content active">
                            <div class="info_item_content_tabs_ipr">
                                <div class="title_info_item_content_tabs_ipr">Город</div>
                                <div class="value_info_item_content_tabs_ipr">Екатеринбург</div>
                            </div>
                            <div class="info_item_content_tabs_ipr">
                                <div class="title_info_item_content_tabs_ipr">Адрес</div>
                                <div class="value_info_item_content_tabs_ipr">Шейнкмана, 119</div>
                            </div>
                            <div class="info_item_content_tabs_ipr">
                                <div class="title_info_item_content_tabs_ipr">Район</div>
                                <div class="value_info_item_content_tabs_ipr">Центр</div>
                            </div>
                            <div class="info_item_content_tabs_ipr">
                                <div class="title_info_item_content_tabs_ipr">Прощадь (м2)</div>
                                <div class="value_info_item_content_tabs_ipr">120</div>
                            </div>
                            <div class="info_item_content_tabs_ipr">
                                <div class="title_info_item_content_tabs_ipr">Комнат</div>
                                <div class="value_info_item_content_tabs_ipr">2</div>
                            </div>
                            <div class="info_item_content_tabs_ipr">
                                <div class="title_info_item_content_tabs_ipr">Этаж</div>
                                <div class="value_info_item_content_tabs_ipr">24</div>
                            </div>
                            <div class="info_item_content_tabs_ipr">
                                <div class="title_info_item_content_tabs_ipr">Этажей</div>
                                <div class="value_info_item_content_tabs_ipr">25</div>
                            </div>
                            <div class="info_item_content_tabs_ipr">
                                <div class="title_info_item_content_tabs_ipr">Тип дома</div>
                                <div class="value_info_item_content_tabs_ipr">Монолитный</div>
                            </div>
                            <div class="info_item_content_tabs_ipr">
                                <div class="title_info_item_content_tabs_ipr">Операция</div>
                                <div class="value_info_item_content_tabs_ipr">Продажа</div>
                            </div>
                        </div>
                        <div class="tabs_ipr__content">
                            <div class="text_item_content_tabs_ipr">
                                Жилой комплекс с закрытой территорией, от брэндового застройщика города. Шикарная планировка квартиры: прихожая 13 кв. м, с необходимой мебелью, классная гостиная, добная кладовая, два сан/узла в кафеле, 2 застеклённых и утеплённых балкона с выходом из кухни и спальни, h - 2,8 м. 2 сплит-системы, хорошая встроенная кухня с газовой плитой, большая мягкая мебель, дорогие межкомнатные двери из натурального дерева. Проводной интернет, домофон, качественная входная мет. дверь. На полу керамогранит, в комнатах - паркетная доска. Высокий уровень 1-го этажа (в цокольном этаже коммерческие помещения). Контролируемый, ограниченный въезд во двор. Современные детские и спортивные площадки. Дет/сад и школа - в 5 мин. от дома, развитая инфраструктура. Ипотека возможна. Также с квартирой можно купить капитальный гараж (со свидетельством), расположенный в 100 м от дома. Ближайший к центру район города.
                            </div>
                        </div>
                        <div class="tabs_ipr__content">
                            <div id="map_item_content_tabs_ipr">

                                <!-- <iframe src="https://yandex.ru/map-widget/v1/-/CCU5fRQJpD" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                              -->
                            </div>
                            <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=3312f999-ca0e-466c-8d39-0db0ecdab538" type="text/javascript"></script>
                            <script>

                                ymaps.ready(function () {
                                    var myMap = new ymaps.Map('map_item_content_tabs_ipr', {
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
                    </div>
                </div>
            </section>
            <section class="my-object custom_irp">
                <div class="wrap">
                    <div class="h-title">
                        Мои объекты
                    </div>
                    <div class="custom-swiper promo">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="promo__item">
                                    <div class="promo__item__img">
                                        <img data-src="./img/main/tabs/1.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="./img/sprite.svg#star"></use>
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
                                                        <use xlink:href="./img/sprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
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
                                        <img data-src="./img/main/tabs/2.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="./img/sprite.svg#star"></use>
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
                                                        <use xlink:href="./img/sprite.svg#metraj"></use>
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
                                                        <use xlink:href="./img/sprite.svg#etaj"></use>
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
                                        <img data-src="./img/main/tabs/3.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="./img/sprite.svg#star"></use>
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
                                                        <use xlink:href="./img/sprite.svg#metraj"></use>
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
                                                        <use xlink:href="./img/sprite.svg#etaj"></use>
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
                                        <img data-src="./img/main/tabs/1.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="./img/sprite.svg#star"></use>
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
                                                        <use xlink:href="./img/sprite.svg#metraj"></use>
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
                                                        <use xlink:href="./img/sprite.svg#etaj"></use>
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
                                        <use xlink:href="./img/sprite.svg#arr-left"></use>
                                    </svg>
                                </div>
                                <div class="swiper-arrows-custom__separator"></div>
                                <div class="swiper-button-next-custom">
                                    <svg width="7.5" height="15">
                                        <use xlink:href="./img/sprite.svg#arr-right"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="news inner-decor articles_ipr">
                <div class="wrap">
                    <div class="news__top">
                        <h1 class="h1">
                            Статьи
                        </h1>
                    </div>
                    <div class="news__wrap">
                        <div class="news__item">
                            <div class="news__item__data">
                                <svg width="16" height="16">
                                    <use xlink:href="./img/sprite.svg#calendar"></use>
                                </svg>
                                02 авг 2019
                            </div>
                            <a href="" class="news__item__title">
                                Scania заняла призовое
                                место на выставке в Барселоне
                            </a>
                            <div class="news__item__text">
                                “Клевер Парк” - уникальный проект комплексной застройки......
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__item__data">
                                <svg width="16" height="16">
                                    <use xlink:href="./img/sprite.svg#calendar"></use>
                                </svg>
                                02 авг 2019
                            </div>
                            <a href="" class="news__item__title">
                                Scania заняла призовое
                                место на выставке в Барселоне
                            </a>
                            <div class="news__item__text">
                                “Клевер Парк” - уникальный проект комплексной застройки......
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__item__data">
                                <svg width="16" height="16">
                                    <use xlink:href="./img/sprite.svg#calendar"></use>
                                </svg>
                                02 авг 2019
                            </div>
                            <a href="" class="news__item__title">
                                Scania заняла призовое
                                место на выставке в Барселоне
                            </a>
                            <div class="news__item__text">
                                “Клевер Парк” - уникальный проект комплексной застройки......
                            </div>
                        </div>
                    </div>
                    <div class="more-btn d-flex flex-center">
                        <a href="" class="btn">
                            Читать все
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>