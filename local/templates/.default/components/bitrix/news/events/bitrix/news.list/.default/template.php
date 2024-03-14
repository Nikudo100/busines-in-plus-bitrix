<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="events-page">
    <div class="container">
        <div class="events-page-title">Мероприятия</div>
        <div class="events-page-row grid">
            <?php
            foreach ($arResult["ITEMS"] as $key => $arItem) : ?>
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="grid-item events-page-row-l-block
                <?= ($arItem['PROPERTIES']['SHOW_RIGHT']['VALUE'] == 'Y') ? 'grid-item--height2' : 'grid-item--width2' ?>
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
            <?php endforeach; ?>
        </div>
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <div id="pag"><br /><?=$arResult["NAV_STRING"]?></div>
        <?endif;?>
    </div>
</div>