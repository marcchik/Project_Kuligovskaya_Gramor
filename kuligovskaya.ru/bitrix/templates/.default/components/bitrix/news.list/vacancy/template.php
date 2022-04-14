<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(empty($arResult)) return;

?>



<div class="vakancii__top">
    <div class="vakancii__top__col vakancii__col vakancii__col1">
        Вакансия:
    </div>
    <div class="vakancii__top__col vakancii__col vakancii__col2">
        Информация
    </div>
    <div class="vakancii__top__col vakancii__col vakancii__col3">
        Условия
    </div>
</div>
<div class="vakancii__list">
    <? foreach($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

        <div class="vakancii__row" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="vakancii__header">
            <div class="vakancii__name vakancii__col vakancii__col1">
                <?=$arItem['NAME']?>:
            </div>
            <div class=" vakancii__col vakancii__col2">
                <div class="vakancii__des">
                    Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию  <?=$arItem['NAME']?>....
                </div>
            </div>
            <div class="vakancii__terms vakancii__col vakancii__col3">
                <div class="vakancii__price">
                    <?=$arItem['PROPERTIES']['PAY']['VALUE']?>
                </div>
                <button type="button" class="vakancii__btn">
                    <svg width="15px" height="7.5" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 1L8.5 8.5L1 0.999999" stroke="white"/>
                        <path d="M16 1L8.5 8.5L1 0.999999" stroke="white"/>
                        <path d="M16 1L8.5 8.5L1 0.999999" stroke="white"/>
                    </svg>

                </button>
            </div>
        </div>
        <div class="vakancii__body">
            <div class="vakancii__body__wrap">
                <div class="vakancii__body__col">
                    <div class="vakancii__span">Требования:</div>
                    <?=$arItem['PROPERTIES']['REQ']['~VALUE']['TEXT']?>
                </div>
                <div class="vakancii__body__col">

                    <p>
                        <div class="vakancii__span">Обязанности:</div>
                        <?=$arItem['PROPERTIES']['RESP']['~VALUE']['TEXT']?>
                    </p>
                    <p>
                        <div class="vakancii__span">Условия:</div>
                            <?=$arItem['PROPERTIES']['COND']['~VALUE']['TEXT']?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <? endforeach; ?>
</div>
<div class="more-btn d-flex flex-center">
    <button class="btn" type="button">
        Показать еще
    </button>
</div>