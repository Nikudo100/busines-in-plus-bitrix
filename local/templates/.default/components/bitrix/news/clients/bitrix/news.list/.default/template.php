<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
// debug($arResult['ITEMS'][0]);
?>
<?
$APPLICATION->IncludeComponent(
    "custom:main_page.man",
    "clients",
    array(
        "ELEMENT_ID" => 27,
        "IBLOCK_ID" => 16
    )
); ?>
<div class="pos-rel">
    <div class="bg-clients"></div>
    <div class="container">
        <div class="logos d-flex flex-wrap">
            <?php foreach ($arResult["ITEMS"] as $key => $arItem) : ?>
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="logos-block d-flex flex-column">
                    <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])) : ?>
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT']; ?>">
                    <? else : ?>
                        <img src="<?= S_T_P ?>/assets/img/contacts/Rectangle.png" alt="">
                    <? endif ?>
                    <span><?= $arItem['PROPERTIES']['SITY']['VALUE']; ?></span>
                </a>
            <?php endforeach; ?>
        </div>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
            <div id="pag"><br /><?= $arResult["NAV_STRING"] ?></div>
        <? endif; ?>
    </div>
</div>
<? $APPLICATION->IncludeComponent(
    "custom:main.feedback.big",
    "our_client",
    array(
        "AJAX_MODE" => "Y",
        "COMPONENT_TEMPLATE" => "our_client",
        "EMAIL_TO" => "kunachillo@gmail.com",
        "EVENT_MESSAGE_ID" => array(0 => "7",),
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "REQUIRED_FIELDS" => array(0 => "NAME", 1 => "EMAIL",),
        "USE_CAPTCHA" => "N"
    )
); ?>