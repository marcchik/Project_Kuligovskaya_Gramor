<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">
    <title><?=$APPLICATION->ShowTitle() ?></title>
    <?$APPLICATION->ShowHead();?>

    <?
    // Подключения скриптов
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/libs/jquery.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js" );

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
                <a href="index.html" class="logo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/main/logo.svg">
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
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/main/location.png">
                                </div>
                                <div class="header__location__text">
                                    Екатеринбург, FC Limerance, оф.703
                                </div>
                            </a>
                            <div class="header__mid__right">
                                <ul class="header__soc list-reset">
                                    <li>
                                        <a href="">
                                            <svg width="14" height="14">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite.svg#what"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg width="14" height="14">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite.svg#tg"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg width="14" height="14">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite.svg#phone"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <a href="tel:+73433009340" class="header__phone">
                                    <span>+7 (343)</span> 300-93-40
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header__row">
                        <nav class="bot-nav">
                            <ul class="list-reset">
                                <li>
                                    <a href="">Новостройки</a>
                                </li>
                                <li>
                                    <a href="">Городская недвижимость</a>
                                </li>
                                <li>
                                    <a href="">Загородная недвижимость</a>
                                </li>
                                <li>
                                    <a href="">Коммерческая недвижимость</a>
                                </li>
                                <li>
                                    <a href="">Москва</a>
                                </li>
                                <li>
                                    <a href="">Зарубежная</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header__mob">
                    <a href="" class="header__mob__phone">
                        <svg width="14" height="14">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite.svg#phone"></use>
                        </svg>
                    </a>
                    <button type="button" class="burger btn-reset" id="burger">
                        <svg width="18" height="10" class="burger-open">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite.svg#burger-open"></use>
                        </svg>
                        <svg width="24" height="24" class="burger-close">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite.svg#burger-close"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <nav class="mob-nav">
        <div class="wrap">
            <ul class="mob-nav__main list-reset">
                <li>
                    <a href=""> О компании</a>
                </li>
                <li>
                    <a href=""> Новости</a>
                </li>
                <li>
                    <a href="">Услуги</a>
                </li>
                <li>
                    <a href="">Команда</a>
                </li>
                <li>
                    <a href="">Вакансии</a>
                </li>
                <li>
                    <a href="">Отзывы</a>
                </li>
                <li>
                    <a href="">Контакты</a>
                </li>
            </ul>
            <ul class="mob-nav__sub list-reset">
                <li>
                    <a href="">Новостройки</a>
                </li>
                <li>
                    <a href="">Городская недвижимость</a>
                </li>
                <li>
                    <a href="">Загородная недвижимость</a>
                </li>
                <li>
                    <a href="">Коммерческая недвижимость</a>
                </li>
                <li>
                    <a href="">Москва</a>
                </li>
                <li>
                    <a href="">Зарубежная</a>
                </li>
            </ul>
            <div class="mob-nav__bot">
                <a href="" class="header__location">
                    <div class="header__location__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/main/location.png">
                    </div>
                    <div class="header__location__text">
                        Екатеринбург, FC Limerance, оф.703
                    </div>
                </a>
                <ul class="header__soc list-reset">
                    <li>
                        <a href="">
                            <svg width="14" height="14">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite.svg#what"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg width="14" height="14">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite.svg#tg"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

