<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(empty($arResult)) return;
$count = 0;
$importantNews = false;
?>

<div class="news__top">
    <h1 class="h1">
        Список новостей
    </h1>
    <div class="custom-select">
        <select>
            <option></option>
            <option selected>
                Сначала последние
            </option>
            <option>
                Сначала старые
            </option>
        </select>
    </div>
</div>

<? foreach($arResult["ITEMS"] as $arItem): ?>
    <?
    $count++;
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?  if($arItem['PROPERTIES']['IMPORTANT_NEWS']['VALUE_XML_ID'] != '1') :?>
        <? if($count == 1 || $importantNews == true) :?>
            <div class="news__wrap">
        <? endif; ?>
        <div class="news__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="news__item__data">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.5">
                        <path d="M12.6667 2.66663H3.33333C2.59695 2.66663 2 3.26358 2 3.99996V13.3333C2 14.0697 2.59695 14.6666 3.33333 14.6666H12.6667C13.403 14.6666 14 14.0697 14 13.3333V3.99996C14 3.26358 13.403 2.66663 12.6667 2.66663Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.6665 1.33325V3.99992" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.3335 1.33325V3.99992" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 6.66675H14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
                <?
                $monthsList = array(
                    "01"=>"янв","02"=>"фев","03"=>"мар",
                    "04"=>"апр","05"=>"май", "06"=>"июня",
                    "07"=>"июля","08"=>"авг","09"=>"сен",
                    "10"=>"окт","11"=>"ноя","12"=>"дек");
                $dataArray = explode("/", $arItem['ACTIVE_FROM']);
                ?>
                <?=$dataArray[1]." ".$monthsList[$dataArray[0]]." ".mb_substr($dataArray[2], 0, 4)?>
            </div>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news__item__title">
                <?=$arItem['NAME']?>
            </a>
            <div class="news__item__text">
                <?=$arItem['PREVIEW_TEXT']?>
            </div>
        </div>
        <? $importantNews = false; ?>
    <? else: ?>
        </div>
        <div class="news__item news__item--big" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a class="news__item__img" href="">
                <img class="lazyload" data-src="<?=$arItem['DETAIL_PICTURE']['SRC']?>">
            </a>
            <div class="news__item__content">
                <div class="news__item__important">
                    <?=$arItem['PROPERTIES']['IMPORTANT_NEWS']['NAME']?>
                </div>
                <div class="news__item__data">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                            <path d="M12.6667 2.66663H3.33333C2.59695 2.66663 2 3.26358 2 3.99996V13.3333C2 14.0697 2.59695 14.6666 3.33333 14.6666H12.6667C13.403 14.6666 14 14.0697 14 13.3333V3.99996C14 3.26358 13.403 2.66663 12.6667 2.66663Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.6665 1.33325V3.99992" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.3335 1.33325V3.99992" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 6.66675H14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    <?
                    $monthsList = array(
                        "01"=>"янв","02"=>"фев","03"=>"мар",
                        "04"=>"апр","05"=>"май", "06"=>"июня",
                        "07"=>"июля","08"=>"авг","09"=>"сен",
                        "10"=>"окт","11"=>"ноя","12"=>"дек");
                    $dataArray = explode("/", $arItem['ACTIVE_FROM']);
                    ?>
                    <?=$dataArray[1]." ".$monthsList[$dataArray[0]]." ".mb_substr($dataArray[2], 0, 4)?>
                </div>
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news__item__title">
                    <?=$arItem['NAME']?>
                </a>
                <div class="news__item__text">
                    <?=$arItem['PREVIEW_TEXT']?>
                </div>
            </div>
        </div>
        <? $importantNews = true; ?>
    <? endif;?>


<? endforeach; ?>
</div>



<div class="more-btn d-flex flex-center">
    <button class="btn" type="button">
        Показать еще
    </button>
</div>