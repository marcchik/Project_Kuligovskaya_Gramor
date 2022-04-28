<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();



foreach($arResult["ITEMS"] as $key => $arItem) {
    $res = CIBlockElement::GetByID($arItem['PROPERTIES']['GK']['VALUE']);
    $arResult['ITEMS'][$key]['PROPERTIES']['GK']['NAME'] = $res->GetNext()['NAME'];
}





