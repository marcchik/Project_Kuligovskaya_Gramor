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
                                    <?if(!empty($arItem['PROPERTIES']['TYPE']['VALUE'])):?>
                                        <div class="tag">Акция</div>
                                    <?endif;?>
                                    <?if(!empty($arItem['NAME'])):?>
                                        <div class="main-slider__item__title">
                                            <?=$arItem['NAME']?>
                                        </div>
                                    <?endif;?>
                                    <?if(!empty($arItem['PREVIEW_TEXT'])):?>
                                        <div class="main-slider__item__text">
                                            <?=$arItem['PREVIEW_TEXT']?>
                                        </div>
                                    <?endif;?>
                                    <?if(!empty($arItem['PROPERTIES']['LINK']['VALUE']) && !empty($arItem['PROPERTIES']['BUTTON_TEXT']['VALUE'])):?>
                                        <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" class="btn"><?=$arItem['PROPERTIES']['BUTTON_TEXT']['VALUE']?></a>
                                    <?endif;?>
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

