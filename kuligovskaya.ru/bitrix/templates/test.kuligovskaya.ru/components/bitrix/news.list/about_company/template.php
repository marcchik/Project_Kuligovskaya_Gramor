<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(empty($arResult)) return;
?>


<div class="title_about_company"><?=$arResult["ITEMS"][0]['NAME']?></div>
<div class="content_about_company">
    <div class="preview_about_company">
        <img src="<?=$arResult["ITEMS"][0]['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arResult["ITEMS"][0]['PREVIEW_PICTURE']['ALT']?>">
    </div>
    <?=$arResult["ITEMS"][0]['PREVIEW_TEXT']?>
    <div class="media_box_about_company">
        <a href="<?=CFile::GetFileArray($arResult["ITEMS"][0]['PROPERTIES']['LEFT_PHOTO']['VALUE'])['SRC']?>" class="lazyload company__media__img" data-fslightbox="gallery" data-src="<?=CFile::GetFileArray($arResult["ITEMS"][0]['PROPERTIES']['LEFT_PHOTO']['VALUE'])['SRC']?>"></a>
        <a href="<?=CFile::GetFileArray($arResult["ITEMS"][0]['PROPERTIES']['VIDEO']['VALUE'])['SRC']?>" data-fslightbox="gallery2" data-video-poster="<?=$arResult["ITEMS"][0]['DETAIL_PICTURE']['SRC']?>" class="company__media__video" style="background-image: url(<?=$arResult["ITEMS"][0]['DETAIL_PICTURE']['SRC']?>)">
                                    <span>
                                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M5 3L19 12L5 21V3Z" fill="white"/>
                                    </svg>

                                    </span>
        </a>
        <a href="<?=CFile::GetFileArray($arResult["ITEMS"][0]['PROPERTIES']['RIGHT_PHOTO']['VALUE'])['SRC']?>" class="lazyload company__media__img" data-fslightbox="gallery" data-src="<?=CFile::GetFileArray($arResult["ITEMS"][0]['PROPERTIES']['RIGHT_PHOTO']['VALUE'])['SRC']?>"></a>
    </div>
    <?=$arResult["ITEMS"][0]['DETAIL_TEXT']?>
</div>
