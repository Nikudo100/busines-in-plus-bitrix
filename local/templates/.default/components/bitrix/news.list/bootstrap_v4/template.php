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
<div class="events-page">
	<div class="container">
		<div class="events-page-title"><?= $arResult['NAME']; ?></div>
		<div class="events-page-row">
			<?php
			$counter = 0;
			foreach ($arResult["ITEMS"] as $key => $arItem) :?>
				<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="events-page-row-l-block
				 <?= ($key % 2 == 0) ? 'events-page-row-l' : 'events-page-row-r' ?>
				 <?= ($key < 2) ? 'visible' : 'hidden'; ?>
				 ">
					<div class="events-page-row-l-block-data"><?= $arItem['DISPLAY_ACTIVE_FROM']; ?></div>
					<div class="events-page-row-l-block-img">
						<img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT']; ?>">
					</div>
					<div class="events-page-row-l-block-text">
						<div class="events-page-row-l-block-text-title"><?= $arItem['NAME']; ?></div>
						<div class="events-page-row-l-block-text-sub"><?= $arItem['PREVIEW_TEXT']; ?></div>
					</div>
				</a>
				<?php $counter++; ?>
			<?php endforeach; ?>
		</div>
		<? if (count($arResult["ITEMS"]) > 2) : ?>
			<div class="show-more-news">
				<button class="events-page-button show-more-news-btn">Показать еще</button>
			</div>
		<?php endif; ?>
	</div>
</div>
<script>
    $(document).ready(function () {
        var totalItems = <?= count($arResult["ITEMS"]) ?>;
        var visibleItems = 2; // Переменная для хранения количества отображаемых новостей
        $('.show-more-news-btn').click(function () {
            visibleItems += 2; // Увеличиваем количество отображаемых новостей на 2
            $('.events-page-row-l-block:hidden:lt(2)').slideDown(); // Показываем еще две новости
            // Если показаны все новости, скрываем кнопку
            if (visibleItems >= totalItems) {
                $('.show-more-news').hide();
            }
        });
    });
</script>