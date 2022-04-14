<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(empty($arResult)) return;
?>

<div class="swiper" id="main-slider">

    <div class="swiper-wrapper">
        <? foreach($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="main-slider__item">
                    <div class="main-slider__item__bot">
                        <div class="wrap">
                            <div class="main-slider__item__content">
                                <div class="main-slider__item__content__wrap">
                                    <div class="tag">Акция</div>
                                    <div class="main-slider__item__title">
                                        <?=$arItem['NAME']?>
                                    </div>
                                    <div class="main-slider__item__text">
                                        <?=$arItem['PREVIEW_TEXT']?>
                                    </div>
                                    <a href="" class="btn">Подробнее</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
    <div class="swiper__action">
        <div class="wrap">
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>

