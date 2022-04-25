<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div>
<?$count = 0;?>

    <? foreach($arResult["ITEMS"] as $arItem): ?>
    <?
    $count++;
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

        <? if($count == 1):?>
            <div class="main-catalog__wrap">
        <? endif; ?>

        <? if($count < 7):?>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="main-catalog__item lazyload" id="<?=$this->GetEditAreaId($arItem['ID']);?>"
               data-src="<?=$arItem['DETAIL_PICTURE']['SRC']?>">
                <div class="main-catalog__item__content">
                    <div class="main-catalog__item__title"><?=$arItem['NAME']?></div>
                    <div class="main-catalog__item__text">
                        Без комиссий и переплат
                        Закрытые предложения и продажи
                    </div>
                </div>
            </a>
        <? endif; ?>

        <? if($count == 6):?>
            </div>
            <div class="main-catalog__wrap main-catalog__wrap--more">
        <? endif; ?>
        <? if($count > 6):?>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="main-catalog__item lazyload" id="<?=$this->GetEditAreaId($arItem['ID']);?>"
               data-src="<?=$arItem['DETAIL_PICTURE']['SRC']?>">
                <div class="main-catalog__item__content">
                    <div class="main-catalog__item__title"><?=$arItem['NAME']?></div>
                    <div class="main-catalog__item__text">
                        Без комиссий и переплат
                        Закрытые предложения и продажи
                    </div>
                </div>
            </a>
        <? endif; ?>
    <? endforeach; ?>
</div>