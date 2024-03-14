<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тарифы");
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
<? $APPLICATION->IncludeComponent(
    "custom:tarify",
    ".default",
    array(
        "IBLOCK_ID" => 13, // ID инфоблока
    )
)
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>