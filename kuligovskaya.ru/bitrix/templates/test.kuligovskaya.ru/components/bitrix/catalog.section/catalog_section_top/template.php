<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');

if (!empty($arResult['NAV_RESULT']))
{
	$navParams =  array(
		'NavPageCount' => $arResult['NAV_RESULT']->NavPageCount,
		'NavPageNomer' => $arResult['NAV_RESULT']->NavPageNomer,
		'NavNum' => $arResult['NAV_RESULT']->NavNum
	);
}
else
{
	$navParams = array(
		'NavPageCount' => 1,
		'NavPageNomer' => 1,
		'NavNum' => $this->randString()
	);
}

$showTopPager = false;
$showBottomPager = false;
$showLazyLoad = false;

if ($arParams['PAGE_ELEMENT_COUNT'] > 0 && $navParams['NavPageCount'] > 1)
{
	$showTopPager = $arParams['DISPLAY_TOP_PAGER'];
	$showBottomPager = $arParams['DISPLAY_BOTTOM_PAGER'];
	$showLazyLoad = $arParams['LAZY_LOAD'] === 'Y' && $navParams['NavPageNomer'] != $navParams['NavPageCount'];
}

$templateLibrary = array('popup', 'ajax', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList
);
unset($currencyList, $templateLibrary);

$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));

$positionClassMap = array(
	'left' => 'product-item-label-left',
	'center' => 'product-item-label-center',
	'right' => 'product-item-label-right',
	'bottom' => 'product-item-label-bottom',
	'middle' => 'product-item-label-middle',
	'top' => 'product-item-label-top'
);

$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$arParams['~MESS_BTN_BUY'] = $arParams['~MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_BUY');
$arParams['~MESS_BTN_DETAIL'] = $arParams['~MESS_BTN_DETAIL'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_DETAIL');
$arParams['~MESS_BTN_COMPARE'] = $arParams['~MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_COMPARE');
$arParams['~MESS_BTN_SUBSCRIBE'] = $arParams['~MESS_BTN_SUBSCRIBE'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_SUBSCRIBE');
$arParams['~MESS_BTN_ADD_TO_BASKET'] = $arParams['~MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_ADD_TO_BASKET');
$arParams['~MESS_NOT_AVAILABLE'] = $arParams['~MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCS_TPL_MESS_PRODUCT_NOT_AVAILABLE');
$arParams['~MESS_SHOW_MAX_QUANTITY'] = $arParams['~MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCS_CATALOG_SHOW_MAX_QUANTITY');
$arParams['~MESS_RELATIVE_QUANTITY_MANY'] = $arParams['~MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCS_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['~MESS_RELATIVE_QUANTITY_FEW'] = $arParams['~MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCS_CATALOG_RELATIVE_QUANTITY_FEW');

$arParams['MESS_BTN_LAZY_LOAD'] = $arParams['MESS_BTN_LAZY_LOAD'] ?: Loc::getMessage('CT_BCS_CATALOG_MESS_BTN_LAZY_LOAD');

$generalParams = array(
	'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
	'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
	'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
	'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
	'MESS_SHOW_MAX_QUANTITY' => $arParams['~MESS_SHOW_MAX_QUANTITY'],
	'MESS_RELATIVE_QUANTITY_MANY' => $arParams['~MESS_RELATIVE_QUANTITY_MANY'],
	'MESS_RELATIVE_QUANTITY_FEW' => $arParams['~MESS_RELATIVE_QUANTITY_FEW'],
	'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
	'USE_PRODUCT_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
	'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
	'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
	'ADD_PROPERTIES_TO_BASKET' => $arParams['ADD_PROPERTIES_TO_BASKET'],
	'PRODUCT_PROPS_VARIABLE' => $arParams['PRODUCT_PROPS_VARIABLE'],
	'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'],
	'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
	'COMPARE_PATH' => $arParams['COMPARE_PATH'],
	'COMPARE_NAME' => $arParams['COMPARE_NAME'],
	'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
	'PRODUCT_BLOCKS_ORDER' => $arParams['PRODUCT_BLOCKS_ORDER'],
	'LABEL_POSITION_CLASS' => $labelPositionClass,
	'DISCOUNT_POSITION_CLASS' => $discountPositionClass,
	'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
	'SLIDER_PROGRESS' => $arParams['SLIDER_PROGRESS'],
	'~BASKET_URL' => $arParams['~BASKET_URL'],
	'~ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
	'~BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE'],
	'~COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
	'~COMPARE_DELETE_URL_TEMPLATE' => $arResult['~COMPARE_DELETE_URL_TEMPLATE'],
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
	'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
	'BRAND_PROPERTY' => $arParams['BRAND_PROPERTY'],
	'MESS_BTN_BUY' => $arParams['~MESS_BTN_BUY'],
	'MESS_BTN_DETAIL' => $arParams['~MESS_BTN_DETAIL'],
	'MESS_BTN_COMPARE' => $arParams['~MESS_BTN_COMPARE'],
	'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
	'MESS_BTN_ADD_TO_BASKET' => $arParams['~MESS_BTN_ADD_TO_BASKET'],
	'MESS_NOT_AVAILABLE' => $arParams['~MESS_NOT_AVAILABLE']
);

$obName = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $this->GetEditAreaId($navParams['NavNum']));
$containerName = 'container-'.$navParams['NavNum'];
?>

