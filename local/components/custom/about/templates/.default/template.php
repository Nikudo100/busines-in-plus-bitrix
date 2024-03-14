<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<div class="">
	<div class="pointup"></div>
	<div class="about container h pos-rel">
		<div class="about-title"><?= $arResult['ELEMENT']['NAME'] ?></div>
		<div class="bg-gr"></div>
		<canvas class="bg-gr" id="myChart" style="height:300px; width:100vw"></canvas>
	</div>
	<div class="about container">
		<div class="opport-row-img about-image">
			<?
			// Get the file extension of the preview picture
			$F = CFile::GetFileArray($arResult['ELEMENT']['PREVIEW_PICTURE']);
			$altText = $F['DESCRIPTION'];
			$isVideo = preg_match('/\b(mp4|mov|avi)\b/i', $altText);
			if ($isVideo) :
			?>
				<a class="client-text-row-img slide-video" data-fancybox="gallery" href="<?= $altText ?>">
					<video class="rounded" rounded>
						<source src="<?= $altText ?>" type="video/mp4">
					</video>
				</a>
			<? else : ?>
				<a class="client-text-row-img slide-video" data-fancybox="gallery" href="<?= $F['SRC'] ?>">
					<img src="<?= $F['SRC'] ?>" alt="<?= $altText ?>">
				</a>
			<? endif ?>
		</div>
		<div class="about-text">
			<?= $arResult['ELEMENT']['PREVIEW_TEXT'] ?>
		</div>
		<div class="d-flex about about-m">
			<div class="d-flex">
				<? $sert1 = CFile::GetFileArray($arResult['PROPS']['SERT1'][0]) ?>
				<? $sert2 = CFile::GetFileArray($arResult['PROPS']['SERT2'][0]) ?>
				<a data-fancybox="gallery" href="<?= $sert1['SRC'] ?>">
					<img src="<?= $sert1['SRC'] ?>" alt="<?= $sert1['DESCRIPTION'] ?>">
				</a>
				<a class="m-lr" data-fancybox="gallery" href="<?= $sert2['SRC'] ?>">
					<img src="<?= $sert2['SRC'] ?>" alt="<?= $sert2['DESCRIPTION'] ?>">
				</a>
			</div>
			<div class="about-text about-text-w">
				<?= htmlspecialchars_decode(unserialize($arResult['PROPS']['TEXT_SERT'][0])['TEXT']) ?>
			</div>
		</div>
		<? if (!empty($arResult["PROPS"]["GALLERY"])) { ?>
			<div class="pos-rel client">
				<div class="client-galery">
					<div class="client-galery-swiper swiper">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<? foreach ($arResult["PROPS"]["GALLERY"] as $mediaId) : ?>
									<? $media = CFile::GetFileArray($mediaId); ?>
									<? $extension = pathinfo($media["SRC"], PATHINFO_EXTENSION); ?>
									<? if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) : ?>
										<a data-fancybox="gallery" href="<?= $media["SRC"] ?>" class="swiper-slide">
											<img class="rounded" src="<?= $media["SRC"] ?>" />
										</a>
									<? elseif (in_array($extension, ['mp4', 'mov', 'avi'])) : ?>
										<a class="swiper-slide slide-video" data-fancybox="gallery" href="<?= $media["SRC"] ?>">
											<video class="rounded" rounded>
												<source src="<?= $media["SRC"] ?>" type="video/mp4">
											</video>
										</a>
									<? endif; ?>
								<? endforeach; ?>
							</div>
						</div>
					</div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
		<? } ?>
		<div class="about-text mw-870"><?= $arResult['ELEMENT']['DETAIL_TEXT'] ?></div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
	const ctx = document.getElementById('myChart');
	data = <?= json_encode($arResult['PROPS']['DATAS']) ?>;
	people = <?= json_encode($arResult['PROPS']['PEOPLES']) ?>.map(str => parseInt(str));
	clients = <?= json_encode($arResult['PROPS']['CLIENTS']) ?>.map(str => parseInt(str));
	texts = <?= json_encode($arResult['PROPS']['TEXT_GR']) ?>;
	console.log(data);
	console.log(people);
	console.log(clients);
	console.log(texts);

	// const data = [
	//     '12.03.2020',
	//     '18.01.2021',
	//     '22.05.2021',
	//     '12.08.2020',
	//     '12.03.2022',
	//     '12.08.2023',
	//     '12.03.2024'
	// ];
	// people = [8, 12, 24, 28, 32, 36, 40, ]
	// clients = [4, 6, 8, 12, 24, 32, 40, ]

	new Chart(ctx, {
		type: 'line',
		data: {
			labels: data,
			datasets: [{
				data: people, // Data points with placeholders for missing values
				borderWidth: 1,
				borderColor: '#00C3B8', // Line color
				pointBackgroundColor: '#00C3B8', // Marker color
				hoverBackgroundColor: '#83DA40', // Hover color
				tension: 0.0,
				hoverBorderColor: '#83DA40',
				// fill: true,
				// pointBackgroundColor: ['#00C3B8', '#00C3B8', '#00C3B8', '#00C3B8', '#00C3B8', '#00C3B8', '#00C3B8'],
				pointRadius: 4,
				borderWidth: 2,
			}]
		},
		options: {
			interaction: {
				mode: 'point'
			},
			gridLines: {
				display: true
			},
			scales: {
				x: {
					type: 'category',
					position: 'bottom',
					gridLines: {
						// display: true,
					},
					ticks: {
						display: true,
						font: {
							size: 12,
						},
					},
				},
				y: {
					display: false // Отключение разметки оси Y
				}
			},
			elements: {
				point: {
					radius: 4,
					hoverRadius: 10, // Увеличиваем размер при наведении
					pointStyle: 'circle', // Изменяем стиль точки
				}
			},
			plugins: {
				legend: {
					display: false,
				},
				tooltip: {
					enabled: false,
					external: function(context) {
						// Tooltip Element
						let tooltipEl = document.getElementById('chartjs-tooltip');

						// Create element on first render
						if (!tooltipEl) {
							tooltipEl = document.createElement('div');
							tooltipEl.id = 'chartjs-tooltip';
							tooltipEl.innerHTML = '<table></table>';
							document.body.appendChild(tooltipEl);
						}

						// Hide if no tooltip
						const tooltipModel = context.tooltip;
						if (tooltipModel.opacity === 0) {
							tooltipEl.style.opacity = 0;
							return;
						}

						// Set caret Position
						tooltipEl.classList.remove('above', 'below', 'no-transform');
						if (tooltipModel.yAlign) {
							tooltipEl.classList.add(tooltipModel.yAlign);
						} else {
							tooltipEl.classList.add('no-transform');
						}

						function getBody(bodyItem) {
							return bodyItem.lines;
						}

						// Set Text
						if (tooltipModel.body) {
							const titleLines = tooltipModel.title || [];
							const bodyLines = tooltipModel.body.map(getBody);

							let innerHtml = '<thead>';
							innerHtml += '</thead><tbody>';
							bodyLines.forEach(function(body, i) {
								lastTooltip = false
								index = people.indexOf(Number(body[0]));
								console.log(body[0], index, i);
								client = clients[index]
								text = texts[index]

								const tooltipContent = `
                                    <div class="conv-cont">
                                        <div class="conv-cont-main">${body}</div>
                                        <span>человек в системе</span>
                                        <div class="conv-cont-main">${client}</div>
                                        <span>клиента</span>
                                        <div class="text">${text}</div>
                                    </div>
                                `;
								innerHtml += '<tr><td>' + tooltipContent + '</td></tr>';
								console.log(body.length);
								if (index === clients.length - 1) {
									tooltipEl.classList.add('last-tooltip');
								}
							});

							innerHtml += '</tbody>';

							let tableRoot = tooltipEl.querySelector('table');
							tableRoot.innerHTML = innerHtml;
						}

						const position = context.chart.canvas.getBoundingClientRect();
						const bodyFont = Chart.helpers.toFont(tooltipModel.options.bodyFont);

						// Display, position, and set styles for font
						tooltipEl.style.opacity = 1;
						tooltipEl.style.position = 'absolute';
						tooltipEl.style.left = position.left + 10 + window.pageXOffset + tooltipModel.caretX + 'px';
						tooltipEl.style.top = position.top + window.pageYOffset + -180 + tooltipModel.caretY + 'px';
						tooltipEl.style.font = bodyFont.string;
						tooltipEl.style.padding = tooltipModel.padding + 'px ' + tooltipModel.padding + 'px';
						tooltipEl.style.pointerEvents = 'none';
						tooltipEl.style.width = 200;
						tooltipEl.style.zIndex = 600;
						tooltipEl.style.paddingLeft = '10px';
						tooltipEl.style.background = '#fff';
						tooltipEl.style.borderLeft = '2px solid #BACFD2';

						if (tooltipEl.classList.contains('last-tooltip')) {
							tooltipEl.classList.remove('last-tooltip');
							tooltipEl.style.left = position.left + 10 + window.pageXOffset + tooltipModel.caretX - 230 + 'px';
						}
					}
				}
			},
		}
	});
</script>