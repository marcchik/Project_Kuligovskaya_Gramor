<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(isset($_POST['phone'])&&!empty($_POST['phone'])&&!empty($_POST['name'])&&isset($_POST['name'])&&!empty($_POST['vakid'])&&isset($_POST['vakid']) ){

    CModule::IncludeModule('iblock');
    $el = new CIBlockElement;

    $PROP = array();

    if($_FILES['file']){ //echo "<pre>"; var_dump($_FILES);
        $fid =  CFile::SaveFile($_FILES['file'], "rezume");
        $PROP['file'] = $fid; //echo $fid;
    }

    $PROP['NAME'] = $_POST["name"];
    $PROP['PHONE'] = $_POST["phone"];
    $PROP['EMAIL'] = $_POST["email"];
    $PROP['VAK'] = $_POST["vakid"];

    $arLoadProductArray = Array(
        "IBLOCK_ID"      => 14,            //id нужного инфоблока
        "PROPERTY_VALUES"=> $PROP,        //массив свойств
        "NAME"           => date("d.m.Y H:i:s"), //название элемента
        "ACTIVE"         => "Y",          //активность элемента
    );

    $PRODUCT_ID = $el->Add($arLoadProductArray);

    $arEventFields = array(
        "PHONE" => $_POST["phone"],
        "NAME" => $_POST["name"],
        "EMAIL" => $_POST["email"],
        "FILE" => 'http://' . $_SERVER['SERVER_NAME'] . CFile::GetPath($fid)
    );

    $res = CIBlockElement::GetByID($_POST['vakid']);
    if($ar_res = $res->GetNext()){
        $arEventFields['VAKNAME'] = $ar_res['NAME'];
    }


    CEvent::Send("REQUESTS", SITE_ID, $arEventFields, "N", 50);

    $db_props = CIBlockElement::GetProperty(13, $PROP['VAK'], array("sort" => "asc"), array('ID' => 233));
    if ($ar_props = $db_props->Fetch())
        $email = $ar_props['VALUE'];



    // Сообщение
    $message = "Мы получили новый отклик по вакансии: ".$arEventFields['VAKNAME']."\n Телефон: ".$arEventFields['PHONE']."\n Имя: ".$arEventFields['NAME'];

    $subject = 'Новая вакансия';

    // Отправляем
    mail($email, $subject, $message);

    echo json_encode(array('status' => 'success', 'mess'=>'Заявка успешно отправлена.'));

    unset($_POST["phone"]);
    unset($_POST["name"]);
    unset($_POST["vakid"]);

}else{
    echo json_encode(array('status' => 'error', 'mess'=>'Заполнены не все обязательные поля.'));
}
?>