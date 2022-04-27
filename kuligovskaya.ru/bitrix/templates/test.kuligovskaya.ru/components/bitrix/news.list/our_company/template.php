<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="company__wrap">
    <div class="company__left">
        <div class="company__numbers">
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <? if($arItem['PROPERTIES']['TYPE']['VALUE_XML_ID'] == '1cbba87dc897abf20760d80a3bfa0268') :?>
                    <div class="company__numbers__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="big">
                            <?=$arItem['PROPERTIES']['VALUE_NUMBER']['VALUE']?>
                            <span> <?=$arItem['PROPERTIES']['PROPS_NUMBER']['VALUE']?></span>
                        </div>
                        <div class="small">
                            <?=$arItem['PREVIEW_TEXT']?>
                        </div>
                    </div>
                <? endif; ?>
            <? endforeach; ?>
        </div>
        <div class="company__media">
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <? if($arItem['PROPERTIES']['TYPE']['VALUE_XML_ID'] == '82fcb58733ef7e17376b7055bb736156') :?>
                    <a href="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="lazyload company__media__img"
                       data-fslightbox="gallery" data-src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"></a>
                    <a href="<?=CFile::GetFileArray($arItem['PROPERTIES']['VIDEO']['VALUE'])['SRC']?>" data-fslightbox="gallery2"
                       data-video-poster="<?=$arItem['DETAIL_PICTURE']['SRC']?>" class="company__media__video"
                       style="background-image: url(<?=$arItem['DETAIL_PICTURE']['SRC']?>)">
                    <span>
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 3L19 12L5 21V3Z" fill="white"/>
                         </svg>
                    </span>
                    </a>
                <? endif; ?>
            <? endforeach; ?>
        </div>
    </div>
    <div class="company__right">
        <div class="company__right__wrap">
            <div class="company__text">
                <? foreach($arResult["ITEMS"] as $arItem): ?>
                    <? if($arItem['PROPERTIES']['TYPE']['VALUE_XML_ID'] == '82fcb58733ef7e17376b7055bb736156') :?>
                        <?=$arItem['PREVIEW_TEXT']?>
                    <? endif; ?>
                <? endforeach; ?>
            </div>
            <div class="company__list">
                <? foreach($arResult["ITEMS"] as $arItem): ?>
                    <? if($arItem['PROPERTIES']['TYPE']['VALUE_XML_ID'] == '3ba0f25dc2b9ba0ce439c40a3d92bab4') :?>
                        <div class="company__list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="company__list__cross">
                                <svg width="14.5" height="14.5" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.25 0V14.5" stroke="white"/>
                                    <path d="M7.25 0V14.5" stroke="white"/>
                                    <path d="M7.25 0V14.5" stroke="white"/>
                                    <path d="M0 7.25L14.5 7.25" stroke="white"/>
                                    <path d="M0 7.25L14.5 7.25" stroke="white"/>
                                    <path d="M0 7.25L14.5 7.25" stroke="white"/>
                                </svg>
                            </div>
                            <?=$arItem['PREVIEW_TEXT']?>
                        </div>
                    <? endif; ?>
                <? endforeach; ?>
            </div>
            <a href="/about" class="btn company__btn">Читать дальше</a>
        </div>
    </div>
</div>
<script>
    let playlist = document.querySelector(".play");

    let box = [];

    box[0] = {
        "src" : "https://i.ytimg.com/vi/wp8ySbu1Fd0/maxresdefault.jpg",
        "url" : "https://www.youtube.com/watch?v=MItkcxw20w0"
    }

    box[1] = {
        "src" : "https://i.ibb.co/X4jCxRN/linder.png",
        "url" : "https://www.youtube.com/watch?v=qCyv1n7LP7U"
    }



    for(ar in box){
        let img = document.createElement("img");
        img.setAttribute("src", box[ar].src);
        img.setAttribute("width", "350px");
        img.setAttribute("height", "240px");
        let link = document.createElement("a");
        link.setAttribute("data-fancybox", "");
        link.setAttribute("data-src", box[ar].url);
        link.setAttribute("href", "javascipt:;");
        link.append(img);

        playlist.appendChild(link);
    }
</script>