<div class="wrap">
    <div class="title_text_catalog">
        <div class="title_catalog">
            <?=$arResult['NAME'] ?>
        </div>
        <div class="text_catalog">
            <?=$arResult['DESCRIPTION'] ?>
        </div>
    </div>
    <div class="filtr_catalog">
        <div class="title_filtr_catalog">????????????:</div>
        <div class="custom-select">
            <select>
                <option></option>
                <option selected="" disabled="">
                    ??????????
                </option>
                <option>
                    ?????????? 1
                </option>
                <option>
                    ?????????? 2
                </option>
            </select>
            <div class="select-selected">
                ??????????
            </div><div class="select-items select-hide"><div>
                    ??????????
                </div><div>
                    ?????????? 1
                </div><div>
                    ?????????? 2
                </div></div></div>
        <div class="custom-select">
            <select>
                <option></option>
                <option selected="" disabled="">
                    ????????????????????
                </option>
                <option>
                    ???????????????????? 1
                </option>
                <option>
                    ???????????????????? 2
                </option>
            </select>
            <div class="select-selected">
                ????????????????????
            </div><div class="select-items select-hide"><div>
                    ????????????????????
                </div><div>
                    ???????????????????? 1
                </div><div>
                    ???????????????????? 2
                </div></div></div>
        <div class="custom-select">
            <select>
                <option></option>
                <option selected="" disabled="">
                    ??????????????(??2)
                </option>
                <option>
                    50 - 60
                </option>
                <option>
                    60 - 70
                </option>
            </select>
            <div class="select-selected">
                ??????????????(??2)
            </div><div class="select-items select-hide"><div>
                    ??????????????(??2)
                </div><div>
                    50 - 60
                </div><div>
                    60 - 70
                </div></div></div>
        <div class="custom-select">
            <select>
                <option></option>
                <option selected="" disabled="">
                    ????????????
                </option>
                <option>
                    1 ??????.
                </option>
                <option>
                    2 ??????.
                </option>
                <option>
                    3 ??????.
                </option>
            </select>
            <div class="select-selected">
                ????????????
            </div><div class="select-items select-hide"><div>
                    ????????????
                </div><div>
                    1 ??????.
                </div><div>
                    2 ??????.
                </div><div>
                    3 ??????.
                </div></div></div>
        <div class="custom-select">
            <select>
                <option></option>
                <option selected="" disabled="">
                    ????????
                </option>
                <option>
                    1 ?????? - 3 ??????
                </option>
                <option>
                    3 ?????? - 5 ??????
                </option>
                <option>
                    5 ?????? - 15 ??????
                </option>
            </select>
            <div class="select-selected">
                ????????
            </div><div class="select-items select-hide"><div>
                    ????????
                </div><div>
                    1 ?????? - 3 ??????
                </div><div>
                    3 ?????? - 5 ??????
                </div><div>
                    5 ?????? - 15 ??????
                </div></div></div>
    </div>
    <div class="top_sort_catalog">
        <div class="custom-select">
            <select>
                <option></option>
                <option selected="">??????</option>
                <option>????????????</option>
            </select>
            <div class="select-selected">??????</div><div class="select-items select-hide"><div>??????</div><div>????????????</div></div></div>
        <div class="custom-select">
            <select>
                <option></option>
                <option selected="">????????????????????</option>
                <option>???? ????????</option>
            </select>
            <div class="select-selected">????????????????????</div><div class="select-items select-hide"><div>????????????????????</div><div>???? ????????</div></div></div>
    </div>
    <div class="items_box_catalog">
        <? foreach($arResult['ITEMS'] as $arItem): ?>
            <?
            $count++;
            if ($count > 3) {
                break;
            };
            $uniqueId = $arItem['ID'].'_'.md5($this->randString().$component->getAction());
            $areaIds[$arItem['ID']] = $this->GetEditAreaId($uniqueId);
            $this->AddEditAction($uniqueId, $arItem['EDIT_LINK'], $elementEdit);
            $this->AddDeleteAction($uniqueId, $arItem['DELETE_LINK'], $elementDelete, $elementDeleteParams);
            ?>

            <div class="item_box_catalog" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="photos_item_box_catalog">
                    <div class="swiper photos_swiper_catalog">
                        <button class="promo__item__add btn-reset" type="button">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1.5L11.3175 6.195L16.5 6.9525L12.75 10.605L13.635 15.765L9 13.3275L4.365 15.765L5.25 10.605L1.5 6.9525L6.6825 6.195L9 1.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        <div class="swiper-wrapper">
                            <? foreach ($arItem['PROPERTIES']['PICTURES']['VALUE'] as $photo) : ?>
                                <?
                                $arImage = CFile::GetFileArray($photo);
                                ?>
                                <div class="swiper-slide">
                                    <img src="<?=$arImage['SRC']?>" class="photo_item_slide">
                                </div>
                            <? endforeach; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="info_item_box_catalog">
                    <div class="top_info_item_box_catalog">
                        <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                            <div class="title_top_info_item_box_catalog"><?=$arItem['NAME']?></div>
                        </a>
                        <div class="params_top_info_item_box_catalog">
                            <div class="item_param_top_info_item_box_catalog">??????. ??????????????</div>
                            <div class="item_param_top_info_item_box_catalog">???????????? ????????????????</div>
                        </div>
                    </div>
                    <div class="bottom_info_item_box_catalog">
                        <div class="left_bottom_info_item_box_catalog">
                            <?if($arItem['PROPERTIES']['CITY']['VALUE']):?>
                                <div class="adress_box">
                                    <div class="mini_title_adress_box">??????????:</div>
                                    <div class="text_adress_box"><?=$arItem['PROPERTIES']['CITY']['VALUE'].", ".$arItem['PROPERTIES']['ADDRESS']['VALUE']?></div>
                                </div>
                            <?endif;?>
                            <?if(empty($arItem['PROPERTIES']['GK']['VALUE'])):?>
                                <div class="company_box">
                                    <div class="mini_title_company_box">????:</div>
                                    <div class="logo_name_company_box">
                                        <div class="logo_company_box">
                                            <? if($arItem['PROPERTIES']['LOGO']['VALUE']) :?>
                                                <img src="" alt="????">
                                            <? endif; ?>
                                        </div>
                                        <? if($arItem['PROPERTIES']['GK']['NAME']) :?>
                                            <a href="/catalog/gk?ID=<?=$arItem['PROPERTIES']['GK']['VALUE']?>">
                                                <div class="name_company_box">???<?=$arItem['PROPERTIES']['GK']['NAME']?>???</div>
                                            </a>
                                        <? endif; ?>
                                    </div>
                                </div>
                            <?endif;?>
                            <div class="params_item_catalog">
                                <?if($arItem['PROPERTIES']['SQUARE']['VALUE']):?>
                                    <div class="item_params_item_catalog">
                                        <div class="mini_title_item_params_item_catalog">????????????:</div>
                                        <div class="icon_text_item_params_item_catalog">
                                            <div class="icon_item_params_item_catalog">
                                                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/bx_bx-area.svg" alt="">
                                            </div>
                                            <div class="text_item_params_item_catalog"><?=$arItem['PROPERTIES']['SQUARE']['VALUE']?> ??<sup>2</sup></div>
                                        </div>
                                    </div>
                                <?endif;?>

                                <?if($arItem['PROPERTIES']['FLOOR']['VALUE'] && $arItem['PROPERTIES']['FLOORS']['VALUE']):?>
                                    <div class="item_params_item_catalog">
                                        <div class="mini_title_item_params_item_catalog">????????:</div>
                                        <div class="icon_text_item_params_item_catalog">
                                            <div class="icon_item_params_item_catalog">
                                                <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/ep_house.svg" alt="">
                                            </div>
                                            <div class="text_item_params_item_catalog"><?=$arItem['PROPERTIES']['FLOOR']['VALUE']?>/<?=$arItem['PROPERTIES']['FLOORS']['VALUE']?>  ????????</div>
                                        </div>
                                    </div>
                                <?endif;?>
                            </div>
                        </div>
                        <div class="right_bottom_info_item_box_catalog">
                            <?if($arItem['PROPERTIES']['PRICE']['VALUE']):?>
                                <div class="price_box_right_bottom_info_catalog">
                                    <div class="mini_title_price_box_right_bottom_info_catalog">????????:</div>
                                    <div class="full_price_price_box_right_bottom_info_catalog"><?=strrev(chunk_split(strrev($arItem['PROPERTIES']['PRICE']['VALUE']), 3, ' '))?> ??</div>
                                </div>
                            <?endif;?>
                            <div class="btn_price_box_right_bottom_info_catalog" onclick="OpenModal('ask_viewing')">???????????????? ????????????</div>
                            <div class="mini_btn_ipoteka_bottom_info_catalog" onclick="OpenModal('ask_viewing')">??????????????</div>
                        </div>
                    </div>
                </div>
            </div>

        <? endforeach; ?>
    </div>




