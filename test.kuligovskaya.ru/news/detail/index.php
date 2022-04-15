<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

?>

    <main class="main" id="main">
        <div class="inner-page">
            <section class="news_detail">
                <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"news_detail", 
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
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "smscity_realty_content",
		"IBLOCK_URL" => "#SITE_DIR#/news/",
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
		"COMPONENT_TEMPLATE" => "news_detail"
	),
	false
);?>
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
                                    <use xlink:href="./img/sprite.svg#phone"></use>
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
                            <img class="back-call__img lazyload" data-src="./img/main/back-call.jpg">
                        </div>
                    </form>
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
                                                    Метраж:
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
                                                    Метраж:
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
                                                    Метраж:
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
                                                    Метраж:
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
            <section class="news articles_news_detail">
                <div class="wrap">
                    <div class="content_articles_news_detail">
                        <div class="news__top">
                            <h1 class="h1">
                                Другие новости
                            </h1>
                            <a href="" class="btn btn_all_news_desk">
                                Все новости
                            </a>
                        </div>
                        <? $APPLICATION->IncludeComponent("bitrix:news.list", "other_news", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"COMPONENT_TEMPLATE" => "home_newslist",
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "4",	// Код информационного блока
		"IBLOCK_TYPE" => "smscity_realty_content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "SMALL_HEADER",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
); ?>

                        <a href="" class="btn btn_all_news_mobile">
                            Все новости
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>