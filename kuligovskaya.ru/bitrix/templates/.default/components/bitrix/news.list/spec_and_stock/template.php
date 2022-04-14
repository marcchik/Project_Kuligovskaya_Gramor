<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="wrap">
    <ul class="main-tabs__nav list-reset">
        <li class="active">
            Спецпредложения
        </li>
        <li>
            Акции
        </li>
    </ul>
    <div class="main-tabs__wrap">
        <div class="main-tabs__content active">
            <div class="custom-swiper promo">
                <div class="swiper-wrapper">
                    <?$count = 0;?>
                    <? foreach($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $count++;
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>

                        <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="promo__item">
                                <div class="promo__item__img">
                                    <img data-src="<?= SITE_TEMPLATE_PATH ?>/imgmain/tabs/1.jpg" class="lazyload">
                                    <a href="" class="promo__item__img__link"></a>
                                    <button class="promo__item__add btn-reset" type="button">
                                        <svg width="18" height="18">
                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/imgsprite.svg#star"></use>
                                        </svg>
                                    </button>
                                    <div class="promo__item__numb">0<?=$count?></div>
                                </div>
                                <div class="promo__item__wrap">
                                    <a href="" class="promo__item__title">
                                        <?=$arItem['NAME']?>
                                    </a>
                                    <div class="promo__item__text">
                                        <?=$arItem['PROPERTIES']['ADDRESS']['VALUE']?>
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
                                                <?=$arItem['PROPERTIES']['SQUARE']['VALUE']?> м2
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
                                                <?=$arItem['PROPERTIES']['FLOOR']['VALUE']?>/<?=$arItem['PROPERTIES']['FLOORS']['VALUE']?> этаж
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
                        <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="info">
                                <!--проверка на существование большого заголовка-->
                                <? if(isset($arItem['PROPERTIES']['BIG_HEADER']['VALUE'])): ?>
                                    <div class="title">
                                        <?=$arItem['PROPERTIES']['BIG_HEADER']['VALUE']?>
                                        <!--проверка на существование большого подзаголовка-->
                                        <? if(isset($arItem['PROPERTIES']['BIG_UNDER_HEADER']['VALUE'])): ?>
                                            <span class="ml"><?=$arItem['PROPERTIES']['BIG_UNDER_HEADER']['VALUE']?></span>
                                        <? endif ?>
                                    </div>
                                <? endif ?>
                            </div>
                            <div class="imgPos">
                                <!-- проверка на существование картинки-->
                                <? if(isset($arItem["PROPERTIES"]["PICTURE1"]["VALUE"])): ?>
                                    <? $arImage = CFile::GetFileArray($arItem["PROPERTIES"]["PICTURE1"]["VALUE"]); ?>
                                    <div class="imgWrapMin1">
                                        <img src="<?=$arImage["SRC"]?>" class="mobHide" alt="">
                                        <img src="/bitrix/templates/main/img/nsminmob1.png" class="mobShow" alt="">
                                    </div>
                                <? endif ?>

                                <!-- проверка на существование картинки-->
                                <? if(isset($arItem["PROPERTIES"]["PICTURE1"]["VALUE"])): ?>
                                    <? $arImage = CFile::GetFileArray($arItem["PROPERTIES"]["PICTURE1"]["VALUE"]); ?>
                                    <div class="imgWrapMin2">
                                        <img src="<?=$arImage["SRC"]?>" class="mobHide" alt="">
                                        <img src="/bitrix/templates/main/img/nsminmob2.png" class="mobShow" alt="">
                                    </div>
                                <? endif ?>

                                <!--проверка на существование картинки-->
                                <? if(isset($arItem["PREVIEW_PICTURE"]['SRC'])): ?>
                                    <div class="imgWrapper">
                                        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
                                    </div>
                                <? endif ?>

                                <!-- проверка на существование картинки-->
                                <? if(isset($arItem["PROPERTIES"]["PICTURE1"]["VALUE"])): ?>
                                    <? $arImage = CFile::GetFileArray($arItem["PROPERTIES"]["PICTURE1"]["VALUE"]); ?>
                                    <div class="imgWrapMin3">
                                        <img src="<?=$arImage["SRC"]?>" class="mobHide" alt="">
                                        <img src="/bitrix/templates/main/img/nsminmob3.png" class="mobShow" alt="">
                                    </div>
                                <? endif ?>

                                <!-- проверка на существование картинки-->
                                <? if(isset($arItem["PROPERTIES"]["PICTURE1"]["VALUE"])): ?>
                                    <? $arImage = CFile::GetFileArray($arItem["PROPERTIES"]["PICTURE1"]["VALUE"]); ?>
                                    <div class="imgWrapMin4">
                                        <img src="<?=$arImage["SRC"]?>" class="mobHide" alt="">
                                        <img src="/bitrix/templates/main/img/nsminmob4.png" class="mobShow" alt="">
                                    </div>
                                <? endif ?>
                            </div>

                            <!--проверка на существование маленького заголовка-->
                            <? if(isset($arItem['PROPERTIES']['SMALL_HEADER']['VALUE'])): ?>
                                <div class="textGray">
                                    <?=substr($arItem['PROPERTIES']['SMALL_HEADER']['VALUE'],0, 87)?><br>
                                    <?=substr($arItem['PROPERTIES']['SMALL_HEADER']['VALUE'],87)?>
                                </div>
                            <? endif ?>
                        </div>
                    <? endforeach; ?>
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
