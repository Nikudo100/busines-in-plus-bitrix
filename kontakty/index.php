<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
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



<div class="pos-rel">
	<div class="bg-contacts"></div>
	<div class="container">
		<div class="contacts">
			<? $APPLICATION->IncludeComponent(
				"custom:kontakty",
				"",
				array(
					"IBLOCK_ID" => 15,
					"ELEMENT_ID" => 26
				)
			)
			?>
			<? $APPLICATION->IncludeComponent(
				"custom:main.feedback",
				"main",
				array(
					"AJAX_MODE" => "Y",
					"COMPONENT_TEMPLATE" => "main",
					"EMAIL_TO" => "kunachillo@gmail.com",
					"EVENT_MESSAGE_ID" => array(0 => "7",),
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",
					"REQUIRED_FIELDS" => array(0 => "NAME", 1 => ""),
					"SUB_TEXT" => "",
					"TITLE_TEXT" => "<span> Остались вопросы?</span> <br> оставьте Сообщение и мы перезвоним.",
					"USE_CAPTCHA" => "N"
				)
			); ?>
		</div>
	</div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>