<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (!empty($arResult['ELEMENT'])) {
	$element = $arResult['ELEMENT'];
?>
	<div class="opportunities">
		<div class="second-bg"></div>
		<div class="container">
			<div class="opportunities-title">
				<?= htmlspecialchars_decode($element['NAME']) ?>
			</div>
			<div class="d-flex">
				<ul class="opportunities-list">
					<? foreach ($arResult['OPPORTUNITIES']['OPPORT'] as $key => $value) { ?>
						<? if ($value !== '') : ?>
							<? if ($key == 7) : break; endif ?>
							<li class="opportunities-list-li <?= $key == 0 ? 'active' : '' ?> "><span><?= $value ?></span>
								<div class="opportunities-list-li-text">
									<?= $arResult['OPPORTUNITIES']['OPPORT_TEXT'][$key] ?>
								</div>
							</li>
						<? endif ?>
					<? } ?>
				</ul>
				<div class="opportunities-img">
					<? if (!empty($element['PREVIEW_PICTURE'])) : ?>
						<img src="<?= CFile::GetPath($element['PREVIEW_PICTURE']) ?>" alt="">
					<? else : ?>
						<img src="<?= S_T_P ?>/assets/img/Frame.jpg" alt="">
					<? endif ?>
					<a href="/vozmozhnosti/"><button>
							<?= $element['DETAIL_TEXT'] ?></button></a>
				</div>
			</div>
		</div>
	</div>
<?php
}
?>