<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


$strReturn .=
	'<div class="bread-crumbs">
	<div class="container">
		<ul>
		<li><a class="bread-crumbs_link" href="/">Главная</a></li>
		';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= '<li><a class="bread-crumbs_link" href="' . $arResult[$index]["LINK"] . '">' . $title . '</a></li>';
	} else {
		$strReturn .= '<li><a href="#">' . $title . '</a></li>';
	}
}

$strReturn .= '	</ul>
			</div>
		</div>';

return $strReturn;
