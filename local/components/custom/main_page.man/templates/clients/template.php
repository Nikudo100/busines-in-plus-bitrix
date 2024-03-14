<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult['ELEMENT'])) {
    $element = $arResult['ELEMENT'];
?>
    <div class="container">
        <div class="clients-title"><?= htmlspecialchars_decode($element['NAME']) ?></div>
        <div class="clients-row">
            <div class="clients-row-img">
                <?php if (!empty($element['PREVIEW_PICTURE'])) : ?>
                    <img src="<?= CFile::GetPath($element['PREVIEW_PICTURE']) ?>" alt="">
                <?php else : ?>
                    <img src="<?= S_T_P ?>/assets/img/contacts/Group 41.png" alt="">
                <?php endif ?>
            </div>
            <div class="clients-row-text">
                <div class="clients-row-text-title"><?= $element['PREVIEW_TEXT'] ?></div>
                <br>
                <div class="clients-row-text-sub"><?= $element['DETAIL_TEXT'] ?></div>
            </div>
        </div>
    </div>
<?php
}
?>