<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<style>

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .list-reset > li {
        position: relative;
    }

    .submenu a {
        margin: 10px;
        display: inline-block;
    }
    .one .submenu {
        background: #b19891;
    }
    .submenu {
        position: absolute;
        top: 100%;
        z-index: 10;
    }
    .one .submenu {
        display: none;
    }
    ul li:hover .submenu {
        display: block;
    }
</style>

<?
CModule::IncludeModule('iblock');

$serviceArray = array();

$arSelect = Array();
$arFilter = Array("IBLOCK_ID"=>65, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $serviceArray[] = $arFields['NAME'];
}
if ($arParams['ROOT_MENU_TYPE'] == 'top') {
    $arResult = array
    (
        '0' => array
        (
            'TEXT' => 'О компании',
            'LINK' => '/about',
            'SELECTED' => '1',
        ),
        '1' => array
        (
            'TEXT' => 'Новости',
            'LINK' => '/news',
            'SELECTED' => '1',
        ),
        '2' => array
        (
            'TEXT' => 'Услуги',
            'LINK' => '/services',
            'SELECTED' => '1',
        ),
        '3' => array
        (
            'TEXT' => 'Команда',
            'LINK' => '/team',
            'SELECTED' => '1',
        ),
        '4' => array
        (
            'TEXT' => 'Вакансии',
            'LINK' => '/vacancy',
            'SELECTED' => '1',
        ),
        '5' => array
        (
            'TEXT' => 'Отзывы',
            'LINK' => '/reviews',
            'SELECTED' => '1',
        ),
        '6' => array
        (
            'TEXT' => 'Контакты',
            'LINK' => '/contacts',
            'SELECTED' => '1',
        ),
        '7' => array
        (
            'TEXT' => 'Избранное',
            'LINK' => '/favorites',
            'SELECTED' => '1',
        )
    );
} else {
    $arResult = array
    (
        '0' => array
        (
            'TEXT' => 'О компании',
            'LINK' => '/about',
            'SELECTED' => '1',
        ),
        '1' => array
        (
            'TEXT' => 'Новости',
            'LINK' => '/news',
            'SELECTED' => '1',
        ),
        '2' => array
        (
            'TEXT' => 'Услуги',
            'LINK' => '/services',
            'SELECTED' => '1',
        ),
        '3' => array
        (
            'TEXT' => 'Команда',
            'LINK' => '/team',
            'SELECTED' => '1',
        ),
        '4' => array
        (
            'TEXT' => 'Вакансии',
            'LINK' => '/vacancy',
            'SELECTED' => '1',
        ),
        '5' => array
        (
            'TEXT' => 'Отзывы',
            'LINK' => '/reviews',
            'SELECTED' => '1',
        ),
        '6' => array
        (
            'TEXT' => 'Контакты',
            'LINK' => '/contacts',
            'SELECTED' => '1',
        )
    );
}

?>

<nav class="one">
    <?if (!empty($arResult)):?>
    <ul class="list-reset">

        <? foreach($arResult as $arItem):?>
            <li>
                <?if($arItem['TEXT'] != 'Услуги'):;?>
                    <a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
                <?else:?>
                    <a><?=$arItem['TEXT']?></a>
                        <ul class="submenu">
                            <?foreach ($serviceArray as $item):?>
                                <a href="#"><?=$item?></a>
                            <?endforeach;?>
                        </ul>
                <?endif;?>
            </li>
        <? endforeach; ?>

    </ul>
<? endif; ?>
</nav>
