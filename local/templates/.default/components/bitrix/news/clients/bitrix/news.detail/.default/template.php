<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$APPLICATION->SetTitle($arResult["NAME"]);
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
// debug($arResult);
?>
<div class="container">
	<h1 class="client-title"><?= $arResult["NAME"] ?></h1>
	<div class="d-flex">
		<div class="event-page-row-info-img">
			<div class="client-img">
				<?php if (is_array($arResult["DETAIL_PICTURE"])) : ?>
					<img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
				<?php else : ?>
					<img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>">
				<?php endif; ?>
			</div>
		</div>
		<div class="client-info">
			<div class="client-info-city"><?= $arResult['PROPERTIES']['SITY']['NAME'] ?></div>
			<a class="client-info-sity" href="<?= $arResult['PROPERTIES']['SITE']['NAME'] ?>"><?= $arResult['PROPERTIES']['SITE']['NAME'] ?></a>
			<div class="client-info-about">О компании</div>
			<div class="client-info-text">
				<? if (!empty($arResult['PROPERTIES']['TEXT_ABOUT1']['VALUE'])) : ?>
					<?= htmlspecialchars_decode($arResult['PROPERTIES']['TEXT_ABOUT1']['VALUE']['TEXT']); ?>
				<? endif ?>
			</div>
		</div>
	</div>
	<div class="client-text">
		<h3 class="client-text-title"><?= $arResult['PROPERTIES']['TITLE1']['VALUE'] ?></h3>
		<div class="client-text-sub">
			<? if (!empty($arResult['PROPERTIES']['TEXT_TITLE2']['VALUE'])) : ?>
				<?= $arResult['PROPERTIES']['TEXT_TITLE2']['VALUE']['TEXT'] ?>
			<? endif ?>
		</div>
		<div class="client-text-row">
			<?php if (!empty($arResult['PROPERTIES']['IMG']['VALUE'])) : ?>
				<?php $media = CFile::GetFileArray($arResult['PROPERTIES']['IMG']['VALUE']); ?>
				<?php $extension = pathinfo($media["SRC"], PATHINFO_EXTENSION); ?>
				<?php if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) : ?>
					<a data-fancybox="gallery" href="<?= $media["SRC"] ?>" class="client-text-row-img" >
						<img class="rounded" src="<?= $media["SRC"] ?>" />
					</a>
				<?php elseif (in_array($extension, ['mp4', 'mov', 'avi'])) : ?>
					<a class="client-text-row-img slide-video" data-fancybox="gallery" href="<?= $media["SRC"] ?>">
						<video class="rounded" rounded>
							<source src="<?= $media["SRC"] ?>" type="video/mp4">
						</video>
					</a>
				<?php endif; ?>
			<?php endif; ?>
			<div class="client-text-row-sub">
				<? if (!empty($arResult['PROPERTIES']['TEXT_IMG']['VALUE'])) : ?>
					<?= htmlspecialchars_decode($arResult['PROPERTIES']['TEXT_IMG']['VALUE']['TEXT']) ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="client-galery p-r-p-0">
		<h3><?= $arResult['PROPERTIES']['TITLE2']['VALUE'] ?></h3>
		<div class="client-galery-sub">
			<? if (!empty($arResult['PROPERTIES']['TEXT_TITLE2']['VALUE'])) : ?>
				<?= htmlspecialchars_decode($arResult['PROPERTIES']['TEXT_TITLE2']['VALUE']['TEXT']) ?>
			<?php endif; ?>
		</div>
		<? if (!empty($arResult["PROPERTIES"]["GALLERY"]["VALUE"])) { ?>
			<div class="pos-rel">
				<div class="client-galery-swiper swiper">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $mediaId) : ?>
								<?php $media = CFile::GetFileArray($mediaId); ?>
								<?php $extension = pathinfo($media["SRC"], PATHINFO_EXTENSION); ?>
								<?php if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) : ?>
									<a data-fancybox="gallery" href="<?= $media["SRC"] ?>" class="swiper-slide">
										<img class="rounded" src="<?= $media["SRC"] ?>" />
									</a>
								<?php elseif (in_array($extension, ['mp4', 'mov', 'avi'])) : ?>
									<a class="swiper-slide slide-video" data-fancybox="gallery" href="<?= $media["SRC"] ?>">
										<video class="rounded" rounded>
											<source src="<?= $media["SRC"] ?>" type="video/mp4">
										</video>
									</a>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		<? } ?>
	</div>
</div>
<? $APPLICATION->IncludeComponent(
	"custom:tarify",
	"client",
	array(
		"IBLOCK_ID" => 17, // ID инфоблока
	)
)
?>