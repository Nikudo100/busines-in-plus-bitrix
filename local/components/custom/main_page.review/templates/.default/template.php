<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (!empty($arResult['ELEMENTS'])) {
	$elements = $arResult['ELEMENTS'];
?>
	<div class="container">
		<div class="what-say">
			<div class="what-say-title">
				Что говорят наши клиенты:
			</div>
			<div class="wrapper news__wrapper">
				<div class="swiper-container swiper what-say__slider">
					<div class="swiper-wrapper">
						<?php foreach ($elements as $ar_fields) :
							// debug($ar_fields);
						?>
							<div class="swiper-slide what-say-block d-flex">
								<div class="what-say-block-img">
									<?php if (!empty($ar_fields['PREVIEW_PICTURE'])) : ?>
										<img src="<?= $ar_fields['PREVIEW_PICTURE'] ?>" alt="<?= $ar_fields['NAME'] ?>">
									<?php else : ?>
										<img src="<?= S_T_P ?>/assets/img/Rectangle 3.png" class="item-news__img _fit-img" alt="">
									<?php endif ?>
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
						<?php endforeach ?>
					</div>
					<div class="swiper-pagination">
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>