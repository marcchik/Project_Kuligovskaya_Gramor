<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
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
)

?>
<?if (!empty($arResult)):?>
    <ul class="mob-nav__main list-reset">
        <? foreach($arResult as $arItem):?>
            <li>
                <a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
            </li>
        <? endforeach; ?>
    </ul>
<? endif; ?>
