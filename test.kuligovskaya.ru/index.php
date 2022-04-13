<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>

<main class="main" id="main">
    <section class="mob-img-sec">
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/main/main-mob.jpg">
    </section>
    <section class="main-slider">
        <div class="main-slider__wrap">
            <div class="swiper" id="main-slider-img">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main-slider-img__item">
                            <img class="swiper-lazy main-slider__img"
                                 data-src="<?= SITE_TEMPLATE_PATH ?>/img/main/1.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-slider-img__item">
                            <img class="swiper-lazy main-slider__img"
                                 data-src="<?= SITE_TEMPLATE_PATH ?>/img/main/2.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-slider-img__item">
                            <img class="swiper-lazy main-slider__img"
                                 data-src="<?= SITE_TEMPLATE_PATH ?>/img/main/1.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-slider-img__item">
                            <img class="swiper-lazy main-slider__img"
                                 data-src="<?= SITE_TEMPLATE_PATH ?>/img/main/2.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper" id="main-slider-img-sub">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main-slider-img__item2">
                            <img class="main-slider__img2" src="<?= SITE_TEMPLATE_PATH ?>/img/main/1.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-slider-img__item2">
                            <img class="main-slider__img2" src="<?= SITE_TEMPLATE_PATH ?>/img/main/2.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-slider-img__item2">
                            <img class="main-slider__img2" src="<?= SITE_TEMPLATE_PATH ?>/img/main/1.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-slider-img__item2">
                            <img class="main-slider__img2" src="<?= SITE_TEMPLATE_PATH ?>/img/main/2.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="main-slider-two">
        <div class="swiper" id="main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="main-slider__item">

                        <div class="main-slider__item__bot">
                            <div class="wrap">
                                <div class="main-slider__item__content">
                                    <div class="main-slider__item__content__wrap">
                                        <div class="tag">Акция</div>
                                        <div class="main-slider__item__title">
                                            Дорогая недвижимость
                                            Екатеринбурга
                                        </div>
                                        <div class="main-slider__item__text">
                                            Без комиссий и переплат
                                            Закрытые предложения и продажи
                                            Все элитные новостройки
                                        </div>
                                        <a href="" class="btn">Подробнее</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main-slider__item">

                        <div class="main-slider__item__bot">
                            <div class="wrap">
                                <div class="main-slider__item__content">
                                    <div class="main-slider__item__content__wrap">
                                        <div class="tag">Акция</div>
                                        <div class="main-slider__item__title">
                                            Дорогая недвижимость
                                            Екатеринбурга2
                                        </div>
                                        <div class="main-slider__item__text">
                                            Какой то другой текст где много слов
                                        </div>
                                        <a href="" class="btn">Подробнее</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper__action">
                <div class="wrap">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </div>
    </section>
    <section class="main-tabs">
        <div class="wrap">
            <ul class="main-tabs__nav list-reset">
                <li class="active">
                    Спецпредложения
                </li>
                <li>
                    Акции
                </li>
            </ul>
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "", array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "COMPONENT_TEMPLATE" => "catalog_slider",
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "FIELD_CODE" => array(    // Поля
                    0 => "DETAIL_PICTURE",
                    1 => "",
                ),
                "FILTER_NAME" => "",    // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "13",    // Код информационного блока
                "IBLOCK_TYPE" => "page_catalog",    // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "20",    // Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "SMALL_HEADER",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                "SHOW_404" => "N",    // Показ специальной страницы
                "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
            ),
                false
            ); ?>
            <div class="main-tabs__wrap">
                <div class="main-tabs__content active">
                    <div class="custom-swiper promo">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="promo__item">
                                    <div class="promo__item__img">
                                        <img data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/tabs/1.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#star"></use>
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
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11 этаж
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
                                        <img data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/tabs/2.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#star"></use>
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
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11 этаж
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
                                        <img data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/tabs/3.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#star"></use>
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
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11 этаж
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
                                        <img data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/tabs/1.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#star"></use>
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
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11 этаж
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
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#arr-left"></use>
                                    </svg>
                                </div>
                                <div class="swiper-arrows-custom__separator"></div>
                                <div class="swiper-button-next-custom">
                                    <svg width="7.5" height="15">
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#arr-right"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-tabs__content">
                    <div class="custom-swiper promo">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="promo__item">
                                    <div class="promo__item__img">
                                        <img data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/tabs/1.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#star"></use>
                                            </svg>
                                        </button>
                                        <div class="promo__item__numb">05</div>
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
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11 этаж
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
                                        <img data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/tabs/2.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#star"></use>
                                            </svg>
                                        </button>
                                        <div class="promo__item__numb">06</div>
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
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11 этаж
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
                                        <img data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/tabs/3.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#star"></use>
                                            </svg>
                                        </button>
                                        <div class="promo__item__numb">07</div>
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
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11 этаж
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
                                        <img data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/tabs/1.jpg" class="lazyload">
                                        <a href="" class="promo__item__img__link"></a>
                                        <button class="promo__item__add btn-reset" type="button">
                                            <svg width="18" height="18">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#star"></use>
                                            </svg>
                                        </button>
                                        <div class="promo__item__numb">08</div>
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
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#metraj"></use>
                                                    </svg>
                                                    113 м2
                                                </div>
                                            </div>
                                            <div class="promo__item__col">
                                                <div class="promo__item__text">
                                                    Метраж:
                                                </div>
                                                <div class="promo__item__param">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#etaj"></use>
                                                    </svg>
                                                    6/11 этаж
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
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#arr-left"></use>
                                    </svg>
                                </div>
                                <div class="swiper-arrows-custom__separator"></div>
                                <div class="swiper-button-next-custom">
                                    <svg width="7.5" height="15">
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#arr-right"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="main-catalog">
        <div class="wrap">
            <h2 class="h-title">
                Каталог элитной недвижимости
            </h2>
            <div class="main-catalog__wrap">
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/1.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/2.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/3.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/4.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/5.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/6.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
            </div>
            <div class="main-catalog__wrap main-catalog__wrap--more">
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/1.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/2.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/3.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/4.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/5.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
                <a href="" class="main-catalog__item lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/6.jpg">
                    <div class="main-catalog__item__content">
                        <div class="main-catalog__item__title">Квартира в ЖК "Макаровский Элит"</div>
                        <div class="main-catalog__item__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="main-catalog__bot">
            <a href="" class="main-catalog__download">
                Скачать полный каталог
                <span>
                            <svg width="18" height="18">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#download"></use>
                            </svg>
                        </span>
            </a>
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
                Наша компания
            </h2>
            <div class="company__wrap">
                <div class="company__left">
                    <div class="company__numbers">
                        <div class="company__numbers__item">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                ".default",
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
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "DATE_ACTIVE_TO",
                                        1 => "ACTIVE_TO",
                                        2 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "15",
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
                                    "PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "STOCK",
                                        2 => "SMALL_HEADER",
                                        3 => "",
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
                    </div>
                    <div class="company__media">
                        <a href="<?= SITE_TEMPLATE_PATH ?>/imgmain/company1.jpg" class="lazyload company__media__img"
                           data-fslightbox="gallery" data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/company1.jpg"></a>
                        <a href="<?= SITE_TEMPLATE_PATH ?>/video/1.mp4" data-fslightbox="gallery2"
                           data-video-poster="https://fslightbox.com/img/bbunny.png" class="company__media__video"
                           style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/imgmain/company2.jpg)">
                                    <span>
                                        <svg width="24" height="24">
                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#play"></use>
                                        </svg>
                                    </span>
                        </a>
                    </div>
                </div>
                <div class="company__right">
                    <div class="company__right__wrap">
                        <div class="company__text">
                            Без комиссий и переплат
                            Закрытые предложения и продажи
                            Все элитные новостройки
                        </div>
                        <div class="company__list">
                            <div class="company__list__item">
                                <div class="company__list__cross">
                                    <svg width="14.5" height="14.5">
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#cross"></use>
                                    </svg>
                                </div>
                                14 работы
                                на рынке недвижимости
                            </div>
                            <div class="company__list__item">
                                <div class="company__list__cross">
                                    <svg width="14.5" height="14.5">
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#cross"></use>
                                    </svg>
                                </div>
                                Входим в топ-10
                                застройщикво по вводу жилья
                                в эксплуатацию
                            </div>
                            <div class="company__list__item">
                                <div class="company__list__cross">
                                    <svg width="14.5" height="14.5">
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#cross"></use>
                                    </svg>
                                </div>
                                1500 тыс. м2
                                введено в эксплуатацию
                                в 2019 году
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
                    <a class="btn-border" href="">
                        Все новости
                    </a>
                </div>
                <div class="company-news__bot">
                    <div class="company-news__left">
                        <div class="company-news__item company-news__item--big">
                            <a class="company-news__item__img" href="">
                                <img class="lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/news.jpg">
                            </a>
                            <div class="company-news__top">
                                <div class="company-news__data">
                                    02 авг 2019
                                </div>
                                <div class="company-news__last-label">Последняя новость</div>
                            </div>
                            <a href="" class="company-news__title">Scania заняла призовое место на выставке в
                                Барселоне</a>
                            <div class="company-news__text">Без комиссий и переплат
                                Закрытые предложения и продажи
                                Все элитные новостройки
                            </div>
                        </div>
                    </div>
                    <div class="company-news__right">
                        <div class="company-news company-news__item__mini">
                            <div class="company-news__data">
                                <svg width="16" height="16">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#calendar"></use>
                                </svg>
                                02 авг 2019
                            </div>
                            <a href="" class="company-news__title">Scania заняла призовое место на выставке в
                                Барселоне</a>
                            <div class="company-news__text">
                                “Клевер Парк” - уникальный проект комплексной застройки
                                “Клевер Парк” - уникальный проект комплексной застройки
                                “Клевер Парк” - уникальный проект комплексной застройки
                            </div>

                        </div>
                        <div class="company-news company-news__item__mini">
                            <div class="company-news__data">
                                <svg width="16" height="16">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#calendar"></use>
                                </svg>
                                02 авг 2019
                            </div>
                            <a href="" class="company-news__title">Scania заняла призовое место на выставке в
                                Барселоне</a>
                            <div class="company-news__text">
                                “Клевер Парк” - уникальный проект комплексной застройки
                                “Клевер Парк” - уникальный проект комплексной застройки
                                “Клевер Парк” - уникальный проект комплексной застройки
                            </div>

                        </div>
                        <div class="company-news company-news__item__mini">
                            <div class="company-news__data">
                                <svg width="16" height="16">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#calendar"></use>
                                </svg>
                                02 авг 2019
                            </div>
                            <a href="" class="company-news__title">Scania заняла призовое место на выставке в
                                Барселоне</a>
                            <div class="company-news__text">
                                “Клевер Парк” - уникальный проект комплексной застройки
                                “Клевер Парк” - уникальный проект комплексной застройки
                                “Клевер Парк” - уникальный проект комплексной застройки
                            </div>

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
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#phone"></use>
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
                    <img class="back-call__img lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/back-call.jpg">
                </div>
            </form>
        </div>
    </section>

    <section class="main-gallery">
        <div class="wrap">
            <h2 class="h-title">
                Галлерея недвижимости
            </h2>
            <div class="custom-swiper promo">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/1.jpg" class="main-gallery__item lazyload">
                            <div class="main-gallery__item__text">Квартира в ЖК "Макаровский Элит"</div>
                            <div class="main-gallery__item__play">
                                <svg width="24" height="24">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#play"></use>
                                </svg>
                            </div>
                            <a class="main-gallery__item__link" href="<?= SITE_TEMPLATE_PATH ?>/video/1.mp4" data-fslightbox="video"
                               data-video-poster="https://fslightbox.com/img/bbunny.png"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/2.jpg" class="main-gallery__item lazyload">
                            <div class="main-gallery__item__text">Квартира в ЖК "Макаровский Элит"</div>
                            <div class="main-gallery__item__play">
                                <svg width="24" height="24">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#play"></use>
                                </svg>
                            </div>
                            <a class="main-gallery__item__link" href="<?= SITE_TEMPLATE_PATH ?>/video/1.mp4" data-fslightbox="video"
                               data-video-poster="https://fslightbox.com/img/bbunny.png"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/3.jpg" class="main-gallery__item lazyload">
                            <div class="main-gallery__item__text">Квартира в ЖК "Макаровский Элит"</div>
                            <div class="main-gallery__item__play">
                                <svg width="24" height="24">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#play"></use>
                                </svg>
                            </div>
                            <a class="main-gallery__item__link" href="<?= SITE_TEMPLATE_PATH ?>/video/1.mp4" data-fslightbox="video"
                               data-video-poster="https://fslightbox.com/img/bbunny.png"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div data-src="<?= SITE_TEMPLATE_PATH ?>/imgcatalog/4.jpg" class="main-gallery__item lazyload">
                            <div class="main-gallery__item__text">Квартира в ЖК "Макаровский Элит"</div>
                            <div class="main-gallery__item__play">
                                <svg width="24" height="24">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#play"></use>
                                </svg>
                            </div>
                            <a class="main-gallery__item__link" href="<?= SITE_TEMPLATE_PATH ?>/video/1.mp4" data-fslightbox="video"
                               data-video-poster="https://fslightbox.com/img/bbunny.png"></a>
                        </div>
                    </div>
                </div>

                <div class="custom-swiper__bot">
                    <div class="swiper-pagination-custom"></div>
                    <div class="swiper-arrows-custom">
                        <div class="swiper-button-prev-custom">
                            <svg width="7.5" height="15">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#arr-left"></use>
                            </svg>
                        </div>
                        <div class="swiper-arrows-custom__separator"></div>
                        <div class="swiper-button-next-custom">
                            <svg width="7.5" height="15">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#arr-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-map">
        <div class="wrap">
            <h2 class="h-title">
                Мы на карте
            </h2>
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
    </section>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>