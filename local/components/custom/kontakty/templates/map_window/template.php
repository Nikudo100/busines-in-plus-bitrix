<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
	// debug($arResult);
if (!empty($arResult['ELEMENT'])) {
?>
<div class="map-window">
    <div class="map-window-title"><?= htmlspecialchars_decode($arResult['ELEMENT']['NAME']) ?></div>
    <div class="map-window-adress"><?= htmlspecialchars_decode($arResult['CONTACT_PROPERTIES']['ADDRESS']) ?></div>
    <div class="map-window-text">За подробной информацией обращайтесь:</div>
    <a href="tel:<?= preg_replace('/[^0-9]/', '', $arResult['CONTACT_PROPERTIES']['PHONE']) ?>" class="map-window-phone"><?= $arResult['CONTACT_PROPERTIES']['PHONE'] ?></a>
    <a href="mailto:<?= $arResult['CONTACT_PROPERTIES']['EMAIL'] ?>" class="map-window-email"><?= $arResult['CONTACT_PROPERTIES']['EMAIL'] ?></a>
    <div href="#" class="map-window-icons d-flex">
        <a href="#"><img src="<?= S_T_P ?>/assets/img/Group 74.svg" alt=""></a>
        <a href="#"><img src="<?= S_T_P ?>/assets/img/Frame.svg" alt=""></a>
    </div>
</div>


<?php
}
?>