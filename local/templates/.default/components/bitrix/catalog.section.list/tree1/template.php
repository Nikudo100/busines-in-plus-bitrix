<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

$this->setFrameMode(true);
// debug($arResult["SECTIONS"]);
$strTitle = "";
?>
<div class="catalog-section-list">
	<h2>Прочитайте готовые ответы</h2>
	<?
	$TOP_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"];
	$CURRENT_DEPTH = $TOP_DEPTH;

	foreach ($arResult["SECTIONS"] as $arSection) {
		// $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
		// $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
		if ($CURRENT_DEPTH < $arSection["DEPTH_LEVEL"]) {
			echo "\n", str_repeat("\t", $arSection["DEPTH_LEVEL"] - $TOP_DEPTH), "<ul class=" . 'tree-' . $arSection['DEPTH_LEVEL'] . ">";
		} elseif ($CURRENT_DEPTH == $arSection["DEPTH_LEVEL"]) {
			echo "</li>";
		} else {
			while ($CURRENT_DEPTH > $arSection["DEPTH_LEVEL"]) {
				echo "</li>";
				echo "\n", str_repeat("\t", $CURRENT_DEPTH - $TOP_DEPTH), "</ul>", "\n", str_repeat("\t", $CURRENT_DEPTH - $TOP_DEPTH - 1);
				$CURRENT_DEPTH--;
			}
			echo "\n", str_repeat("\t", $CURRENT_DEPTH - $TOP_DEPTH), "</li>";
		}

		$count = $arParams["COUNT_ELEMENTS"] && $arSection["ELEMENT_CNT"] ? "&nbsp;(" . $arSection["ELEMENT_CNT"] . ")" : "";

		if ($_REQUEST['SECTION_ID'] == $arSection['ID']) {
			$link = '<b>' . $arSection["NAME"] . $count . '</b>';
			$strTitle = $arSection["NAME"];
		} else {
			$link = '<a href="' . $arSection["SECTION_PAGE_URL"] . '">' . $arSection["NAME"] . $count . '</a>';
		}

		echo "\n", str_repeat("\t", $arSection["DEPTH_LEVEL"] - $TOP_DEPTH);
	?>
		<li id="<?= $this->GetEditAreaId($arSection['ID']); ?>" class="lvl-<?= $arSection['DEPTH_LEVEL']; ?>">
			<?= $link ?>
			<br>
			<?php
			if ($arSection['DEPTH_LEVEL'] == 2) {
				// Вызов функции для вывода элементов раздела второго уровня
				getElementSection($arSection['ID']);
			}
			?>

		<?php
		$CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];
	}

	while ($CURRENT_DEPTH > $TOP_DEPTH) {
		echo "</li>";
		echo "\n", str_repeat("\t", $CURRENT_DEPTH - $TOP_DEPTH), "</ul>", "\n", str_repeat("\t", $CURRENT_DEPTH - $TOP_DEPTH - 1);
		$CURRENT_DEPTH--;
	}
		?>
</div>
<?= ($strTitle ? '<br/><h2>' . $strTitle . '</h2>' : '') ?>

<?php
function getElementSection($sectionId)
{
	// Параметры для выборки элементов раздела
	$arFilter = array(
		'IBLOCK_ID' => 20,
		'SECTION_ID' => $sectionId, // ID раздела
		'ACTIVE' => 'Y', // Только активные элементы
	);

	$arSelect = array(
		'ID',
		'NAME',
		'DETAIL_PAGE_URL',
	);

	// Выполняем запрос к базе данных
	$res = CIBlockElement::GetList(
		array('SORT' => 'ASC'),
		$arFilter,
		false,
		false,
		$arSelect
	);
	echo '<ul class="elements">';
	// Выводим элементы раздела
	while ($arItem = $res->GetNext()) {
		echo '<li class="element"><a href="' . $arItem['DETAIL_PAGE_URL'] . '">' . $arItem['NAME'] . '</a></li>';
	}
	echo '</ul>';
}
?>
