<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="staff-detail__wrap">
    <div class="staff-detail__img">
        <img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arResultS['PREVIEW_PICTURE']['ALT']?>">
    </div>
    <div class="staff-detail__content">
        <div class="staff-detail__status">
            <?=$arResult['PROPERTIES']['POST']['VALUE']?>
        </div>
        <div class="staff-detail__name">
            <?=$arResult['NAME']?>
        </div>
        <div class="staff-detail__contact">
            <?=$arResult['PROPERTIES']['PHONE']['VALUE']?>
        </div>
        <div class="staff-detail__contact">
            <?=$arResult['PROPERTIES']['EMAIL']['VALUE']?>
        </div>
        <div class="staff-detail__text">
            <?=$arResult['DETAIL_TEXT']?>
        </div>
        <div class="staff-detail__chat">
            <button class="btn btn-white" onclick="OpenModal('ask_questions')">Написать менеджеру</button>
        </div>
    </div>
</div>



