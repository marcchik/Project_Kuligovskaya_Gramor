<?php
// получаем элемент сотрудника объекта по ID
$staff = CIBlockElement::GetByID($arResult['PROPERTIES']['STAFF']['VALUE']);

$staffArray = $staff->GetNext();

$staffID = $staffArray['ID'];
$staffIBLOCK_ID = $staffArray['IBLOCK_ID'];

$arImage = CFile::GetFileArray($staffArray['DETAIL_PICTURE']);

// получаем свойства сотрудника
$properties = CIBlockElement::GetProperty($staffIBLOCK_ID, $staffID, array("sort" => "asc"), Array());


while ($ob = $properties->GetNext()) {
    $staffPropertiesArray[] = $ob;
}


$arResult['PROPERTIES']['STAFF']['NAME'] = $staffArray['NAME'];
$arResult['PROPERTIES']['STAFF']['TEL'] = $staffPropertiesArray[1]['VALUE'];
$arResult['PROPERTIES']['STAFF']['EMAIL'] = $staffPropertiesArray[2]['VALUE'];
$arResult['PROPERTIES']['STAFF']['PHOTO'] = $arImage['SRC'];


// цена за метр квадратный
$priceMetr = strrev(chunk_split(strrev(round($arResult['PROPERTIES']['PRICE']['VALUE'] / $arResult['PROPERTIES']['SQUARE']['VALUE'])), 3, ' '));;

$arResult['PROPERTIES']['PRICE_METR']['VALUE'] = $priceMetr;

// пробелы в цене
$arResult['PROPERTIES']['PRICE']['VALUE'] = strrev(chunk_split(strrev($arResult['PROPERTIES']['PRICE']['VALUE']), 3, ' '));



