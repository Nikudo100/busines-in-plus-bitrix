<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
// debug($arResult);
?>

<div class="container">
	<div class="why">
		<div class="why-title">	<?= htmlspecialchars_decode($element['NAME']) ?></div>
		<ul class="why-tabs d-flex">
			<? foreach ($arResult['TABS']['BUTTON_TEXTS'] as $key => $value) { ?>
				<? if ($arResult['TABS']['BUTTON_TEXTS'] !== '') : ?>
					<li class="why-tabs-tab d-flex <?= $key == 0 ? 'active' : '' ?>"><span><?= $value ?></span></li>
				<? endif ?>
			<? } ?>
		</ul>
		<? foreach ($arResult['TABS']['BUTTON_TEXTS_INNER'] as $key => $value) { ?>
			<? if ($arResult['TABS']['BUTTON_TEXTS_INNER'] !== '') : ?>
				<div class="why-content <?= $key == 0 ? 'active' : '' ?>">
					<?
					$buttonTexts = unserialize($value);
					// print $buttonTexts;
					echo $buttonTexts['TEXT']; ?>
				</div>
			<? endif ?>
		<? } ?>
	</div>
</div>