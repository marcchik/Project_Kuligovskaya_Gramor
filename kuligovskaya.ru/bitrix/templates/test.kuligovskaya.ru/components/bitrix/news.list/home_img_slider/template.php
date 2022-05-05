<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(empty($arResult)) return;
?>

<div class="main-slider__wrap">
    <div class="swiper" id="main-slider-img">
        <div class="swiper-wrapper">
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
                    <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="main-slider-img__item">
                            <img class="swiper-lazy main-slider__img"
                                 data-src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                        </div>
                    </div>
                <?endif;?>
            <? endforeach; ?>
        </div>
    </div>

    <div class="swiper" id="main-slider-img-sub">
        <div class="swiper-wrapper">
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
                    <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="main-slider-img__item2">
                            <img class="main-slider__img2" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
                        </div>
                    </div>
                <?endif;?>
            <? endforeach; ?>
        </div>
    </div>
</div>

