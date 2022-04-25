<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<?//echo '<pre>';print_r($arResult);echo '</pre>';?>

<?if(!$arResult['EMPTY']) {?>
    <a class="filt-open"><?=GetMessage('CF_FILTERS')?> <span class="disp"></span></a>
    <form id="form_smart_filter" name="<?=$arResult["FILTER_NAME"]."_form"?>" action="<?=$arResult["FORM_ACTION"]?>" method="get">
        <div class="filt-wrap">
            <div class="filt-title"><?=GetMessage('CF_FILTERS')?></div>

            <?foreach($arResult["ITEMS"] as $key=>$arItem){?>

                <?if(count($arItem['VALUES']) == 0 || ($arItem['PROPERTY_TYPE'] == 'N' && (intval($arItem["VALUES"]["MAX"]["VALUE"]) == 0 ||  $arItem["VALUES"]["MAX"]["VALUE"] == $arItem["VALUES"]["MIN"]["VALUE"]) ) ) continue;?>

                <?if($arItem['PROPERTY_TYPE'] == 'N'){?>

                    <?
                    $after = false;
                    if($arItem["VALUES"]["MIN"]["HTML_VALUE"] && ($arItem["VALUES"]["MIN"]["HTML_VALUE"] > $arItem["VALUES"]["MIN"]["VALUE"] ||
                            $arItem["VALUES"]["MAX"]["HTML_VALUE"] < $arItem["VALUES"]["MAX"]["VALUE"]) )
                    {
                        $after = true;
                        $set_filter = true;
                    }
                    ?>

                    <div class="filt-row n">
                        <div class="filt-but <?=$after?'after':''?>">
                            <?if($after){?>
                                <?
                                $name = '<b>'.$arItem['NAME'].'</b><span class="for-after">: '.$arItem["VALUES"]["MIN"]["HTML_VALUE"].' - '.$arItem["VALUES"]["MAX"]["HTML_VALUE"].'</span>';
                                ?>
                                <?=$name?>
                            <?}else{?>
                                <?=$arItem['NAME']?>
                            <?}?>
                            <span class="disp"></span><span class="dispafter"></span>
                        </div>
                        <div class="dop">
                            <div class='filt-price'>
                                <div class="insider  ">
                                    <label>
                                        <input type="text" name="<?=$arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>" class='min filter-check-item <?=$after?'':'noselect'?>' start-data="<?=intval($arItem["VALUES"]["MIN"]["VALUE"])?>" step-data="1" value="<?=intval($arItem["VALUES"]["MIN"]["HTML_VALUE"]?$arItem["VALUES"]["MIN"]["HTML_VALUE"]:$arItem["VALUES"]["MIN"]["VALUE"])?>">
                                    </label>
                                    <label class="right">
                                        <input type="text" name="<?=$arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>" class='max filter-check-item <?=$after?'':'noselect'?>' stop-data="<?=intval($arItem["VALUES"]["MAX"]["VALUE"])?>" value="<?=intval($arItem["VALUES"]["MAX"]["HTML_VALUE"]?$arItem["VALUES"]["MAX"]["HTML_VALUE"]:$arItem["VALUES"]["MAX"]["VALUE"])?>">
                                    </label>
                                </div>
                                <div class="insider big ">
                                    <div class="price-slider"></div>
                                </div>
                            </div>
                            <a href="#" class="sub-but"><?=GetMessage('CF_APPLY')?></a>
                        </div>
                    </div>

                <?}else{?>

                    <div class="filt-row ch">
                        <div class="filt-but <?=$arItem['CHECKED_ITEMS']?'after':''?>">
                            <div class="filt-row-title">
                                <?if($arItem['CHECKED_ITEMS']){?>
                                    <?
                                    $name = '<b>'.$arItem['NAME'].'</b><span class="for-after">: ';
                                    foreach($arItem['CHECKED_ITEMS'] as $key=>$item)
                                    {
                                        if($key > 0)
                                        {
                                            $name .= ', ';
                                        }
                                        $name .= $item['VALUE'];
                                    }
                                    $set_filter = true;
                                    ?>
                                    <?=$name.'</span>'?>
                                <?}else{?>
                                    <?=$arItem['NAME']?>
                                <?}?>

                            </div>
                            <span class="disp"></span>
                            <span class="dispafter"></span>
                        </div>
                        <div class="dop">
                            <div class="check-wrap">
                                <?foreach($arItem['VALUES'] as $value){?>
                                    <div class="check">
                                        <input class="checkbox" type="checkbox" <?=$value['DISABLED']?'disabled="disabled"':''?> <?=$value['CHECKED']?'checked="checked"':''?> name="<?=$value['CONTROL_NAME']?>" id="<?=$value['CONTROL_NAME']?>" value="<?=$value['HTML_VALUE']?>">
                                        <label for="<?=$value['CONTROL_NAME']?>"><?=$value['VALUE']?></label>
                                    </div>
                                <?}?>
                            </div>
                            <a href="#" class="sub-but"><?=GetMessage('CF_APPLY')?></a>
                        </div>
                    </div>

                <?}?>

            <?}?>

        </div>
        <?if($_REQUEST['set_filter'] && $set_filter){?>
        <a class="filt-res" title="<?=GetMessage('CF_RESET')?>"><?=GetMessage('CF_RESET')?></a>
        <?}?>
    </form>
<?}?>
<!--<div class="filtr_catalog">-->
<!--    <div class="title_filtr_catalog">Фильтр:</div>-->
<!--    <div class="custom-select">-->
<!--        <select>-->
<!--            <option></option>-->
<!--            <option selected="" disabled="">-->
<!--                Район-->
<!--            </option>-->
<!--            <option>-->
<!--                Район 1-->
<!--            </option>-->
<!--            <option>-->
<!--                Район 2-->
<!--            </option>-->
<!--        </select>-->
<!--        <div class="select-selected">-->
<!--            Район 1-->
<!--        </div><div class="select-items select-hide"><div>-->
<!--                Район-->
<!--            </div><div class="same-as-selected">-->
<!--                Район 1-->
<!--            </div><div>-->
<!--                Район 2-->
<!--            </div></div></div>-->
<!--    <div class="custom-select">-->
<!--        <select>-->
<!--            <option></option>-->
<!--            <option selected="" disabled="">-->
<!--                Застройщик-->
<!--            </option>-->
<!--            <option>-->
<!--                Застройщик 1-->
<!--            </option>-->
<!--            <option>-->
<!--                Застройщик 2-->
<!--            </option>-->
<!--        </select>-->
<!--        <div class="select-selected">-->
<!--            Застройщик-->
<!--        </div><div class="select-items select-hide"><div>-->
<!--                Застройщик-->
<!--            </div><div>-->
<!--                Застройщик 1-->
<!--            </div><div>-->
<!--                Застройщик 2-->
<!--            </div></div></div>-->
<!--    <div class="custom-select">-->
<!--        <select>-->
<!--            <option></option>-->
<!--            <option selected="" disabled="">-->
<!--                Площадь(м2)-->
<!--            </option>-->
<!--            <option>-->
<!--                50 - 60-->
<!--            </option>-->
<!--            <option>-->
<!--                60 - 70-->
<!--            </option>-->
<!--        </select>-->
<!--        <div class="select-selected">-->
<!--            Площадь(м2)-->
<!--        </div><div class="select-items select-hide"><div>-->
<!--                Площадь(м2)-->
<!--            </div><div>-->
<!--                50 - 60-->
<!--            </div><div>-->
<!--                60 - 70-->
<!--            </div></div></div>-->
<!--    <div class="custom-select">-->
<!--        <select>-->
<!--            <option></option>-->
<!--            <option selected="" disabled="">-->
<!--                Комнат-->
<!--            </option>-->
<!--            <option>-->
<!--                1 ком.-->
<!--            </option>-->
<!--            <option>-->
<!--                2 ком.-->
<!--            </option>-->
<!--            <option>-->
<!--                3 ком.-->
<!--            </option>-->
<!--        </select>-->
<!--        <div class="select-selected">-->
<!--            Комнат-->
<!--        </div><div class="select-items select-hide"><div>-->
<!--                Комнат-->
<!--            </div><div>-->
<!--                1 ком.-->
<!--            </div><div>-->
<!--                2 ком.-->
<!--            </div><div>-->
<!--                3 ком.-->
<!--            </div></div></div>-->
<!--    <div class="custom-select">-->
<!--        <select>-->
<!--            <option></option>-->
<!--            <option selected="" disabled="">-->
<!--                Цена-->
<!--            </option>-->
<!--            <option>-->
<!--                1 млн - 3 млн-->
<!--            </option>-->
<!--            <option>-->
<!--                3 млн - 5 млн-->
<!--            </option>-->
<!--            <option>-->
<!--                5 млн - 15 млн-->
<!--            </option>-->
<!--        </select>-->
<!--        <div class="select-selected">-->
<!--            Цена-->
<!--        </div><div class="select-items select-hide"><div>-->
<!--                Цена-->
<!--            </div><div>-->
<!--                1 млн - 3 млн-->
<!--            </div><div>-->
<!--                3 млн - 5 млн-->
<!--            </div><div>-->
<!--                5 млн - 15 млн-->
<!--            </div></div></div>-->
<!--</div>-->




