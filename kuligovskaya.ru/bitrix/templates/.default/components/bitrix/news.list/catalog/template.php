<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(empty($arResult)) return;
$count = 0;
?>




<section class="catalog">
    <div class="wrap">
        <div class="title_text_catalog">
            <div class="title_catalog">
                Городская недвижимость
            </div>
            <div class="text_catalog">
                Каждый из нас понимает очевидную вещь: консультация с широким активом играет определяющее значение для как самодостаточных, так и внешне зависимых концептуальных
            </div>
        </div>
        <div class="filtr_catalog">
            <div class="title_filtr_catalog">Фильтр:</div>
            <div class="custom-select">
                <select>
                    <option></option>
                    <option selected="" disabled="">
                        Район
                    </option>
                    <option>
                        Район 1
                    </option>
                    <option>
                        Район 2
                    </option>
                </select>
                <div class="select-selected">
                    Район 1
                </div><div class="select-items select-hide"><div>
                        Район
                    </div><div class="same-as-selected">
                        Район 1
                    </div><div>
                        Район 2
                    </div></div></div>
            <div class="custom-select">
                <select>
                    <option></option>
                    <option selected="" disabled="">
                        Застройщик
                    </option>
                    <option>
                        Застройщик 1
                    </option>
                    <option>
                        Застройщик 2
                    </option>
                </select>
                <div class="select-selected">
                    Застройщик
                </div><div class="select-items select-hide"><div>
                        Застройщик
                    </div><div>
                        Застройщик 1
                    </div><div>
                        Застройщик 2
                    </div></div></div>
            <div class="custom-select">
                <select>
                    <option></option>
                    <option selected="" disabled="">
                        Площадь(м2)
                    </option>
                    <option>
                        50 - 60
                    </option>
                    <option>
                        60 - 70
                    </option>
                </select>
                <div class="select-selected">
                    Площадь(м2)
                </div><div class="select-items select-hide"><div>
                        Площадь(м2)
                    </div><div>
                        50 - 60
                    </div><div>
                        60 - 70
                    </div></div></div>
            <div class="custom-select">
                <select>
                    <option></option>
                    <option selected="" disabled="">
                        Комнат
                    </option>
                    <option>
                        1 ком.
                    </option>
                    <option>
                        2 ком.
                    </option>
                    <option>
                        3 ком.
                    </option>
                </select>
                <div class="select-selected">
                    Комнат
                </div><div class="select-items select-hide"><div>
                        Комнат
                    </div><div>
                        1 ком.
                    </div><div>
                        2 ком.
                    </div><div>
                        3 ком.
                    </div></div></div>
            <div class="custom-select">
                <select>
                    <option></option>
                    <option selected="" disabled="">
                        Цена
                    </option>
                    <option>
                        1 млн - 3 млн
                    </option>
                    <option>
                        3 млн - 5 млн
                    </option>
                    <option>
                        5 млн - 15 млн
                    </option>
                </select>
                <div class="select-selected">
                    Цена
                </div><div class="select-items select-hide"><div>
                        Цена
                    </div><div>
                        1 млн - 3 млн
                    </div><div>
                        3 млн - 5 млн
                    </div><div>
                        5 млн - 15 млн
                    </div></div></div>
        </div>
        <div class="top_sort_catalog">
            <div class="custom-select">
                <select>
                    <option></option>
                    <option selected>Вид</option>
                    <option>Список</option>
                </select>
            </div>
            <div class="custom-select">
                <select>
                    <option></option>
                    <option selected>Сортировка</option>
                    <option>По дате</option>
                </select>
            </div>
        </div>
        <div class="items_box_catalog">
            <? $count = 0; ?>
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <?
                $count++;
                if ($count > 3) {
                    break;
                };
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div class="item_box_catalog" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="photos_item_box_catalog">
                        <div class="swiper photos_swiper_catalog">
                            <button class="promo__item__add btn-reset" type="button">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1.5L11.3175 6.195L16.5 6.9525L12.75 10.605L13.635 15.765L9 13.3275L4.365 15.765L5.25 10.605L1.5 6.9525L6.6825 6.195L9 1.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>

                            <div class="swiper-wrapper">
                                <? foreach ($arItem['PROPERTIES']['PICTURES']['VALUE'] as $photo) : ?>
                                    <?
                                    $arImage = CFile::GetFileArray($photo);
                                    ?>
                                    <div class="swiper-slide">
                                        <img src="<?=$arImage['SRC']?>" class="photo_item_slide">
                                    </div>
                                <? endforeach; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="info_item_box_catalog">
                        <div class="top_info_item_box_catalog">
                            <div class="title_top_info_item_box_catalog"><?=$arItem['NAME']?></div>
                            <div class="params_top_info_item_box_catalog">
                                <div class="item_param_top_info_item_box_catalog">Мат. капитал</div>
                                <div class="item_param_top_info_item_box_catalog">Низкие проценты</div>
                            </div>
                        </div>
                        <div class="bottom_info_item_box_catalog">
                            <div class="left_bottom_info_item_box_catalog">
                                <div class="adress_box">
                                    <div class="mini_title_adress_box">Адрес:</div>
                                    <div class="text_adress_box">г.<?=$arItem['PROPERTIES']['CITY']['VALUE'].", ".$arItem['PROPERTIES']['ADDRESS']['VALUE']?></div>
                                </div>
                                <div class="company_box">
                                    <div class="mini_title_company_box">Строительная компания:</div>
                                    <div class="logo_name_company_box">
                                        <div class="logo_company_box">
                                            <img src="" alt="">
                                        </div>
                                        <div class="name_company_box">“Поляна”</div>
                                    </div>
                                </div>
                                <div class="params_item_catalog">
                                    <div class="item_params_item_catalog">
                                        <div class="mini_title_item_params_item_catalog">Метраж:</div>
                                        <div class="icon_text_item_params_item_catalog">
                                            <div class="icon_item_params_item_catalog">
                                                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/bx_bx-area.svg" alt="">
                                            </div>
                                            <div class="text_item_params_item_catalog"><?=$arItem['PROPERTIES']['SQUARE']['VALUE']?> м<sup>2</sup></div>
                                        </div>
                                    </div>
                                    <div class="item_params_item_catalog">
                                        <div class="mini_title_item_params_item_catalog">Этаж:</div>
                                        <div class="icon_text_item_params_item_catalog">
                                            <div class="icon_item_params_item_catalog">
                                                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/ep_house.svg" alt="">
                                            </div>
                                            <div class="text_item_params_item_catalog"><?=$arItem['PROPERTIES']['FLOOR']['VALUE']?>/<?=$arItem['PROPERTIES']['FLOORS']['VALUE']?>  этаж</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right_bottom_info_item_box_catalog">
                                <div class="price_box_right_bottom_info_catalog">
                                    <div class="mini_title_price_box_right_bottom_info_catalog">Цена:</div>
                                    <div class="full_price_price_box_right_bottom_info_catalog"><?=$arItem['PROPERTIES']['PRICE']['VALUE']?> Р</div>
                                </div>
                                <div class="btn_price_box_right_bottom_info_catalog" onclick="OpenModal('ask_viewing')">Оставить заявку</div>
                                <div class="mini_btn_ipoteka_bottom_info_catalog" onclick="OpenModal('info_modal')">Ипотека</div>
                            </div>
                        </div>
                    </div>
                </div>

            <? endforeach; ?>
        </div>
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
<section class="catalog">
    <div class="wrap">
        <div class="items_box_catalog">
            <? $count = 0; ?>
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <?
                $count++;
                if ($count <= 3) {
                    continue;
                };
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div class="item_box_catalog" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="photos_item_box_catalog">
                        <div class="swiper photos_swiper_catalog">
                            <button class="promo__item__add btn-reset" type="button">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1.5L11.3175 6.195L16.5 6.9525L12.75 10.605L13.635 15.765L9 13.3275L4.365 15.765L5.25 10.605L1.5 6.9525L6.6825 6.195L9 1.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>

                            <div class="swiper-wrapper">
                                <? foreach ($arItem['PROPERTIES']['PICTURES']['VALUE'] as $photo) : ?>
                                    <?
                                    $arImage = CFile::GetFileArray($photo);
                                    ?>
                                    <div class="swiper-slide">
                                        <img src="<?=$arImage['SRC']?>" class="photo_item_slide">
                                    </div>
                                <? endforeach; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="info_item_box_catalog">
                        <div class="top_info_item_box_catalog">
                            <div class="title_top_info_item_box_catalog"><?=$arItem['NAME']?></div>
                            <div class="params_top_info_item_box_catalog">
                                <div class="item_param_top_info_item_box_catalog">Мат. капитал</div>
                                <div class="item_param_top_info_item_box_catalog">Низкие проценты</div>
                            </div>
                        </div>
                        <div class="bottom_info_item_box_catalog">
                            <div class="left_bottom_info_item_box_catalog">
                                <div class="adress_box">
                                    <div class="mini_title_adress_box">Адрес:</div>
                                    <div class="text_adress_box">г.<?=$arItem['PROPERTIES']['CITY']['VALUE'].", ".$arItem['PROPERTIES']['ADDRESS']['VALUE']?></div>
                                </div>
                                <div class="company_box">
                                    <div class="mini_title_company_box">Строительная компания:</div>
                                    <div class="logo_name_company_box">
                                        <div class="logo_company_box">
                                            <img src="" alt="">
                                        </div>
                                        <div class="name_company_box">“Поляна”</div>
                                    </div>
                                </div>
                                <div class="params_item_catalog">
                                    <div class="item_params_item_catalog">
                                        <div class="mini_title_item_params_item_catalog">Метраж:</div>
                                        <div class="icon_text_item_params_item_catalog">
                                            <div class="icon_item_params_item_catalog">
                                                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/bx_bx-area.svg" alt="">
                                            </div>
                                            <div class="text_item_params_item_catalog"><?=$arItem['PROPERTIES']['SQUARE']['VALUE']?> м<sup>2</sup></div>
                                        </div>
                                    </div>
                                    <div class="item_params_item_catalog">
                                        <div class="mini_title_item_params_item_catalog">Этаж:</div>
                                        <div class="icon_text_item_params_item_catalog">
                                            <div class="icon_item_params_item_catalog">
                                                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/ep_house.svg" alt="">
                                            </div>
                                            <div class="text_item_params_item_catalog"><?=$arItem['PROPERTIES']['FLOOR']['VALUE']?>/<?=$arItem['PROPERTIES']['FLOORS']['VALUE']?>  этаж</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right_bottom_info_item_box_catalog">
                                <div class="price_box_right_bottom_info_catalog">
                                    <div class="mini_title_price_box_right_bottom_info_catalog">Цена:</div>
                                    <div class="full_price_price_box_right_bottom_info_catalog"><?=$arItem['PROPERTIES']['PRICE']['VALUE']?> Р</div>
                                </div>
                                <div class="btn_price_box_right_bottom_info_catalog" onclick="OpenModal('ask_viewing')">Оставить заявку</div>
                                <div class="mini_btn_ipoteka_bottom_info_catalog" onclick="OpenModal('info_modal')">Ипотека</div>
                            </div>
                        </div>
                    </div>
                </div>

            <? endforeach; ?>
        </div>
        <div class="bottom_sort_catalog">
            <div class="pagination__left">
                <a href="javascript:" class="active">1</a> <a href="">2</a> <a href="">3</a> <a href="">4</a> <a
                        href="">5</a> <a href="">6</a> <a href="">7</a> <a href="">8</a>
            </div>
            <div class="pagination__select">
                <div class="custom-select">
                    <select>
                        <option></option>
                        <option selected="">Показывать по 10</option>
                        <option>Показывать по 20</option>
                        <option>Показывать по 50</option>
                    </select>
                </div>
            </div>
            <div class="pagination__arows">
                <a href=""> </a> <a href=""> </a>
            </div>
        </div>
    </div>
</section>

