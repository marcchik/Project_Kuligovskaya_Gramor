<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="wrap">
    <a href="/news">
        <div class="btn_back_news_detail">
            <div class="icon_btn_back_news_detail">
                <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.5 16L0.999999 8.5L8.5 1" stroke="white"/>
                    <path d="M8.5 16L0.999999 8.5L8.5 1" stroke="white"/>
                    <path d="M8.5 16L0.999999 8.5L8.5 1" stroke="white"/>
                </svg>
            </div>
            <div class="text_btn_back_news_detail">Назад</div>
        </div>
    </a>
    <div class="content_news_detail">
        <div class="time_line_news_detail">
            <div class="item_time_line_news_detail">
                <svg width="18" height="18" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.5">
                        <path d="M12.6667 2.66663H3.33333C2.59695 2.66663 2 3.26358 2 3.99996V13.3333C2 14.0697 2.59695 14.6666 3.33333 14.6666H12.6667C13.403 14.6666 14 14.0697 14 13.3333V3.99996C14 3.26358 13.403 2.66663 12.6667 2.66663Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.6665 1.33325V3.99992" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.3335 1.33325V3.99992" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 6.66675H14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
                <?if($arResult['ACTIVE_FROM']):?>
                    <div class="text_item_time_line_news_detail">
                        <?
                        $monthsList = array(
                            "01"=>"Января","02"=>"Февраля","03"=>"Марта",
                            "04"=>"Апреля","05"=>"Мая", "06"=>"Июня",
                            "07"=>"Июля","08"=>"Августа","09"=>"Сентября",
                            "10"=>"Октября","11"=>"Ноября","12"=>"Декабря");
                        $dataArray = explode("/", $arResult['ACTIVE_FROM']);
                        ?>
                        <?=$dataArray[1]." ".$monthsList[$dataArray[0]]." ".mb_substr($dataArray[2], 0, 4)?>
                    </div>
                <?endif;?>
            </div>
            <div class="item_time_line_news_detail">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.5">
                        <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 4.5V9L12 10.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
                <div class="text_item_time_line_news_detail">Время чтения: 23 минуты</div>
            </div>
        </div>
        <h1 class="h1_title_news_detail"><?=$arResult['NAME']?></h1>
        <?if($arResult['DETAIL_PICTURE']['SRC']):?>
            <div class="preview_news_detail">
                <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>">
            </div>
        <?endif;?>
        <br>
        <?=$arResult['~DETAIL_TEXT']?>

    </div>
</div>



