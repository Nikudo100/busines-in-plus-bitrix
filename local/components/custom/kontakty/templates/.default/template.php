<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult['ELEMENT'])) { ?>
	<div class="contacts-title"><?= htmlspecialchars_decode($arResult['ELEMENT']['NAME']) ?></div>
	<div class="contacts-row d-flex justify-content-md-between">
		<div class="contacts-row-block">
			<div class="contacts-row-block-title">Адрес:</div>
			<div class="contacts-row-block-info f">
				<?= htmlspecialchars_decode($arResult['CONTACT_PROPERTIES']['ADRESS']) ?>
			</div>
		</div>
		<div class="contacts-row-block">
			<div class="contacts-row-block-title">Телефон:</div>
			<div class="contacts-row-block-info s">
				<a href="tel:<?= preg_replace('/[^0-9]/', '', $arResult['CONTACT_PROPERTIES']['PHONE']) ?>">
					<?= $arResult['CONTACT_PROPERTIES']['PHONE'] ?>
				</a>
			</div>
		</div>
		<div class="contacts-row-block">
			<div class="contacts-row-block-title">За подробной информацией онлайн:</div>
			<div class="contacts-row-block-info f">
				<a href="mailto:<?= $arResult['CONTACT_PROPERTIES']['EMAIL'] ?>">
					<?= $arResult['CONTACT_PROPERTIES']['EMAIL'] ?>
				</a>
				<div class="d-flex">
					<a class="footer-contact-icons-i" href="#"><img src="<?= S_T_P  ?>/assets/img/Group 74.svg" alt=""></a>
					<a class="footer-contact-icons-i" href="#"><img src="<?= S_T_P  ?>/assets/img/Frame.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
<?php
}
?>