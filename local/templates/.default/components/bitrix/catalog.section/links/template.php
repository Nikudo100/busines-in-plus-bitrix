<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
// debug($arResult);
?>
<div class="catalog-section">


	<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; ?>

	<div class="d-flex fff">
		<div class="some-section1">
			<h2><?= $arResult['NAME'] ?></h2>


			<p><?= $arResult['DESCRIPTION'] ?></p>
			<div class="catalog-section-list">

				<ul>
					<? //debug($arResult["ITEMS"]);
					foreach ($arResult["ITEMS"] as $cell => $arElement) : ?>
						<li class="news-item-obuch">
							<a class="take-me" href="<? echo $arElement["DETAIL_PAGE_URL"] ?>"><? echo $arElement["NAME"] ?></a>
						</li>
					<? endforeach; ?>
				</ul>
			</div>
			<?
			// Get the file extension of the preview picture
			$F = CFile::GetFileArray($arResult['PICTURE']['ID']);
			$altText = $F['DESCRIPTION'];
			$isVideo = preg_match('/\b(mp4|mov|avi)\b/i', $altText);
			if ($isVideo) :
			?>
				<a class="client-text-row-img slide-video" data-fancybox="gallery" href="<?= $altText ?>">
					<video class="rounded" rounded>
						<source src="<?= $altText ?>" type="video/mp4">
					</video>
				</a>
			<? else : ?>
				<a class="client-text-row-img slide-video" data-fancybox="gallery" href="<?= $F['SRC'] ?>">
					<img src="<?= $F['SRC'] ?>" alt="<?= $altText ?>">
				</a>
			<? endif ?>

		</div>
		<div class="some-section">
			<?php
			$APPLICATION->IncludeComponent(
				"bitrix:search.form",
				"flat",
				[
					"PAGE" => '/search/',
					// "MODULE_ID" => "iblock"
				],
				$component,
				['HIDE_ICONS' => 'Y']
			); ?>
			<? $APPLICATION->IncludeComponent(
				"bitrix:catalog.section.list",
				"tree1",
				array(
					"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"COUNT_ELEMENTS" => "N",
					// "SECTION_ID" => "0",
					// "TOP_DEPTH" => "2",
					// "SECTION_URL" => $arParams["SECTION_URL"],
					// "CACHE_TYPE" => $arParams["CACHE_TYPE"],
					// "CACHE_TIME" => $arParams["CACHE_TIME"],
					// "DISPLAY_PANEL" => "N",
					// "ADD_SECTIONS_CHAIN" => $arParams['ADD_SECTIONS_CHAIN'],
					// "SECTION_USER_FIELDS"	=>	$arParams["SECTION_USER_FIELDS"],
					// "CURRENT_SECTION_ID" => $arResult["ID"]
				),
				$component
			); ?>
		</div>
	</div>


	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
		<br /><?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</div>