<?php include 'part/header.php'; ?>
	
	<div class="tcard-wrap">
		<div class="container">
			<div class="tcard">
				<ul class="bread">
					<li><a href="javascript:void(0);">Главная</a></li>
					<li><a href="javascript:void(0);">Наш флот</a></li>
					<li>Теплоход Афродита</li>
				</ul>
				<div class="tcard-top">
					<h1 class="tcard__title title">Теплоход Афродита</h1>
				</div>
				<div class="tcard-gallery">
					<a href="img/g1.jpg" class="tcard-gallery__big" data-fancybox="gallery">
						<img src="img/g1.jpg" alt="gallery">
					</a>
					<div class="tcard-gallery__small">
						<div class="tcard-gallery__item">
							<a href="img/g1.jpg" data-fancybox="gallery">
								<img src="img/g1.jpg" alt="gallery">
							</a>
							<a href="img/g1.jpg" data-fancybox="gallery">
								<img src="img/g1.jpg" alt="gallery">
							</a>
						</div>
						<div class="tcard-gallery__item">
							<a href="img/g1.jpg" data-fancybox="gallery">
								<img src="img/g1.jpg" alt="gallery">
							</a>
							<a href="img/g1.jpg" data-fancybox="gallery">
								<img src="img/g1.jpg" alt="gallery">
								<div class="tcard-gallery__more">
									<span>+8</span>
									<span>фотографий</span>
								</div>
							</a>
						</div>
					</div>
					<div class="tcard-gallery__hidden">
						<a href="img/g1.jpg" data-fancybox="gallery">
							<img src="img/g1.jpg" alt="gallery">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="scroll-wrap">
		<div class="container">
			<div class="scroll">
				<div class="scroll-content scrl-content">
					<div class="top-desc">
						<p>Самый новый и самый шикарный круизный корабль в России. Вполне по делу позиционируется как теплоход класса «Люкс». По сути, это 5-звёздочный отель на воде. Ведь все его каюты по комфорту и набору удобств ничуть не уступают береговым гостиницам высокой категории.</p>
					</div>

					<div class="detail">
						<div class="content-title">Характеристики теплохода</div>
						<div class="detail-box">
							<div class="detail-item">
								<div class="detail-item__icon">
									<img src="img/pled.svg" alt="icon">
								</div>
								<div class="detail-item__title">Пледы: есть</div>
							</div>
							<div class="detail-item">
								<div class="detail-item__icon">
									<img src="img/wifi.svg" alt="icon">
								</div>
								<div class="detail-item__title">Wi-Fi: нет</div>
							</div>
							<div class="detail-item">
								<div class="detail-item__icon">
									<img src="img/conder.svg" alt="icon">
								</div>
								<div class="detail-item__title">Кондиционер: нет</div>
							</div>
							<div class="detail-item">
								<div class="detail-item__icon">
									<img src="img/toilet.svg" alt="icon">
								</div>
								<div class="detail-item__title">Туалет: есть</div>
							</div>
							<div class="detail-item">
								<div class="detail-item__icon">
									<img src="img/audio.svg" alt="icon">
								</div>
								<div class="detail-item__title">Аудио система: нет</div>
							</div>
							<div class="detail-item">
								<div class="detail-item__icon">
									<img src="img/drink.svg" alt="icon">
								</div>
								<div class="detail-item__title">Свои напитки: допускается</div>
							</div>
							<div class="detail-item">
								<div class="detail-item__icon">
									<img src="img/frost.svg" alt="icon">
								</div>
								<div class="detail-item__title">Холодильник: нет</div>
							</div>
							<div class="detail-item">
								<div class="detail-item__icon">
									<img src="img/food.svg" alt="icon">
								</div>
								<div class="detail-item__title">Своя еда: допускается</div>
							</div>
							<div class="detail-item">
								<div class="detail-item__icon">
									<img src="img/socket.svg" alt="icon">
								</div>
								<div class="detail-item__title">Розетка 220V: нет</div>
							</div>
						</div>
					</div>

					<div class="content-desc _vs-line">
						<div class="content-title">Описание теплохода</div>
						<div class="content-desc__text">
							<p>Согласно первоначальным планам, судно должно было называться «Князь Владимир». Однако уже в процессе его строительства было принято решение о том, что на борту нового лайнера будет имя башкирского поэта, писателя и драматурга, лауреата Ленинской и Государственной премий СССР Мустая Карима (1919 — 2005).</p>
							<p>В немалой степени на это решение повлиял тот факт, что на Чёрном море уже работает круизный корабль под названием «Князь Владимир». А у нового теплохода были предусмотрены рейсы из Ростова-на-Дону с заходом в Новороссийск и Анапу.</p>
						</div>
					</div>

					<div class="actual">
						<div class="interest-top">
							<div class="content-title">Экскурсии на этом теплоходе</div>
							<div class="actual__nav nav">
								<div class="nav__item actual__prev"></div>
								<div class="nav__item actual__next"></div>
							</div>
						</div>
						<div class="actual-wrap">
							<div class="actual-slider">
								<div class="actual__swiper swiper-container">
									<div class="swiper-wrapper">
									<?php $i=0; while($i++ < 5) : ?>
										<div class="swiper-slide">
											<div class="actual-item">
												<div class="actual-item__img">
													<img src="img/r.jpg" alt="img">
												</div>
												<div class="actual-item__content">
													<div class="actual-item__top">
														<div class="actual-item__title">Знакомство с Петербургом</div>
														<div class="rate">
															<span>4.5</span>
														</div>
													</div>
													<div class="actual-item__desc">Осмотрите все основные достопримечательности Петербурга.</div>
													<div class="actual-item__price">
														<span>от 9 870 ₽</span>
														<div class="info-block">
															<div class="info-block__icon"></div>
															<div class="info-block__popup">Какой-то текст</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="scroll-sidebar scrl-sidebar">
					<div class="scroll-sidebar__wrap scrl-wrap">
						<div class="side side-copy">
							<div class="side__title">Стоимость аренды</div>
							<div class="price-alone">
								<div class="price-alone__actual">от 4500 руб. / час</div>
								<div class="price-alone__old">от 6500 руб.</div>
							</div>
							<div class="side-row">
								<a href="javascript:void(0);" class="side-btn click-animation">Купить билет</a>
								<a href="javascript:void(0);" class="rent-btn click-animation">Арендовать теплоход</a>
							</div>
							<div class="side-bottom">При покупке билетов на сайте скидка 15 % по промокоду <b>KATER-SPB</b></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="another-wrap">
		<div class="container">
			<div class="related">
				<div class="title">Другие судна</div>
				<div class="nav">
					<div class="nav__item another__prev"></div>
					<div class="nav__item another__next"></div>
				</div>
			</div>

			<div class="another-slider">
				<div class="another__swiper swiper-container">
					<div class="swiper-wrapper">
					<?php $i=0; while($i++ < 5) : ?>
						<div class="swiper-slide">
							<div class="another-item">
								<img src="img/t.jpg" alt="img">
								<div class="another-item__content">
									<div class="another-item__title">Теплоход Принцесса Анабелла</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'part/mstock.php'; ?>
	<?php include 'part/advantages.php'; ?>

<?php include 'part/footer.php'; ?>