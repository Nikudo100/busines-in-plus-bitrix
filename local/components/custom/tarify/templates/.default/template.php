<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (!empty($arResult['ELEMENTS'])) {
	// debug($arResult);
	
?>
	<div class="container">
		<div class="tarif">
			<div class="tarif-title <?= ($APPLICATION->GetCurPage() !== '/') ? ' black' : '' ?>">
				<?php if (empty($arResult['NAME'])) : ?>
					Тарифы
				<?php else : ?>
					<?= htmlspecialchars_decode($arResult['NAME']) ?>
				<?php endif; ?><?= htmlspecialchars_decode($arResult['NAME']) ?>
			</div>
			<div class="d-flex">
				<? foreach ($arResult['ELEMENTS'] as $key => $value) { ?>
					<? if (!empty($value)) : ?>
						<div class="tarif-block">
							<div class="tarif-block-title">
								<?= $value['NAME'] ?>
							</div>
							<div class="tarif-block-price">
								<?= $value['PRICE'] . ' руб' ?>
								<p>
									<?= $value['PERIOD'] ?>
								</p>
							</div>
							<div class="tarif-block-text">
								<?= $value['DESC']['TEXT'] ?>
								<a href="<?= $value['HREF'] ?>">Узнать больше</a>
								<button class="tarif-block-text-button but-modal-breef"><?= $value['BUT'] ?></button>
							</div>
						</div>
					<? endif ?>
				<? } ?>
			</div>
		</div>
	</div>
<?php
}
?>