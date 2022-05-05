<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['phone']) && !empty($_POST['phone'])) {

    CModule::IncludeModule('iblock');
    $el = new CIBlockElement;

    $PROP = array();

    $PROP['NAME'] = $_POST["name"];
    $PROP['EMAIL'] = $_POST["email"];
    $PROP['PHONE'] = $_POST["phone"];
    $PROP['HIDDEN_REALTY'] = $_POST["vakid"];

    $arLoadProductArray = Array(
        "IBLOCK_ID"      => 64,            //id нужного инфоблока
        "PROPERTY_VALUES"=> $PROP,        //массив свойств
        "NAME"           => 'Сообщение формы от '.date("d.m.Y H:i:s"), //название элемента
        "ACTIVE"         => "Y",          //активность элемента
    );

    $PRODUCT_ID = $el->Add($arLoadProductArray);

    echo json_encode(array('status' => 'success', 'mess'=>'Заявка успешно отправлена.'));

    unset($_POST["phone"]);


} else {
    echo json_encode(array('status' => 'error', 'mess' => 'Заполнены не все обязательные поля.'));
}



