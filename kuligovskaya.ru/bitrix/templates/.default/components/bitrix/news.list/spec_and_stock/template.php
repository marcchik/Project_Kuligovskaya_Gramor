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
                        if(!$arItem['PROPERTIES']['SPEC']['VALUE']) continue;
                        $count++;
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="promo__item">
                                <div class="promo__item__img">
                                    <!--проверка на существование картинки-->
                                    <? if(isset($arItem["DETAIL_PICTURE"]['SRC'])): ?>
                                        <img data-src="<?=$arItem['DETAIL_PICTURE']['SRC']?>"  alt="<?=$arItem['DETAIL_PICTURE']['ALT']?>" class="lazyload">
                                    <? endif ?>
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
                    <? endforeach; ?>
                </div>

                <div class="custom-swiper__bot">
                    <div class="swiper-pagination-custom"></div>
                    <div class="swiper-arrows-custom">
                        <div class="swiper-button-prev-custom">
                            <svg width="7.5" height="15" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.5 15.5L0.999999 8L8.5 0.5" stroke="white"/>
                                <path d="M8.5 15.5L0.999999 8L8.5 0.5" stroke="white"/>
                                <path d="M8.5 15.5L0.999999 8L8.5 0.5" stroke="white"/>
                            </svg>
                        </div>
                        <div class="swiper-arrows-custom__separator"></div>
                        <div class="swiper-button-next-custom">
                            <svg width="7.5" height="15" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 0.5L8 8L0.5 15.5" stroke="white"/>
                                <path d="M0.5 0.5L8 8L0.5 15.5" stroke="white"/>
                                <path d="M0.5 0.5L8 8L0.5 15.5" stroke="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-tabs__content">
            <div class="custom-swiper promo">
                <div class="swiper-wrapper">
                    <?$count = 0;?>
                    <? foreach($arResult["ITEMS"] as $arItem): ?>
                        <?
                        if($arItem['PROPERTIES']['SPEC']['VALUE']) continue;
                        $count++;
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="promo__item">
                                <div class="promo__item__img">
                                    <!--проверка на существование картинки-->
                                    <? if(isset($arItem["DETAIL_PICTURE"]['SRC'])): ?>
                                        <img data-src="<?=$arItem['DETAIL_PICTURE']['SRC']?>"  alt="<?=$arItem['DETAIL_PICTURE']['ALT']?>" class="lazyload">
                                    <? endif ?>
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
                    <? endforeach;?>
                </div>

                <div class="custom-swiper__bot">
                    <div class="swiper-pagination-custom"></div>
                    <div class="swiper-arrows-custom">
                        <div class="swiper-button-prev-custom">
                            <svg width="7.5" height="15" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.5 15.5L0.999999 8L8.5 0.5" stroke="white"/>
                                <path d="M8.5 15.5L0.999999 8L8.5 0.5" stroke="white"/>
                                <path d="M8.5 15.5L0.999999 8L8.5 0.5" stroke="white"/>
                            </svg>
                        </div>
                        <div class="swiper-arrows-custom__separator"></div>
                        <div class="swiper-button-next-custom">
                            <svg width="7.5" height="15" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 0.5L8 8L0.5 15.5" stroke="white"/>
                                <path d="M0.5 0.5L8 8L0.5 15.5" stroke="white"/>
                                <path d="M0.5 0.5L8 8L0.5 15.5" stroke="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
