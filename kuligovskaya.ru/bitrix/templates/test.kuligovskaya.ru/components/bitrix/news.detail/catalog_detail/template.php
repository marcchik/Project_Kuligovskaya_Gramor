<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? //pr($arResult);?>

<section class="internal-page-realty preview_ipr">
    <div class="wrap">
        <div class="title_params_preview_irp">
            <div class="title_preview_irp">
                <?= $arResult['NAME'] ?>
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
                        <? foreach ($arResult['PROPERTIES']['PICTURES']['VALUE'] as $photo) : ?>
                            <div class="swiper-slide">
                                <img src="<?= $photo?>" alt="123">
                                <div class="text_in_photo_swiper_irp">Описание фото</div>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <?if($arResult['PROPERTIES']['VIDEO']['VALUE']):?>
                    <a href="<?=$arResult['PROPERTIES']['VIDEO']['SRC']?>" data-fslightbox="gallery2"
                       data-video-poster="<?=$arResult['PROPERTIES']['PREVIEW_PICTURE']['SRC']?>" class="btn_play_video_swiper_irp">Смотреть
                        видео</a>
                    <?endif;?>
                </div>
                <div class="swiper_control_irp">
                    <div class="swiper-pagination_irp"></div>
                    <div class="swiper-arrows_irp">
                        <div class="swiper-button-prev_irp">
                            <svg width="7.5" height="15" viewBox="0 0 9 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.5 15.5L0.999999 8L8.5 0.5" stroke="white"/>
                                <path d="M8.5 15.5L0.999999 8L8.5 0.5" stroke="white"/>
                                <path d="M8.5 15.5L0.999999 8L8.5 0.5" stroke="white"/>
                            </svg>
                        </div>
                        <div class="swiper-arrows_irp__separator"></div>
                        <div class="swiper-button-next_irp">
                            <svg width="7.5" height="15" viewBox="0 0 9 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 0.5L8 8L0.5 15.5" stroke="white"/>
                                <path d="M0.5 0.5L8 8L0.5 15.5" stroke="white"/>
                                <path d="M0.5 0.5L8 8L0.5 15.5" stroke="white"/>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
            <div class="info_box_irp">
                <div class="company_info_irp">
                    <div class="mini_title_company_info_irp">Строительная компания:</div>
                    <a class="logo_name_company_info_irp">
                        <img src="/bitrix/templates/test.kuligovskaya.ru/img/company_realty/1.png" alt=""
                             class="logo_company_info_irp">
                        <div class="name_company_info_irp">“Поляна”</div>
                    </a>
                </div>
                <?if($arResult['PROPERTIES']['STAFF']['VALUE']):?>
                    <div class="box_manager_info_irp">
                        <img src="<?=$arResult['PROPERTIES']['STAFF']['PHOTO']?>" alt="" class="manager_photo_irp">
                        <div class="manager_info_irp">
                            <div class="mini_title_manager_info_irp">Сотрудник объекта</div>
                            <a class="fio_manager_info_irp"><?=$arResult['PROPERTIES']['STAFF']['NAME'] ?></a>
                            <div class="connection_items_manager_info_irp">
                                <div class="connection_item_manager_info_irp"><?=$arResult['PROPERTIES']['STAFF']['TEL']?></div>
                                <div class="connection_item_manager_info_irp"><?=$arResult['PROPERTIES']['STAFF']['EMAIL']?></div>
                            </div>
                        </div>
                    </div>
                <?endif;?>
                <?if($arResult['PROPERTIES']['PRICE']['VALUE']):?>
                    <div class="object_info_irp">
                        <div class="mini_title_object_info_irp">Цена:</div>
                        <div class="full_price_object_info_irp"><?= $arResult['PROPERTIES']['PRICE']['VALUE'] ?> Р</div>
                        <div class="price_square_object_info_irp"><?=$arResult['PROPERTIES']['PRICE_METR']['VALUE']?> ₽/м<sup>2</sup></div>
                        <div class="btn_object_info_irp" onclick="OpenModal('ask_viewing')">Оставить заявку</div>
                        <a class="ipoteka_object_info_irp" onclick="OpenModal('ask_viewing')">Рассчитать кредит по
                            ипотеке</a>
                    </div>
                <?endif;?>
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
            <?if($arResult['PROPERTIES']['ROOMS']['VALUE']):?>
                <div class="item_description_irp">
                    <div class="img_item_description_irp">
                        <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/params_object/1.svg">
                    </div>
                    <div class="info_item_description_irp">
                        <div class="mini_title_item_description_irp">Количество комнат</div>
                        <div class="title_item_description_irp"><?= $arResult['PROPERTIES']['ROOMS']['VALUE'] ?></div>
                    </div>
                </div>
            <?endif;?>
            <?if($arResult['PROPERTIES']['SQUARE']['VALUE']):?>
                <div class="item_description_irp">
                    <div class="img_item_description_irp">
                        <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/params_object/2.svg">
                    </div>
                    <div class="info_item_description_irp">
                        <div class="mini_title_item_description_irp">Площадь квартиры</div>
                        <div class="title_item_description_irp"><?= $arResult['PROPERTIES']['SQUARE']['VALUE'] ?>
                            м<sup>2</sup></div>
                    </div>
                </div>
            <?endif;?>
            <?if($arResult['PROPERTIES']['LIVING_AREA']['VALUE']):?>
                <div class="item_description_irp">
                    <div class="img_item_description_irp">
                        <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/params_object/3.svg">
                    </div>
                    <div class="info_item_description_irp">
                        <div class="mini_title_item_description_irp">Жилая площадь</div>
                        <div class="title_item_description_irp"><?=$arResult['PROPERTIES']['LIVING_AREA']['VALUE'] ?>
                            м<sup>2</sup></div>
                    </div>
                </div>
            <?endif;?>
            <?if($arResult['PROPERTIES']['KITCHEN_AREA']['VALUE']):?>
                <div class="item_description_irp">
                    <div class="img_item_description_irp">
                        <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/params_object/4.svg">
                    </div>
                    <div class="info_item_description_irp">
                        <div class="mini_title_item_description_irp">Площадь кухни</div>
                        <div class="title_item_description_irp"><?= $arResult['PROPERTIES']['KITCHEN_AREA']['VALUE'] ?>
                            м<sup>2</sup></div>
                    </div>
                </div>
            <?endif;?>
            <?if($arResult['PROPERTIES']['FLOOR']['VALUE']):?>
                <div class="item_description_irp">
                    <div class="img_item_description_irp">
                        <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/params_object/5.svg">
                    </div>
                    <div class="info_item_description_irp">
                        <div class="mini_title_item_description_irp">Этаж</div>
                        <div class="title_item_description_irp"><?= $arResult['PROPERTIES']['FLOOR']['VALUE'] ?>
                            из <?= $arResult['PROPERTIES']['FLOORS']['VALUE'] ?></div>
                    </div>
                </div>
            <?endif;?>
            <?if($arResult['PROPERTIES']['MEBEL_AVAILABILITY']['VALUE']):?>
                <div class="item_description_irp">
                    <div class="img_item_description_irp">
                        <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/params_object/6.svg">
                    </div>
                    <div class="info_item_description_irp">
                        <div class="mini_title_item_description_irp">Мебель</div>
                        <div class="title_item_description_irp"><?= $arResult['PROPERTIES']['MEBEL_AVAILABILITY']['VALUE'] ?></div>
                    </div>
                </div>
            <?endif;?>
        </div>
    </div>
