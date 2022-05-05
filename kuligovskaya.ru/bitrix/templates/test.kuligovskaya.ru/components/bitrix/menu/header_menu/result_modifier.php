<?
CModule::IncludeModule('iblock');

$serviceArray = array();

$arSelect = Array();
$arFilter = Array("IBLOCK_ID"=>65, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $serviceArray[] = $arFields['NAME'];
}

?>