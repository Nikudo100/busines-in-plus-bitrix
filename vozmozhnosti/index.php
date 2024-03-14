<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Возможности");
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
<div class="opport">
    <div class="container">
        <? $APPLICATION->IncludeComponent(
            "custom:main_page.man",
            "vozmojnosti",
            array(
                "IBLOCK_ID" => 18, // ID инфоблока
                "ELEMENT_ID" => 37
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
                "SUB_TEXT" => "Текст Lorem ipsum — классический текст-«рыба» (условный, зачастую бессмысленный текст-заполнитель, вставляемый в макет страницы).",
                "TITLE_TEXT" => "Чтобы узнать стоимость системы, <span>оставьте заявку:</span>",
                "USE_CAPTCHA" => "N"
            )
        ); ?>

        <? $APPLICATION->IncludeComponent(
            "custom:main_page.man",
            "vozmojnosti2",
            array(
                "IBLOCK_ID" => 18, // ID инфоблока
                "ELEMENT_ID" => 38
            )
        )
        ?>
    </div>
    <br>    
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>