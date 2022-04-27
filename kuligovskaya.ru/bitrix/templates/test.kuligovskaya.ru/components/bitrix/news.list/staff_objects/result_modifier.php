<?php

$flag = false;
foreach($arResult["ITEMS"] as $arItem) {
    if($arItem['PROPERTIES']['STAFF']['VALUE'] == $_REQUEST['ID'])
        $flag = true;
}
if(!$flag)
    $arResult = [];