</section>
<section class="tabs_ipr">
    <div class="wrap">
        <ul class="tabs_ipr__nav list-reset">
            <li class="active">
                Информация
            </li>
            <?if($arResult['DETAIL_TEXT']):?>
                <li>
                    Описание
                </li>
            <?endif;?>
            <li>
                Посмотреть на карте
            </li>
        </ul>
        <div class="tabs_ipr__wrap">
            <div class="tabs_ipr__content active">
                <?if($arResult['PROPERTIES']['CITY']['VALUE']):?>
                    <div class="info_item_content_tabs_ipr">
                        <div class="title_info_item_content_tabs_ipr">Город</div>
                        <div class="value_info_item_content_tabs_ipr"><?= $arResult['PROPERTIES']['CITY']['VALUE'] ?></div>
                    </div>
                <?endif;?>
                <?if($arResult['PROPERTIES']['ADDRESS']['VALUE']):?>
                    <div class="info_item_content_tabs_ipr">
                        <div class="title_info_item_content_tabs_ipr">Адрес</div>
                        <div class="value_info_item_content_tabs_ipr"><?= $arResult['PROPERTIES']['ADDRESS']['VALUE'] ?></div>
                    </div>
                <?endif;?>
                <?if($arResult['PROPERTIES']['AREA']['VALUE']):?>
                    <div class="info_item_content_tabs_ipr">
                        <div class="title_info_item_content_tabs_ipr">Район</div>
                        <div class="value_info_item_content_tabs_ipr"><?= $arResult['PROPERTIES']['AREA']['VALUE'] ?></div>
                    </div>
                <?endif;?>
                <?if($arResult['PROPERTIES']['SQUARE']['VALUE']):?>
                    <div class="info_item_content_tabs_ipr">
                        <div class="title_info_item_content_tabs_ipr">Прощадь (м2)</div>
                        <div class="value_info_item_content_tabs_ipr"><?= $arResult['PROPERTIES']['SQUARE']['VALUE'] ?></div>
                    </div>
                <?endif;?>
                <?if($arResult['PROPERTIES']['ROOMS']['VALUE']):?>
                    <div class="info_item_content_tabs_ipr">
                        <div class="title_info_item_content_tabs_ipr">Комнат</div>
                        <div class="value_info_item_content_tabs_ipr"><?= $arResult['PROPERTIES']['ROOMS']['VALUE'] ?></div>
                    </div>
                <?endif;?>
                <?if($arResult['PROPERTIES']['FLOOR']['VALUE']):?>
                    <div class="info_item_content_tabs_ipr">
                        <div class="title_info_item_content_tabs_ipr">Этаж</div>
                        <div class="value_info_item_content_tabs_ipr"><?= $arResult['PROPERTIES']['FLOOR']['VALUE'] ?></div>
                    </div>
                <?endif;?>
                <?if($arResult['PROPERTIES']['FLOORS']['VALUE']):?>
                    <div class="info_item_content_tabs_ipr">
                        <div class="title_info_item_content_tabs_ipr">Этажей</div>
                        <div class="value_info_item_content_tabs_ipr"><?= $arResult['PROPERTIES']['FLOORS']['VALUE'] ?></div>
                    </div>
                <?endif;?>
                <?if($arResult['PROPERTIES']['TYPE_HOUSE']['VALUE']):?>
                    <div class="info_item_content_tabs_ipr">
                        <div class="title_info_item_content_tabs_ipr">Тип дома</div>
                        <div class="value_info_item_content_tabs_ipr"><?= $arResult['PROPERTIES']['TYPE_HOUSE']['VALUE'] ?></div>
                    </div>
                <?endif;?>
                <?if($arResult['PROPERTIES']['TYPE']['VALUE']):?>
                    <div class="info_item_content_tabs_ipr">
                        <div class="title_info_item_content_tabs_ipr">Операция</div>
                        <div class="value_info_item_content_tabs_ipr"><?= $arResult['PROPERTIES']['TYPE']['VALUE'] ?></div>
                    </div>
                <?endif;?>
            </div>
            <?if($arResult['DETAIL_TEXT']):?>
                <div class="tabs_ipr__content">
                    <div class="text_item_content_tabs_ipr">
                      <?=$arResult['DETAIL_TEXT']?>
                    </div>
                </div>
            <?endif;?>
            <div class="tabs_ipr__content">
                <div id="map_item_content_tabs_ipr">

                    <!-- <iframe src="https://yandex.ru/map-widget/v1/-/CCU5fRQJpD" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                  -->
                </div>
                <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=3312f999-ca0e-466c-8d39-0db0ecdab538"
                        type="text/javascript"></script>
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

                        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent)) {
                            //... отключаем перетаскивание карты
                            myMap.behaviors.disable('drag');
                        }
                    });

                </script>
            </div>
        </div>
    </div>
</section>

