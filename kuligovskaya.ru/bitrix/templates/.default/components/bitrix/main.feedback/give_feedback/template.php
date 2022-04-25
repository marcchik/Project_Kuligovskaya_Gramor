<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */


?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
    $el = new CIBlockElement;

    $arLoadProductArray = Array(
        "IBLOCK_ID"      => 16,
        "NAME"           => "Отзыв",
        "ACTIVE"         => "Y",            // активен
        "PREVIEW_TEXT"   => "текст для списка элементов"
    );

    if($PRODUCT_ID = $el->Add($arLoadProductArray)) {
    ?>
    <section class="modal_form active" id="sank_review">
        <div class="modal_form__wrap">
            <form class="content_modal_form">
                <div class="box_close_btn_modal_form">
                    <button type="button" class="close_modal_form btn-reset active" onclick="CloseModal('sank_review')">
                        <svg width="24" height="24" class="burger-close">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite.svg#burger-close"></use>
                        </svg>
                    </button>
                </div>
                <div class="title_modal_form"><?=$arResult["OK_MESSAGE"]?></div>
                <div class="mini_text_modal_form">Большое спасибо, за оставленный вами отзыв.</div>

                <div class="btn_close_form" onclick="CloseModal('sank_review')">Закрыть</div>
            </form>
        </div>
    </section>
    <?
    }
}
?>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <?=bitrix_sessid_post()?>
    <h2>Оставить отзыв</h2>
    <div class="textarea_box">

        <textarea name="MESSAGE" id="" class="textarea_reviews_form" placeholder="Текст отзыва....."><?=$arResult["MESSAGE"]?></textarea>
        <div class="count_words">01/2054</div>
    </div>
    <div class="btn_rating_box_reviews_form">
        <?if($arParams["USE_CAPTCHA"] == "Y"):?>
            <div class="mf-captcha">
                <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
                <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
                <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
                <input type="text" name="captcha_word" size="30" maxlength="50" value="">
            </div>
        <?endif;?>
        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

        <div class="btn_reviews_form" onclick="OpenModal('sank_review')"> <input type="submit" name="submit" value="Оставить отзыв"></div>
        <div class="rating_box_reviews_form">
            <div class="title_rating_reviews_form">Ваш рейтинг:</div>
            <div class="check_list_reviews_form">
                <input name="rating" value="5" id="rating_5" type="radio" />
                <label for="rating_5" class="label_rating"></label>

                <input name="rating" value="4" id="rating_4" type="radio" />
                <label for="rating_4" class="label_rating"></label>

                <input name="rating" value="3" id="rating_3" type="radio" />
                <label for="rating_3" class="label_rating"></label>

                <input name="rating" value="2" id="rating_2" type="radio" />
                <label for="rating_2" class="label_rating"></label>

                <input name="rating" value="1" id="rating_1" type="radio" />
                <label for="rating_1" class="label_rating"></label>
            </div>
        </div>
    </div>
</form>






