<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>


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
                <div data-src="<?=$arItem["DETAIL_PICTURE"]['SRC'] ?>"
                     class="main-gallery__item lazyload">
                    <div class="main-gallery__item__text"><?=$arItem['NAME']?></div>
                    <?if($arItem["PROPERTIES"]['VIDEO']['VALUE']):?>
                    <div class="main-gallery__item__play">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 3L19 12L5 21V3Z" fill="white"/>
                        </svg>
                    </div>
                    <a class="main-gallery__item__link" href="<?=CFile::GetFileArray($arItem["PROPERTIES"]['VIDEO']['VALUE'])['SRC']?>"
                       data-fslightbox="video"
                       data-video-poster="<?=$arItem["DETAIL_PICTURE"]['SRC']?>"></a>
                    <?endif;?>
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