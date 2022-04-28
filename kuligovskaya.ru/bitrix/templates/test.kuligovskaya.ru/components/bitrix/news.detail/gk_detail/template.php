<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? //pr($arResult);?>

<section class="preview_residential_complex">
    <div class="background_shape_preview_residential_complex">
        <img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>">
    </div>
    <div class="wrap">
        <div class="info_box_preview_residential_complex">
            <h1 class="title_h1">
                Жилой комплекс<br>
                “<?=$arResult['NAME']?>”
            </h1>
            <div class="full_price">
                <span>от</span> 6,41 млн ₽ <span>до</span> 22,29 млн ₽
            </div>
            <div class="square_price">
                146 914 ₽/м²
            </div>
        </div>
        <div class="text_preview_residential_complex">
            <?=$arResult['PREVIEW_TEXT']?>
        </div>
        <div class="btn_preview_residential_complex" onclick="OpenModal('ask_viewing')">Оставить заявку</div>
    </div>
</section>
<section class="params_residential_complex">
    <div class="wrap">
        <div class="item_params_residential_complex">
            <div class="icon_item_params_residential_complex">
                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/house.svg">
            </div>
            <div class="info_item_params_residential_complex">
                <div class="mini_tile_item_params_residential_complex">Срок сдачи</div>
                <div class="text_item_params_residential_complex"><?=$arResult['PROPERTIES']['SROK_SDACHI']['VALUE']?></div>
            </div>
        </div>
        <div class="item_params_residential_complex">
            <div class="icon_item_params_residential_complex">
                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/house.svg">
            </div>
            <div class="info_item_params_residential_complex">
                <div class="mini_tile_item_params_residential_complex">Класс</div>
                <div class="text_item_params_residential_complex"><?=$arResult['PROPERTIES']['CLASS']['VALUE']?></div>
            </div>
        </div>
        <div class="item_params_residential_complex">
            <div class="icon_item_params_residential_complex">
                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/house.svg">
            </div>
            <div class="info_item_params_residential_complex">
                <div class="mini_tile_item_params_residential_complex">Этажность</div>
                <div class="text_item_params_residential_complex"><?=$arResult['PROPERTIES']['FLOOR']['VALUE']?></div>
            </div>
        </div>
        <div class="item_params_residential_complex">
            <div class="icon_item_params_residential_complex">
                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/house.svg">
            </div>
            <div class="info_item_params_residential_complex">
                <div class="mini_tile_item_params_residential_complex">Корпусов</div>
                <div class="text_item_params_residential_complex"><?=$arResult['PROPERTIES']['CAMPUS']['VALUE']?></div>
            </div>
        </div>
        <div class="item_params_residential_complex">
            <div class="icon_item_params_residential_complex">
                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/house.svg">
            </div>
            <div class="info_item_params_residential_complex">
                <div class="mini_tile_item_params_residential_complex">Класс</div>
                <div class="text_item_params_residential_complex"><?=$arResult['PROPERTIES']['CLASS2']['VALUE']?></div>
            </div>
        </div>
        <div class="item_params_residential_complex">
            <div class="icon_item_params_residential_complex">
                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/house.svg">
            </div>
            <div class="info_item_params_residential_complex">
                <div class="mini_tile_item_params_residential_complex">Варианты отделки</div>
                <div class="text_item_params_residential_complex"><?=$arResult['PROPERTIES']['VAR_OTDELKI']['VALUE']?></div>
            </div>
        </div>
    </div>
</section>
<section class="about_residential_complex">
    <div class="wrap">
        <div class="row_top_about_residential_complex">
            <div class="title_about_residential_complex">
                О жилом комплексе «<?=$arResult['NAME']?>»
            </div>
            <div class="tabs_about_residential_complex">
                <ul class="tabs_about_residential_complex__nav list-reset">
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
            </div>
        </div>
        <div class="row_bottom_about_residential_complex">
            <div class="tabs_about_residential_complex__content active">
                <a href="/bitrix/templates/test.kuligovskaya.ru/video/1.mp4" data-fslightbox="gallery2" data-video-poster="https://fslightbox.com/img/bbunny.png" class="video_box_residential_complex" style="background-image: url(/bitrix/templates/test.kuligovskaya.ru/img/main/company2.jpg)">
                                    <span>
                                        <svg width="24" height="24">
                                            <use xlink:href="/bitrix/templates/test.kuligovskaya.ru/img/sprite.svg#play"></use>
                                        </svg>
                                    </span>
                </a>
                <div class="info_box_residential_complex">
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
                    </div>
                    <div class="text_residential_complex">
                        Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию Помощника Брокера по элитной недвижимости. Основной функционал - организация и проведение просмотров объектов недвижимости с Клиентами.
                        Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию Помощника Брокера по элитной недвижимости. Основной функционал - организация и проведение просмотров объектов недвижимости с Клиентами.
                    </div>
                </div>
            </div>
            <div class="tabs_about_residential_complex__content">
                Описание
            </div>
            <div class="tabs_about_residential_complex__content">
                Карта
            </div>
        </div>
    </div>
</section>
