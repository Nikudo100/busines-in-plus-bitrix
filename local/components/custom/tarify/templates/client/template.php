<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (!empty($arResult['ELEMENTS'])) {
	// dd($arResult['ELEMENTS']);
?>
	<div class="client-review ">
		<div class="client-review-bg"></div>
		<div class="container">
			<!-- <div class="client-review"> -->
			<!-- <div class="client-review-bg"></div> -->
			<div class="client-review-title <?= ($APPLICATION->GetCurPage() !== '/') ? ' black' : '' ?>">
				<?php if (empty($arResult['NAME'])) : ?>
					Отзывы:
				<?php else : ?>
					<?= htmlspecialchars_decode($arResult['NAME']) ?>
				<?php endif; ?>
			</div>
			<div class="d-flex flex-wrap">
				<?php foreach ($arResult['ELEMENTS'] as $key => $value) : 	 ?>
					<div class="client-review-block">
						<div class="client-review-block-title">
							<?= $value['NAME'] ?>
							<br>
							Внедрение: <span><?= $value['DATE_CREATE'] ?></span>
						</div>
						<div class="client-review-block-text">
							<?= $value['PREVIEW_TEXT'] ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<!-- </div> -->
		</div>
	</div>
<?php
}
?>