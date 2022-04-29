<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="vakan">
    <div class="wrap">
        <div class="acordion">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div class="acordion__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="acordion__title">
                        <?echo $arItem["NAME"]?>
                        <div class="acordion__item__imgs">

                            <?if($arItem['CUSTOM_LOGO']):?>
                                <?foreach($arItem['CUSTOM_LOGO'] as $logo):?>
                                    <?if($logo['URL'] && $logo['PICTURE']):?>
                                        <a href="<?=$logo['URL']?>"><img src="<?=$logo['PICTURE']?>"></a>
                                    <?endif;?>
                                <?endforeach;?>
                            <?endif;?>

                        </div>
                        <span class="acordion__toggle"></span>
                    </div>
                    <div class="acordion__body">
                        <?echo $arItem['PREVIEW_TEXT_TYPE'] === 'html' ? $arItem['~PREVIEW_TEXT'] : '<p>'.$arItem['PREVIEW_TEXT'].'</p>';?>
                        <?if($arItem['PROPERTIES']['RESP']['VALUE']):?>
                            <p>
                                <strong>
                                    Обязанности
                                </strong>
                            </p>
                            <ul>
                                <?foreach($arItem['PROPERTIES']['RESP']['VALUE'] as $resp):?>
                                    <li>
                                        - <?=$resp?>
                                    </li>
                                <?endforeach;?>
                            </ul>
                        <?endif;?>
                        <?if($arItem['PROPERTIES']['TREB']['VALUE']):?>
                            <p>
                                <strong>
                                    Требования
                                </strong>
                            </p>
                            <ul>
                                <?foreach($arItem['PROPERTIES']['TREB']['VALUE'] as $treb):?>
                                    <li>
                                        - <?=$treb?>
                                    </li>
                                <?endforeach;?>
                            </ul>
                        <?endif;?>
                        <?if($arItem['PROPERTIES']['USL']['VALUE']):?>
                            <p>
                                <strong>
                                    Условия
                                </strong>
                            </p>
                            <ul>
                                <?foreach($arItem['PROPERTIES']['USL']['VALUE'] as $usl):?>
                                    <li>
                                        - <?=$usl?>
                                    </li>
                                <?endforeach;?>
                            </ul>
                        <?endif;?>
                        <button class="btn btn-red vak-button" data-graph-path="first" data-vakid="<?=$arItem['ID']?>" data-graph-animation="fadeInUp">Откликнуться</button>
                    </div>
                </div>

            <?endforeach;?>
            <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                <?=$arResult["NAV_STRING"]?>
            <?endif;?>
        </div>
    </div>
</section>

<!-- модалки -->
<div class="modal">
    <div class="modal__container modal-new" role="dialog" aria-modal="true" data-graph-target="first">
        <button type="button" class="btn-reset modal__close" aria-label="Закрыть модальное окно"></button>
        <form class="modal-content-form" id="vakform" enctype="multipart/form-data">
            <div class="modal-title">Оставьте вашу заявку</div>
            <input type="hidden" id="vakid" name="vakid" value="">
            <label class="label">ФИО</label>
            <input type="text" placeholder="" name="name">
            <label class="label">Номер телефона</label>
            <input type="phone" placeholder="" name="phone">
            <!-- <label class="label">E-mail</label>
            <input type="email" placeholder="" name="email"> -->
            <label class="label">Прикрепить резюме</label>
            <label class="file">
                <input type="file" placeholder="Резюме" name="file">
                <div class="file-name">Файл</div>
            </label>

            <button type="submit" class="btn" data-graph-animation="fadeIn">Отправить</button>
            <div class="form-copy">Нажимая на кнопку вы соглашаетесь на обработку ваших персональних данных</div>
            <div class="vak-error-text"></div>
        </form>
    </div>

    <div class="modal__container modal-new" role="dialog" aria-modal="true" data-graph-target="senk">
        <button class="btn-reset modal__close" aria-label="Закрыть модальное окно"></button>
        <div class="modal-content-form">
            <div class="modal-title">Заявка на аренду!</div>
            <div class="text">
                Спасибо! Ваша заявка принята. Наши менеджеры скоро с вами свяжуться
            </div>
            <button type="submit" class="btn btn-close" data-graph-animation="fadeIn" aria-label="Закрыть модальное окно">Закрыть</button>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function() {

        var a = document.querySelectorAll('.vak-button');
        [].forEach.call( a, function(el) {
            el.onclick = function(e) {
                document.getElementById('vakid').value = el.getAttribute('data-vakid');
            }
        });

        $("#vakform").submit(function(){
            var $that = $(this),
                formData = new FormData($that.get(0));
            $.ajax({
                contentType: false,
                processData: false,
                type: "POST",
                url: "/include/ajax/vakansii.php",
                data: formData,
                dataType: 'json',
                success: function(result){
                    if(result.status=='success'){
                        document.querySelector(".modal__close").click();
                        new GraphModal().open('senk');
                    }else{
                        document.querySelector(".vak-error-text").style.textAlign = "center";
                        document.querySelector(".vak-error-text").style.marginTop = "10px";
                        document.querySelector(".vak-error-text").style.color = "#ef5241";
                        document.querySelector('.vak-error-text').textContent = result.mess;
                    }
                }
            });
            return false;
        });

    });

</script>