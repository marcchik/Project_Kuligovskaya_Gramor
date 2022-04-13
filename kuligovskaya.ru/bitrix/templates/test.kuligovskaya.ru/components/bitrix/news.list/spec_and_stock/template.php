<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<? foreach($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?pr($arParams);?>
    <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="info">
            <!--проверка на существование большого заголовка-->
            <? if(isset($arItem['PROPERTIES']['BIG_HEADER']['VALUE'])): ?>
                <div class="title">
                    <?=$arItem['PROPERTIES']['BIG_HEADER']['VALUE']?>
                    <!--проверка на существование большого подзаголовка-->
                    <? if(isset($arItem['PROPERTIES']['BIG_UNDER_HEADER']['VALUE'])): ?>
                        <span class="ml"><?=$arItem['PROPERTIES']['BIG_UNDER_HEADER']['VALUE']?></span>
                    <? endif ?>
                </div>
            <? endif ?>
        </div>
        <div class="imgPos">
            <!-- проверка на существование картинки-->
            <? if(isset($arItem["PROPERTIES"]["PICTURE1"]["VALUE"])): ?>
                <? $arImage = CFile::GetFileArray($arItem["PROPERTIES"]["PICTURE1"]["VALUE"]); ?>
                <div class="imgWrapMin1">
                    <img src="<?=$arImage["SRC"]?>" class="mobHide" alt="">
                    <img src="/bitrix/templates/main/img/nsminmob1.png" class="mobShow" alt="">
                </div>
            <? endif ?>

            <!-- проверка на существование картинки-->
            <? if(isset($arItem["PROPERTIES"]["PICTURE1"]["VALUE"])): ?>
                <? $arImage = CFile::GetFileArray($arItem["PROPERTIES"]["PICTURE1"]["VALUE"]); ?>
                <div class="imgWrapMin2">
                    <img src="<?=$arImage["SRC"]?>" class="mobHide" alt="">
                    <img src="/bitrix/templates/main/img/nsminmob2.png" class="mobShow" alt="">
                </div>
            <? endif ?>

            <!--проверка на существование картинки-->
            <? if(isset($arItem["PREVIEW_PICTURE"]['SRC'])): ?>
                <div class="imgWrapper">
                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
                </div>
            <? endif ?>

            <!-- проверка на существование картинки-->
            <? if(isset($arItem["PROPERTIES"]["PICTURE1"]["VALUE"])): ?>
                <? $arImage = CFile::GetFileArray($arItem["PROPERTIES"]["PICTURE1"]["VALUE"]); ?>
                <div class="imgWrapMin3">
                    <img src="<?=$arImage["SRC"]?>" class="mobHide" alt="">
                    <img src="/bitrix/templates/main/img/nsminmob3.png" class="mobShow" alt="">
                </div>
            <? endif ?>

            <!-- проверка на существование картинки-->
            <? if(isset($arItem["PROPERTIES"]["PICTURE1"]["VALUE"])): ?>
                <? $arImage = CFile::GetFileArray($arItem["PROPERTIES"]["PICTURE1"]["VALUE"]); ?>
                <div class="imgWrapMin4">
                    <img src="<?=$arImage["SRC"]?>" class="mobHide" alt="">
                    <img src="/bitrix/templates/main/img/nsminmob4.png" class="mobShow" alt="">
                </div>
            <? endif ?>
        </div>

        <!--проверка на существование маленького заголовка-->
        <? if(isset($arItem['PROPERTIES']['SMALL_HEADER']['VALUE'])): ?>
            <div class="textGray">
                <?=substr($arItem['PROPERTIES']['SMALL_HEADER']['VALUE'],0, 87)?><br>
                <?=substr($arItem['PROPERTIES']['SMALL_HEADER']['VALUE'],87)?>
            </div>
        <? endif ?>
    </div>
<? endforeach; ?>
