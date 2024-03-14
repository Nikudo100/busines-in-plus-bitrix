<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("test"); ?><div class="bg-black" style="background-color: #000;">
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	".default", 
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "20",
		"IBLOCK_TYPE" => "news",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"custom:tree-learn",
	".default",
	Array(
		"IBLOCK_ID" => 20
	)
);?>
<ul>
	<li> <a href="#">Новые статьи</a>
	<ul>
		<li><a href="#">Запуск бизнес-процессов приложения</a>
		<ul>
			<li> <a href="#">Название подпункта</a> </li>
		</ul>
 </li>
		<li><a href="#">Запуск бизнес-процессов приложения</a></li>
		<li><a href="#">Запуск бизнес-процессов приложения</a></li>
		<li><a href="#">Запуск бизнес-процессов приложения</a></li>
		<li><a href="#">Запуск бизнес-процессов приложения</a></li>
	</ul>
 </li>
	<li><a href="#">Поддержка Бизнес в плюсе</a></li>
</ul>
<style>
	.tree {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.tree li {
		margin: 0;
		padding: 0 10px;
		line-height: 2em;
		border-bottom: 1px solid #ccc;
	}

	.tree li:last-child {
		border-bottom: none;
	}

	.tree li a {
		text-decoration: none;
		color: #333;
	}

	.tree li a:hover {
		color: #000;
	}

	.tree ul {
		list-style: none;
		padding: 0;
		margin: 0;
		display: none;
	}

	.tree li:hover ul {
		display: block;
	}
</style><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>