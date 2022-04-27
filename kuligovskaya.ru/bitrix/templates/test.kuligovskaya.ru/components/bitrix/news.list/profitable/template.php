<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(empty($arResult)) return;
?>


<div class="wrap">
    <h2 class="h-title">
        Почему через нас покупать выгодно
    </h2>
    <div class="company__numbers">
        <? foreach($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div class="company__numbers__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="big">
                    <?=$arItem['PROPERTIES']['VALUE_NUMBER']['VALUE']?>
                    <span>
                        <?=$arItem['PROPERTIES']['PROPS_NUMBER']['VALUE']?>
                    </span>
                </div>
                <div class="small">
                    <?=$arItem['PREVIEW_TEXT']?>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>

