<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (!empty($arResult['ELEMENT'])) {
	$element = $arResult['ELEMENT'];
?>
	<div class="container">
		<div class="with">
			<div class="with-title">
				<?= htmlspecialchars_decode($element['NAME']) ?>
			</div>
			<div class="d-flex justify-content-md-between">
				<div class="with-img">
					<? if (!empty($element['PREVIEW_PICTURE'])) : ?>
						<img src="<?= CFile::GetPath($element['PREVIEW_PICTURE']) ?>" alt="">
					<? else : ?>
						<img src="<?= S_T_P ?>/assets/img/image 2.jpg" alt="">
					<? endif ?>
				</div>
				<div class="with-stat d-flex justify-content-md-between flex-column">
					<? foreach ($arResult['POGRESS']['POGRESS_TEXTS'] as $key => $value) { ?>
						<? if (!empty($value) && !empty($arResult['POGRESS']['PROGRESS_PERENTAGES'][$key])) : ?>
							<? if ($key == 4) : break; endif ?>
							<div class="with-stat-block">
								<div class="with-stat-block-b d-flex justify-content-md-between">
									<span class="with-stat-block-b-l"><?= $value ?></span>
									<span class="with-stat-block-b-r"><span>на </span><?= $arResult['POGRESS']['PROGRESS_PERENTAGES'][$key] ?></span>
									<p style="width: <?= $arResult['POGRESS']['PROGRESS_PERENTAGES'][$key] ?>;"></p>
								</div>
							</div>
						<? endif ?>
					<? } ?>
				</div>
			</div>
		</div>
	</div>
<?php
}
?>