<?php

foreach ($arResult['ITEMS'] as $key => $item) {

    $arImage = CFile::GetFileArray($item['PROPERTIES']['ICON']['VALUE']);
    $arResult['ITEMS'][$key]['PROPERTIES']['ICON']['SRC'] = $arImage['SRC'];
}

$optionArray = array();

if($arParams['FILTER_NAME'] == "mobile") {
    foreach ($arResult['ITEMS'] as $key => $item) {
        if($item['PROPERTIES']['ADAPTIVE']['VALUE_XML_ID'] == 2) {
            $optionArray[] = $item;
        }
    }

    $arResult['ITEMS'] = $optionArray;
}


