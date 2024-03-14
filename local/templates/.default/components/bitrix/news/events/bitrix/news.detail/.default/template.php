<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

$APPLICATION->SetTitle($arResult["NAME"]);
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

// Подключение необходимых модулей

Loader::includeModule("iblock");

// Получение ID текущего элемента
$currentElementId = $arResult["ID"];

// Поиск следующего элемента
$arNextElement = [];
$arFilter = array(
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"ACTIVE" => "Y",
	">ID" => $currentElementId // Берем элементы с ID больше текущего элемента
);
$arSelect = array("ID", "NAME", "DETAIL_PAGE_URL");
$arOrder = array("ID" => "ASC"); // Сортируем по возрастанию ID
$arNavParams = array("nTopCount" => 1); // Получаем только один элемент
$rsNextElement = CIBlockElement::GetList($arOrder, $arFilter, false, $arNavParams, $arSelect);
if ($arElement = $rsNextElement->GetNext()) {
	$arNextElement = $arElement;
}
?>

<div class="event-page">
	<div class="container">
		<div class="event-page-title"><?= $arResult["NAME"] ?></div>
		<div class="event-page-row">
			<div class="event-page-row-cart">
				<div class="event-page-row-cart-date">
					<div class="circle"><span><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span></div>
				</div>
				<div class="event-page-row-cart-text">Все мероприятия</div>
				<? if (!empty($arNextElement)) {
					$nextUrl = str_replace("/events/", "/o-komnanii/meropriyatiya/", $arNextElement["DETAIL_PAGE_URL"]);
				?>
					<a href="<?= $nextUrl ?>" class="event-page-row-cart-next">Следующее</a>
				<? } ?>
				<div class="event-page-row-cart-share">Поделиться:</div>
				<div class="event-page-row-cart-icons">
					<a href="#" class="footer-contact-icons-i">
						<img src="<?= S_T_P  ?>/assets/img/Frame-1.svg" alt="">
					</a>
					<a href="#" class="footer-contact-icons-i">
						<img src="<?= S_T_P  ?>/assets/img/Frame.svg" alt="">
					</a>
				</div>
			</div>
			<div class="event-page-row-info">
				<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])) : ?>
					<div class="event-page-row-info-img">
						<img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
					</div>
				<? endif; ?>
				<div class="event-page-row-info-text">
					<?= $arResult["DETAIL_TEXT"] ?>
				</div>
			</div>
		</div>
	</div>
	<? if (!empty($arResult["PROPERTIES"]["GALLERY"]["VALUE"])) { ?>
		<div class="img-container">
			<div class="d-flex flex-wrap">
				<? foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $imageId) : ?>
					<? $image = CFile::GetFileArray($imageId); ?>
					<a data-fancybox="gallery" href="<?= $image["SRC"] ?>">
						<img class="rounded" src="<?= $image["SRC"] ?>" />
					</a>
				<? endforeach; ?>
			</div>
		</div>
	<? } ?>
</div>