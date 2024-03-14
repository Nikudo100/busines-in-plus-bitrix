<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
// $arSelect = array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PAGE_URL", "PROPERTY_NABOR", "PREVIEW_TEXT",);
$arSelect = array();
$arFilter = array("IBLOCK_ID" => $arParams['IBLOCK_ID'], "ACTIVE" => "Y");
$res = CIBlockElement::GetList(array("SORT" => "ASC"), $arFilter, false, false, $arSelect);
debug($res->GetNext());
?>
<div class="container">
	<div class="what-say">
		<div class="what-say-title">
			Что говорят наши клиенты:
		</div>
		<div class="wrapper news__wrapper">
			<div class="swiper-container swiper what-say__slider">
				<div class="swiper-wrapper">
					<? while ($ar_fields = $res->GetNext()) :
						// debug($ar_fields);
						$img_path = CFile::GetPath($ar_fields["PREVIEW_PICTURE"]);

					?>
						<div class="swiper-slide what-say-block d-flex">
							<div class="what-say-block-img">
								<? if (!empty($ar_fields['PREVIEW_PICTURE'])) : ?>
									<img src="<?= $img_path ?>" alt="<?= $ar_fields['NAME'] ?>">
								<? else : ?>
									<img src="<?= S_T_P ?>/assets/img/Rectangle 3.png" class="item-news__img _fit-img" alt="">
								<? endif ?>
							</div>
							<div class="what-say-block-content">
								<div class="what-say-block-content-title">
									<?= $ar_fields['NAME'] ?>
									Алексей Щербаков <br>
									Директор ООО “Ромашка”
								</div>
								<div class="what-say-block-content-text">
									<?= htmlspecialchars_decode($ar_fields['PREVIEW_TEXT']) ?>
									<a href="<?= $ar_fields["DETAIL_PAGE_URL"] ?>">Подробнее</a>
								</div>
							</div>
						</div>
					<? endwhile ?>
				</div>
				<div class="swiper-pagination">
				</div>
			</div>
		</div>
	</div>
</div>
<? //} 
?>
