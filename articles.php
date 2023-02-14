<?php include 'part/header.php'; ?>

	<div class="articles-wrap">
		<div class="container">
			<ul class="bread">
				<li><a href="javascript:void(0);">Главная</a></li>
				<li>Статьи</li>
			</ul>
			<h1 class="articles-title title">Статьи</h1>
			<div class="articles">
			<?php $i=0; while($i++ < 8) : ?>
				<a href="javascript:void(0);" class="articles-item">
					<div class="articles-item__img">
						<img src="img/ar.jpg" alt="articles">
					</div>
					<div class="articles-item__content">
						<div class="articles-item__date">12 декабря 2022</div>
						<div class="articles-item__title">Куда поехать отдыхать в феврале в России</div>
						<div class="articles-item__desc">Современный уровень сервиса, транспортных услуг и возможность работать удаленно — позволяют путешествовать в любое время года. Отдых в пределах России в феврале имеет свои бонусы в виде умеренных цен, свободных горнолыжных трасс и отсутствия...</div>
					</div>
				</a>
			<?php endwhile; ?>
			</div>
			<div class="articles-btn more-btn click-animation">
				<span>Показать еще</span>
			</div>
		</div>
	</div>

<?php include 'part/footer.php'; ?>