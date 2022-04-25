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
    <div class="main-tabs__wrap">sa
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
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="promo__item__img__link"></a>
                                    <button class="promo__item__add btn-reset" type="button">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1.5L11.3175 6.195L16.5 6.9525L12.75 10.605L13.635 15.765L9 13.3275L4.365 15.765L5.25 10.605L1.5 6.9525L6.6825 6.195L9 1.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <div class="promo__item__numb">0<?=$count?></div>
                                </div>
                                <div class="promo__item__wrap">
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="promo__item__title">
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
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.002 19.25H19.252L19.252 19L19.25 4.99996L19.25 4.75H19H5H4.75V5V19V19.25H5H19.002ZM3.25 19V5C3.25 4.03507 4.03507 3.25 5 3.25H19C19.9649 3.25 20.75 4.03507 20.75 5V19C20.75 19.9649 19.9649 20.75 19 20.75H5C4.03507 20.75 3.25 19.9649 3.25 19Z" fill="white" stroke="#181818" stroke-width="0.5"/>
                                                    <path d="M15.25 9V8.75H15H12.25V7.25H16.75V11.75H15.25V9ZM8.75 15V15.25H9H11.75V16.75H7.25V12.25H8.75V15Z" fill="white" stroke="#181818" stroke-width="0.5"/>
                                                </svg>
                                                <?=$arItem['PROPERTIES']['SQUARE']['VALUE']?> м2
                                            </div>
                                        </div>
                                        <div class="promo__item__col">
                                            <div class="promo__item__text">
                                                Этаж:
                                            </div>
                                            <div class="promo__item__param">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.375 7.27645V15.7499H14.625V7.27645L9 2.58971L3.375 7.27645ZM2.4525 6.5812L8.64 1.42533C8.74107 1.34115 8.86846 1.29504 9 1.29504C9.13154 1.29504 9.25893 1.34115 9.36 1.42533L15.5475 6.5812C15.6109 6.63397 15.6618 6.70002 15.6968 6.77467C15.7318 6.84932 15.75 6.93076 15.75 7.0132V16.3124C15.75 16.4616 15.6907 16.6047 15.5852 16.7102C15.4798 16.8157 15.3367 16.8749 15.1875 16.8749H2.8125C2.66332 16.8749 2.52024 16.8157 2.41475 16.7102C2.30926 16.6047 2.25 16.4616 2.25 16.3124V7.0132C2.25003 6.93076 2.26819 6.84932 2.30318 6.77467C2.33817 6.70002 2.38915 6.63397 2.4525 6.5812Z" fill="white"/>
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
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="link">Подробнее</a>
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
                        if($arItem['PROPERTIES']['PROMO']['VALUE']) continue;
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
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="promo__item__img__link"></a>
                                    <button class="promo__item__add btn-reset" type="button">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1.5L11.3175 6.195L16.5 6.9525L12.75 10.605L13.635 15.765L9 13.3275L4.365 15.765L5.25 10.605L1.5 6.9525L6.6825 6.195L9 1.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <div class="promo__item__numb">0<?=$count?></div>
                                </div>
                                <div class="promo__item__wrap">
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="promo__item__title">
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
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.002 19.25H19.252L19.252 19L19.25 4.99996L19.25 4.75H19H5H4.75V5V19V19.25H5H19.002ZM3.25 19V5C3.25 4.03507 4.03507 3.25 5 3.25H19C19.9649 3.25 20.75 4.03507 20.75 5V19C20.75 19.9649 19.9649 20.75 19 20.75H5C4.03507 20.75 3.25 19.9649 3.25 19Z" fill="white" stroke="#181818" stroke-width="0.5"/>
                                                    <path d="M15.25 9V8.75H15H12.25V7.25H16.75V11.75H15.25V9ZM8.75 15V15.25H9H11.75V16.75H7.25V12.25H8.75V15Z" fill="white" stroke="#181818" stroke-width="0.5"/>
                                                </svg>
                                                <?=$arItem['PROPERTIES']['SQUARE']['VALUE']?> м2
                                            </div>
                                        </div>
                                        <div class="promo__item__col">
                                            <div class="promo__item__text">
                                                Этаж:
                                            </div>
                                            <div class="promo__item__param">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.375 7.27645V15.7499H14.625V7.27645L9 2.58971L3.375 7.27645ZM2.4525 6.5812L8.64 1.42533C8.74107 1.34115 8.86846 1.29504 9 1.29504C9.13154 1.29504 9.25893 1.34115 9.36 1.42533L15.5475 6.5812C15.6109 6.63397 15.6618 6.70002 15.6968 6.77467C15.7318 6.84932 15.75 6.93076 15.75 7.0132V16.3124C15.75 16.4616 15.6907 16.6047 15.5852 16.7102C15.4798 16.8157 15.3367 16.8749 15.1875 16.8749H2.8125C2.66332 16.8749 2.52024 16.8157 2.41475 16.7102C2.30926 16.6047 2.25 16.4616 2.25 16.3124V7.0132C2.25003 6.93076 2.26819 6.84932 2.30318 6.77467C2.33817 6.70002 2.38915 6.63397 2.4525 6.5812Z" fill="white"/>
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
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="link">Подробнее</a>
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
