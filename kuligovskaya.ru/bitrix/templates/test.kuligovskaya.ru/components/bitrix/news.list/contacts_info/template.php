<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(empty($arResult)) return;
?>

<? foreach($arResult["ITEMS"] as $arItem): ?>
    <?

    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="contacts_items" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <?if($arItem['PROPERTIES']['PHONE']['VALUE']):?>
            <div class="contacts_item">
                <div class="mini_title_contacts_item">Контактный номер:</div>
                <div class="title_contacts_item"><?=$arItem['PROPERTIES']['PHONE']['VALUE']?></div>
                <div class="work_time_items">
                    <div class="work_time_item"><?=$arItem['PROPERTIES']['WORKTIME_B']['VALUE']?></div>
                </div>
            </div>
        <?endif;?>
        <?if($arItem['PROPERTIES']['CITY']['VALUE'] || $arItem['PROPERTIES']['ADDRESS']['VALUE']):?>
            <div class="contacts_item">
                <div class="mini_title_contacts_item">Адрес:</div>
                <div class="title_contacts_item"><?=$arItem['PROPERTIES']['CITY']['VALUE']?>, <?=$arItem['PROPERTIES']['ADDRESS']['VALUE']?></div>
                <div class="work_time_items">
                    <div class="work_time_item">
                        <?=$arItem['PROPERTIES']['WORKTIME_B']['VALUE']?><br>
                        <?=$arItem['PROPERTIES']['WORKTIME_F']['VALUE']?>
                    </div>
                </div>
            </div>
        <?endif;?>
        <?if($arItem['PROPERTIES']['EMAIL']['VALUE']):?>
            <div class="contacts_item">
                <div class="mini_title_contacts_item">Контактный e-mail:</div>
                <div class="title_contacts_item"><?=$arItem['PROPERTIES']['EMAIL']['VALUE']?></div>
            </div>
        <?endif;?>
    </div>
<? endforeach; ?>
