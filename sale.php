<?php include 'part/header.php'; ?>


	<div class="toptag-wrap">
		<div class="container">
			<div class="toptag">
				<ul class="bread">
					<li><a href="javascript:void(0);">Главная</a></li>
					<li>Акции и скидки</li>
				</ul>
				<h1 class="toptag__title title">Акции и скидки</h1>
				<div class="toptag__desc">
					<p>Пожалуй, лучшее, что можно сделать в Петербурге белыми ночами — прокатиться на катере под разводящимися мостами. Вас и ваших близких ждёт двухчасовая прогулка по Неве и её притокам, а также самое увлекательное летнее событие — разведение мостов в сиянии ночной подсветки. </p>
				</div>
			</div>
		</div>
	</div>

	<div class="sale-wrap">
		<div class="container">
			<div class="sale">
			<?php $i=0; while($i++ < 5) : ?>
				<a href="javascript:void(0);" class="sale-item">
					<div class="sale-item__img">
						<div class="sale-item__cat">до 20%</div>
						<img src="img/sale.jpg" alt="sale">
					</div>
					<div class="sale-item__content">
						<div class="sale-item__title">Именинникам</div>
						<div class="sale-item__desc">Скидки предоставляется только имениннику при размещении на основном месте и совпадении даты рождения</div>
						<div class="sale-item__date">Действительна: до 12 декабря 2022</div>
					</div>
				</a>
			<?php endwhile; ?>
			</div>
			<div class="sale-btn more-btn click-animation">
				<span>Показать еще</span>
			</div>
		</div>
	</div>

	<?php include 'part/advantages.php'; ?>

<?php include 'part/footer.php'; ?>