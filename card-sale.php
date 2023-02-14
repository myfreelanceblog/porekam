<?php include 'part/header.php'; ?>


	<div class="articles-wrap">
		<div class="container">
			<ul class="bread">
				<li><a href="javascript:void(0);">Главная</a></li>
				<li><a href="javascript:void(0);">Акции и скидки</a></li>
				<li>Именинникам</li>
			</ul>
			<h1 class="articles-title title">Именинникам</h1>
			<div class="article-grid _sale">
				<div class="article-content scrl-content">
					<div class="article-content__thumb">
						<img src="img/article-thumb.jpg" alt="article">
					</div>
					<div class="sales-desc">
						<p>Скидки предоставляется только имениннику при размещении на основном месте и совпадении даты рождения со временем круиза +/– 5 дня до и после.</p>
						<h2>Условия акции</h2>
						<ul>
							<li>Индивидуальная скидка составляет до 50% в зависимости от категории техники, и суммарный размер скидки составляет не более 5000 руб.</li>
							<li>Промокод единоразовый и действует только на одну покупку.</li>
							<li>В случае, если покупатель случайно удаляет смс с промокодом - данный промокод не подлежит восстановлению и никак не компенсируется.</li>
							<li>Акция действует ТОЛЬКО В РОЗНИЧНЫХ МАГАЗИНАХ. Скидку по промокоду нельзя применить в интернет-магазине.</li>
							<li>Скидка по смс-промокодам не действует на товары с меткой "Финальная цена".</li>
						</ul>
					</div>
					<div class="another-sale">
						<div class="top">
							<div class="another-sale__title title">Другие акции</div>
							<div class="top-navigation">
								<a href="javascript:void(0);" class="top-navigation__btn another-sale__btn">Все акции</a>
								<div class="top-nav nav">
									<div class="nav__item another-sale__prev"></div>
									<div class="nav__item another-sale__next"></div>
								</div>
							</div>
						</div>
						<div class="another-sale-slider">
							<div class="another-slider__swiper swiper-container">
								<div class="swiper-wrapper">
								<?php $i=0; while($i++ < 5) : ?>
								<div class="swiper-slide">
									<a href="javascript:void(0);" class="another-slider__item">
										<img src="img/m.jpg" alt="stock">
										<div class="another-slider__content">
											<div class="another-slider__title">Именинникам</div>
											<div class="another-slider__desc">Скидки предоставляется только имениннику при размещении на основном месте и совпадении даты рождения</div>
										</div>
									</a>
								</div>
								<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="article-author scrl-sidebar">
					<div class="scrl-wrap">
						<div class="sale-info">
							<div class="sale-info__title">Акция действует:</div>
							<div class="sale-info__content">
								<div class="sale-info__number">15 - 22</div>
								<div class="sale-info__month">декабря</div>
							</div>
							<div class="share-btn">
							    <span class="click-animation"></span>
							    <div class="share-popup">
							        <div class="share-popup__item share-copy">Скопировать ссылку</div>
							        <div class="share-popup__item share-telegram">Telegram</div>
							        <div class="share-popup__item share-vk">Вконтакте</div>
							        <div class="share-popup__item share-fb">Facebook</div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'part/advantages.php'; ?>

<?php include 'part/footer.php'; ?>