<?php
$SECTION_ID = $_REQUEST['ID'];

$res = CIBlockSection::GetByID($SECTION_ID);
if($ar_res = $res->GetNext()) {
    $arResult['CUR_SECTION_NAME'] = $ar_res['NAME'];
}
$count = 0;

// массив с объектами конкретного раздела
$sectionArray = array();

foreach ($arResult['ITEMS'] as $key => $item) {


    if ($item['IBLOCK_SECTION_ID'] != $SECTION_ID) {
        continue;
    } else {
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

        $sectionArray[$count] = $arResult['ITEMS'][$key];
        $count++;
    }
}

$arResult['ITEMS'] = $sectionArray;





