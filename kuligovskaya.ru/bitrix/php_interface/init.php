<?

AddEventHandler("tiangroup.forms", "OnBeforeFormSend", Array("IntegrationB24", "OnBeforeFormSendHandler"));
class IntegrationB24
{
  function OnBeforeFormSendHandler(&$arFields)
  {
        CModule::IncludeModule("iblock");

        $fields = array();
        switch ($arFields['IBLOCK_ID']) {
        	case 15:
        		$fields = array(
		             "TITLE" => "Заполнена форма: Оставить заявку", 
		             "NAME" => $arFields['PROPERTY_VALUES']['NAME'], 
		             "EMAIL" => array(array("VALUE" => $arFields['PROPERTY_VALUES']['EMAIL'], "VALUE_TYPE" => "WORK" )),
		             "PHONE" => array(array("VALUE" => $arFields['PROPERTY_VALUES']['PHONE'], "VALUE_TYPE" => "WORK" )),
		             "COMMENTS" => $arFields['PROPERTY_VALUES']['COMMENT']['VALUE']['TEXT'],
		             
		        );
		        if(!empty($arFields['PROPERTY_VALUES']['REQUEST'])) {
		        	$val = CIBlockPropertyEnum::GetByID($arFields['PROPERTY_VALUES']['REQUEST']);
		        	$fields['COMMENTS'] = 'Заявка на: '.$val['VALUE'].'. <br>'.$fields['COMMENTS'];
		        }
        		break;


        	case 11:
        		$fields = array(
		             "TITLE" => "Заполнена форма: Забронировать объект", 
		             "NAME" => $arFields['PROPERTY_VALUES']['NAME'], 
		             "PHONE" => array(array("VALUE" => $arFields['PROPERTY_VALUES']['PHONE'], "VALUE_TYPE" => "WORK" )),
		             "COMMENTS" => $arFields['PROPERTY_VALUES']['COMMENT']['VALUE']['TEXT'],
		             
		        );
		        if(!empty($arFields['PROPERTY_VALUES']['ELEMENT_ID'])) {
		        	$res = CIBlockElement::GetByID($arFields['PROPERTY_VALUES']['ELEMENT_ID'])->Fetch();
		        	$fields['COMMENTS'] = 'Объект: '.$res['NAME'].'. <br>'.$fields['COMMENTS'];
		        }
        		break;
        	case 13:
        		$fields = array(
		             "TITLE" => "Заполнена форма: Задать вопрос на странице контакты", 
		             "NAME" => $arFields['PROPERTY_VALUES']['NAME'], 
		             "EMAIL" => array(array("VALUE" => $arFields['PROPERTY_VALUES']['EMAIL'], "VALUE_TYPE" => "WORK" )),
		             "COMMENTS" => $arFields['PROPERTY_VALUES']['QUESTION']['VALUE']['TEXT'],
		             
		        );
        		break;
        	case 12:
        		$fields = array(
		             "TITLE" => "Заполнена форма: Написать менеджеру", 
		             "NAME" => $arFields['PROPERTY_VALUES']['NAME'], 
		             "EMAIL" => array(array("VALUE" => $arFields['PROPERTY_VALUES']['EMAIL'], "VALUE_TYPE" => "WORK" )),
		             "COMMENTS" => $arFields['PROPERTY_VALUES']['MESSAGE']['VALUE']['TEXT'],
		             
		        );
		        if(!empty($arFields['PROPERTY_VALUES']['ELEMENT_ID'])) {
		        	$res = CIBlockElement::GetByID($arFields['PROPERTY_VALUES']['ELEMENT_ID'])->Fetch();
		        	$fields['COMMENTS'] = 'Менеджер: '.$res['NAME'].'. <br>'.$fields['COMMENTS'];
		        }
        		break;
        	case 16:
        		$fields = array(
		             "TITLE" => "Заполнена форма: Оставить отзыв", 
		             "NAME" => $arFields['PROPERTY_VALUES']['NAME'], 
		             "EMAIL" => array(array("VALUE" => $arFields['PROPERTY_VALUES']['EMAIL'], "VALUE_TYPE" => "WORK" )),
		             "COMMENTS" => $arFields['PROPERTY_VALUES']['REVIEW']['VALUE']['TEXT'],
		        );

		        if(!empty($arFields['PROPERTY_VALUES']['FILE'][0])) {
		        	$idFile = CFile::SaveFile($arFields['PROPERTY_VALUES']['FILE'][0], 'review');
		        	$arFields['PROPERTY_VALUES']['FILE'] = $idFile;
		        	$fields['COMMENTS'] = $fields['COMMENTS'].' <br> Файл: <a href="http://kuligovskaya.t1.piksis.ru'.CFile::GetPath($idFile).'">скачать</a>';
		        }
        		break;
        	case 14:
        		$fields = array(
		             "TITLE" => "Заполнена форма: Отправить резюме", 
		             "NAME" => $arFields['PROPERTY_VALUES']['NAME'], 
		             "EMAIL" => array(array("VALUE" => $arFields['PROPERTY_VALUES']['EMAIL'], "VALUE_TYPE" => "WORK" )),
		             "COMMENTS" => $arFields['PROPERTY_VALUES']['COMMENT']['VALUE']['TEXT'],
		             
		        );
		        if(!empty($arFields['PROPERTY_VALUES']['RESUME'][0])) {
		        	$idFile = CFile::SaveFile($arFields['PROPERTY_VALUES']['RESUME'][0], 'resume');
		        	$arFields['PROPERTY_VALUES']['RESUME'] = $idFile;
		        	$fields['COMMENTS'] = $fields['COMMENTS'].' <br> Файл резюме: <a href="http://kuligovskaya.t1.piksis.ru'.CFile::GetPath($idFile).'">скачать</a>';
		        }
        		break;
        }

        IntegrationB24::sendToB24($fields);
  }

  function sendToB24($fields) 
  {

  	if(empty($fields)) return;

  	$url= 'https://kuligovskaya.bitrix24.ru/rest/461/a5xm8x2lfqwreiby/crm.lead.add/';

	$queryData = http_build_query(array(
        'fields' => array_merge($fields, array(
             "ASSIGNED_BY_ID" => 461, 
             "STATUS_ID" => "NEW",
             "OPENED" => "Y",
             "SOURCE_ID" => "WEB", 
        )),
        'params' => array("REGISTER_SONET_EVENT" => "Y")
    ));

    $curl = curl_init();
    curl_setopt_array($curl, array(
         CURLOPT_SSL_VERIFYPEER => 0,
         CURLOPT_POST => 1,
         CURLOPT_HEADER => 0,
         CURLOPT_RETURNTRANSFER => 1,
         CURLOPT_URL => $url,
         CURLOPT_POSTFIELDS => $queryData,
    ));

    $result = curl_exec($curl);
    curl_close($curl);
  }
}

function pr($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}