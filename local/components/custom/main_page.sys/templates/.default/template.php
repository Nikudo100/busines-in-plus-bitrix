<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
foreach ($arResult['ITEMS'] as $key => $val) :
?>
	<?
	// $this->AddEditAction($val['ID'], $val['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	// $this->AddDeleteAction($val['ID'], $val['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('FAQ_DELETE_CONFIRM', array("#ELEMENT#" => CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_NAME")))));
	?>
	<div class="container">
		<div class="auto-sistem d-flex justify-content-md-between">
			<div class="auto-sistem-promo d-flex justify-content-md-between flex-column">
				<div class="auto-sistem-promo-title"><?= $val['NAME'] ?></div>
				<div class="auto-sistem-promo-desc"><?= $val['PREVIEW_TEXT'] ?></div>
				<button class="auto-sistem-promo-button"><?= $val['DETAIL_TEXT'] ?></button>
			</div>
			<div class="auto-sistem-spinner">
				<div class="auto-sistem-spinner-img rotating-element"><img src="<?= S_T_P ?>/assets/img/Frame (21) 1.svg" alt=""></div>
			</div>
		</div>
	</div>

<? endforeach; ?>