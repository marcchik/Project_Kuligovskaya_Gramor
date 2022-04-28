<?

$arrayGK = array();

foreach($arResult["ITEMS"] as $arItem) {

    if ($arItem['PROPERTIES']['GK']['VALUE'] == $_REQUEST['ID']) {
        $res = CIBlockElement::GetByID($arItem['PROPERTIES']['GK']['VALUE']);
        $arItem['PROPERTIES']['GK']['NAME'] = $res->GetNext()['NAME'];
        $arrayGK[] = $arItem;
        pr($res->GetNext());
    }
}

$arResult['ITEMS'] = $arrayGK;

