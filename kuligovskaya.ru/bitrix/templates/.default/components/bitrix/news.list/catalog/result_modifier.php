<?php


foreach ($arResult['ITEMS'] as $key => $item) {

    // пробелы в цене
    $arResult['ITEMS'][$key]['PROPERTIES']['PRICE']['VALUE'] = strrev(chunk_split(strrev($item['PROPERTIES']['PRICE']['VALUE']), 3, ' '));

    $count = 0;
    foreach ($item['PROPERTIES']['PICTURES']['VALUE'] as $number => $photoID) {
        $count++;
        if ($count > 4)
            continue;
        $arImage = CFile::GetFileArray($photoID);
        $arResult['ITEMS'][$key]['PROPERTIES']['PICTURE']['VALUE'][$number] = $arImage['SRC'];
    }
}

