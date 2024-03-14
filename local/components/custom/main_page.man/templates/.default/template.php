<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult['ELEMENT'])) {
    $element = $arResult['ELEMENT'];
?>
    <div class="container">
        <div class="man d-flex">
            <div class="man-text">
                <div class="man-text-title">
                    <?= htmlspecialchars_decode($element['NAME']) ?>
                </div>
                <div class="man-text-sub"><?= $element['PREVIEW_TEXT'] ?></div>
                <button class="man-text-button"><?= $element['DETAIL_TEXT'] ?></button>
            </div>
            <div class="man-img">
                <? if (!empty($element['PREVIEW_PICTURE'])) : ?>
                    <img src="<?= CFile::GetPath($element['PREVIEW_PICTURE']) ?>" alt="">
                <? else : ?>
                    <img src="<?= S_T_P ?>/assets/img/Vector 4.svg" alt="">
                <? endif ?>
            </div>
        </div>
    </div>
<?php
}
?>