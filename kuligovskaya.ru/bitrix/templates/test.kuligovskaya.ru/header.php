<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH ?>/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">
    <title><?=$APPLICATION->ShowTitle() ?></title>
    <?$APPLICATION->ShowHead();?>

    <?
    // Подключения скриптов
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/libs/jquery.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js" );

    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/mask_tel.js" );

    //Подключение css
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/vendor.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.css", true);
    ?>

</head>

<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>
<div class="app">
    <header class="header" id="header">
        <div class="wrap">
            <div class="header__wrap">
                <a href="/" class="logo">
                    <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/logo.svg">
                </a>
                <div class="header__des">
                    <div class="header__row">
                        <nav class="top-nav">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "header_menu",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N",
                                    "COMPONENT_TEMPLATE" => "header_menu"
                                ),
                                false
                            );?>
                        </nav>
                    </div>
                    <div class="header__row">
                        <div class="header__mid">
                            <a href="" class="header__location">
                                <div class="header__location__img">
                                    <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/location.png">
                                </div>
                                <div class="header__location__text">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        ".default",
                                        array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/bitrix/templates/test.kuligovskaya.ru/include/location.php",
                                            "EDIT_TEMPLATE" => ""
                                        ),
                                        false
                                    ); ?>
                                </div>
                            </a>
                            <div class="header__mid__right">
                                <? $APPLICATION->IncludeComponent("bitrix:news.list", "social_networks", Array(
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
                                            "COMPONENT_TEMPLATE" => "social_networks",
                                            "DETAIL_URL" => "/news/detail?ID=#ELEMENT_ID#",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
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
                                            "FILTER_NAME" => "desktop",	// Фильтр
                                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                                            "IBLOCK_ID" => "48",	// Код информационного блока
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

                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/bitrix/templates/test.kuligovskaya.ru/include/phone.php",
                                        "EDIT_TEMPLATE" => ""
                                    ),
                                    false
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="header__row">
                        <nav class="bot-nav">
                            <ul class="list-reset">
                                <li>
                                    <a href="/aggregator">Новостройки</a>
                                </li>
                                <li>
                                    <a href="/catalog?SECTION_ID=140">Городская недвижимость</a>
                                </li>
                                <li>
                                    <a href="/catalog?SECTION_ID=141">Загородная недвижимость</a>
                                </li>
                                <li>
                                    <a href="/catalog?SECTION_ID=142">Коммерческая недвижимость</a>
                                </li>
                                <li>
                                    <a href="/catalog?SECTION_ID=145">Москва</a>
                                </li>
                                <li>
                                    <a href="/catalog?SECTION_ID=143">Зарубежная</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header__mob">
                    <a href="" class="header__mob__phone">
                        <svg width="14" height="14">
                            <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#phone"></use>
                        </svg>
                    </a>
                    <button type="button" class="burger btn-reset" id="burger">
                        <svg width="18" height="10" class="burger-open">
                            <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#burger-open"></use>
                        </svg>
                        <svg width="24" height="24" class="burger-close">
                            <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#burger-close"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <nav class="mob-nav">
        <div class="wrap">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "header_menu_mob",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "header_menu_mob"
                ),
                false
            );?>

            <ul class="mob-nav__sub list-reset">
                <li>
                    <a href="/aggregator">Новостройки</a>
                </li>
                <li>
                    <a href="/catalog?SECTION_ID=140">Городская недвижимость</a>
                </li>
                <li>
                    <a href="/catalog?SECTION_ID=141">Загородная недвижимость</a>
                </li>
                <li>
                    <a href="/catalog?SECTION_ID=142">Коммерческая недвижимость</a>
                </li>
                <li>
                    <a href="/catalog?SECTION_ID=145">Москва</a>
                </li>
                <li>
                    <a href="/catalog?SECTION_ID=143">Зарубежная</a>
                </li>
            </ul>
            <div class="mob-nav__bot">
                <a href="" class="header__location">
                    <div class="header__location__img">
                        <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/location.png">
                    </div>
                    <div class="header__location__text">
                        Екатеринбург, FC Limerance, оф.703
                    </div>
                </a>
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "social_networks", Array(
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
                    "COMPONENT_TEMPLATE" => "social_networks",
                    "DETAIL_URL" => "/news/detail?ID=#ELEMENT_ID#",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
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
                    "FILTER_NAME" => "mobile",	// Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => "48",	// Код информационного блока
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
            </div>
        </div>

    </nav>

