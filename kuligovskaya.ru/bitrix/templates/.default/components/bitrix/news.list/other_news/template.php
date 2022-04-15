<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(empty($arResult)) return;
$count = 0;
?>

<div class="news__wrap">
    <? foreach($arResult["ITEMS"] as $arItem): ?>
        <?
        $count++;
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="news__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="news__item__data">
                <svg width="16" height="16">
                    <use xlink:href="./img/sprite.svg#calendar"></use>
                </svg>
                <?
                $monthsList = array(
                    "01"=>"янв","02"=>"фев","03"=>"мар",
                    "04"=>"апр","05"=>"май", "06"=>"июня",
                    "07"=>"июля","08"=>"авг","09"=>"сен",
                    "10"=>"окт","11"=>"ноя","12"=>"дек");
                $dataArray = explode("/", $arItem['ACTIVE_FROM']);
                ?>
                <?=$dataArray[1]." ".$monthsList[$dataArray[0]]." ".mb_substr($dataArray[2], 0, 4)?>
            </div>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news__item__title">
                <?=$arItem['NAME']?>
            </a>
            <div class="news__item__text">
                <?=$arItem['PREVIEW_TEXT']?>
            </div>
        </div>
        <?
        if($count > 2)
            break
        ?>
    <? endforeach; ?>
</div>