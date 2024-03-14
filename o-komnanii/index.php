<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О комнании");
?>
<? $APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "breadcrombls",
    array(
        "COMPONENT_TEMPLATE" => ".default",
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0"
    )
); ?>
<?
$APPLICATION->IncludeComponent(
    "custom:about",
    "",
    array(
        "IBLOCK_ID" => 19, // ID инфоблока
        "ELEMENT_ID" => 39
    )
)
?>
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
); ?><br>
<br>
<br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>