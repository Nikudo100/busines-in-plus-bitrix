<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?><div class="pos-rel">
	<div class="bg-bree">
	</div>
</div>
<? $APPLICATION->IncludeComponent(
	"custom:main_page.sys",
	"",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "Content",    // Типы инфоблоков
		"IBLOCK_ID" => "7",    // Список инфоблоков
		"CACHE_TYPE" => "A",    // Тип кеширования
		"CACHE_TIME" => "3600",    // Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",    // Учитывать права доступа
	),
	false
); ?>
<? $APPLICATION->IncludeComponent(
	"custom:main_page.advantages",
	"",
	array(
		"IBLOCK_ID" => 8, // ID инфоблока
		"ELEMENT_ID" => 12 // ID элемента
	)
); ?>
<?
$APPLICATION->IncludeComponent(
	"custom:main_page.opportunities",
	".default",
	array(
		"IBLOCK_ID" => 9, // ID инфоблока
		"ELEMENT_ID" => 13 // ID элемента
	)
);
?>
<? $APPLICATION->IncludeComponent(
	"custom:main_page.with",
	"",
	array(
		"IBLOCK_ID" => 10, // ID инфоблока
		"ELEMENT_ID" => 14 // ID элемента
	)
); ?>

<div class="bg-3">
	<div class="bg-3-img">
	</div>
	<? $APPLICATION->IncludeComponent(
		"custom:main_page.why",
		".default",
		array(
			"IBLOCK_ID" => 11, // ID инфоблока
			"ELEMENT_ID" => 15 // ID элемента
		)
	);
	?>
	<? $APPLICATION->IncludeComponent(
		"custom:main_page.man",
		".default",
		array(
			"IBLOCK_ID" => 12, // ID инфоблока
			"ELEMENT_ID" => 16
		)
	)
	?>
	<? $APPLICATION->IncludeComponent(
		"custom:tarify",
		".default",
		array(
			"IBLOCK_ID" => 13, // ID инфоблока
		)
	)
	?>
</div>

<? $APPLICATION->IncludeComponent(
	"bitrix:news",
	"main_page.events",
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "main_page.events",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0 => "", 1 => "",),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(0 => "SHOW_IN_MAIN", 1 => "",),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(0 => "", 1 => "",),
		"LIST_PROPERTY_CODE" => array(0 => "SHOW_IN_MAIN", 1 => "",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/o-komnanii/meropriyatiya/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("news" => "", "section" => "", "detail" => "#ELEMENT_ID#/",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	)
); ?>
<? $APPLICATION->IncludeComponent(
	"custom:main_page.review",
	".default",
	array(
		"IBLOCK_ID" => "14",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
); ?>
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
<br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>