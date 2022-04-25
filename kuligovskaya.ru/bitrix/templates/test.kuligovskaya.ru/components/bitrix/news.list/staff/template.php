<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(empty($arResult)) return;
$count = 0;

?>


<div class="staff">
    <div class="staff__block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="staff__title">Руководители</div>
        <div class="staff__list">
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <?
                if($arItem['IBLOCK_SECTION_ID'] == 14) continue;
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="staff__item lazyload" data-src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="staff__item__bot">
                        <div class="staff__name"><?=$arItem['NAME']?></div>
                        <div class="staff__des">
                            <?=$arItem['PROPERTIES']['POST']['VALUE']?><br>
                            <?=$arItem['PROPERTIES']['PHONE']['VALUE']?><br>
                            <?=$arItem['PROPERTIES']['EMAIL']['VALUE']?><br>
                        </div>
                    </div>
                </a>
            <? endforeach; ?>
        </div>
    </div>
    <div class="staff__block">
        <div class="staff__title">Отдел продаж</div>
        <div class="staff__list">
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <?
                if($arItem['IBLOCK_SECTION_ID'] == 13) continue;
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="staff__item lazyload" data-src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="staff__item__bot">
                        <div class="staff__name"><?=$arItem['NAME']?></div>
                        <div class="staff__des">
                            <?=$arItem['PROPERTIES']['POST']['VALUE']?><br>
                            <?=$arItem['PROPERTIES']['PHONE']['VALUE']?><br>
                            <?=$arItem['PROPERTIES']['EMAIL']['VALUE']?><br>
                        </div>
                    </div>
                </a>
            <? endforeach; ?>
        </div>
    </div>
</div>