</div>


<?
if ($showLazyLoad)
{
	?>
	<div class="row bx-<?=$arParams['TEMPLATE_THEME']?>">
		<div class="btn btn-default btn-lg center-block" style="margin: 15px;"
			data-use="show-more-<?=$navParams['NavNum']?>">
			<?=$arParams['MESS_BTN_LAZY_LOAD']?>
		</div>
	</div>
	<?
}


$signer = new \Bitrix\Main\Security\Sign\Signer;
$signedTemplate = $signer->sign($templateName, 'catalog.section');
$signedParams = $signer->sign(base64_encode(serialize($arResult['ORIGINAL_PARAMETERS'])), 'catalog.section');
?>
<script>
	BX.message({
		BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
		BASKET_URL: '<?=$arParams['BASKET_URL']?>',
		ADD_TO_BASKET_OK: '<?=GetMessageJS('ADD_TO_BASKET_OK')?>',
		TITLE_ERROR: '<?=GetMessageJS('CT_BCS_CATALOG_TITLE_ERROR')?>',
		TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCS_CATALOG_TITLE_BASKET_PROPS')?>',
		TITLE_SUCCESSFUL: '<?=GetMessageJS('ADD_TO_BASKET_OK')?>',
		BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCS_CATALOG_BASKET_UNKNOWN_ERROR')?>',
		BTN_MESSAGE_SEND_PROPS: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_SEND_PROPS')?>',
		BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_CLOSE')?>',
		BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
		COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCS_CATALOG_MESS_COMPARE_OK')?>',
		COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCS_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
		COMPARE_TITLE: '<?=GetMessageJS('CT_BCS_CATALOG_MESS_COMPARE_TITLE')?>',
		PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCS_CATALOG_PRICE_TOTAL_PREFIX')?>',
		RELATIVE_QUANTITY_MANY: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY'])?>',
		RELATIVE_QUANTITY_FEW: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW'])?>',
		BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
		BTN_MESSAGE_LAZY_LOAD: '<?=CUtil::JSEscape($arParams['MESS_BTN_LAZY_LOAD'])?>',
		BTN_MESSAGE_LAZY_LOAD_WAITER: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_LAZY_LOAD_WAITER')?>',
		SITE_ID: '<?=CUtil::JSEscape($component->getSiteId())?>'
	});
	var <?=$obName?> = new JCCatalogSectionComponent({
		siteId: '<?=CUtil::JSEscape($component->getSiteId())?>',
		componentPath: '<?=CUtil::JSEscape($componentPath)?>',
		navParams: <?=CUtil::PhpToJSObject($navParams)?>,
		deferredLoad: false, // enable it for deferred load
		initiallyShowHeader: '<?=!empty($arResult['ITEM_ROWS'])?>',
		bigData: <?=CUtil::PhpToJSObject($arResult['BIG_DATA'])?>,
		lazyLoad: !!'<?=$showLazyLoad?>',
		loadOnScroll: !!'<?=($arParams['LOAD_ON_SCROLL'] === 'Y')?>',
		template: '<?=CUtil::JSEscape($signedTemplate)?>',
		ajaxId: '<?=CUtil::JSEscape($arParams['AJAX_ID'])?>',
		parameters: '<?=CUtil::JSEscape($signedParams)?>',
		container: '<?=$containerName?>'
	});
</script>