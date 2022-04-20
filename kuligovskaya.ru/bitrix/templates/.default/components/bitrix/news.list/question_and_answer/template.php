<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
if (empty($arResult)) return;

?>


<div class="faq__list">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="faq__row" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="faq__header">
                <div class="title_faq__header">
                    <?= $arItem['PROPERTIES']['QUESTION']['VALUE'] ?>
                </div>
                <button type="button" class="faq__btn">
                    <svg width="15px" height="7.5" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 1L8.5 8.5L1 0.999999" stroke="white"/>
                        <path d="M16 1L8.5 8.5L1 0.999999" stroke="white"/>
                        <path d="M16 1L8.5 8.5L1 0.999999" stroke="white"/>
                    </svg>
                </button>
            </div>
            <div class="faq__body" style="display: none">
                <div class="faq__body__wrap">
                    <div class="faq__body__col">
                        <p>
                        <div class="vakancii__span">Ответ:</div>
                            <?= $arItem['PROPERTIES']['ANSWER']['VALUE'] ?>
                        </p>
                        <p>
<!--                        <ul>-->
<!--                            <li> </li>-->
<!--                        </ul>-->
                        </p>
                    </div>

                </div>
            </div>
        </div>

    <? endforeach; ?>
</div>
