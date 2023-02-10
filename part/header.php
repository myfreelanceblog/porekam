<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta content="True" name="HandheldFriendly">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">

	<title>Водные прогулки на теплоходах и катерах</title>

	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/media.css" />
</head>
<?php
$cls = '';
$url = $_SERVER['REQUEST_URI'];
if ($url == '/porekam/listing.php') {
	$cls .= ' _listing';
}
if ($url == '/porekam/listing-tag.php') {
	$cls .= ' _tag';
}
?>
<body class="<?php echo $cls; ?>">

	<header>
		<div class="container">
			<div class="header">
				<div class="mob-m"></div>
				<a href="javascript:void(0);" class="header__logo"></a>
				<div class="header-content">
					<ul class="header__nav">
						<li><a href="javascript:void(0);">Дневные экскурсии</a></li>
						<li><a href="javascript:void(0);">Ночные прогулки</a></li>
						<li><a href="javascript:void(0);">Пассажирам</a></li>
						<li><a href="javascript:void(0);">Аренда</a></li>
						<li><a href="javascript:void(0);">Акции и скидки</a></li>
						<li><a href="javascript:void(0);">Отзывы</a></li>
						<li><a href="javascript:void(0);">Контакты</a></li>
					</ul>
					<a href="tel:88002500571" class="header__phone"><span>8 (800) 250 05 71</span></a>
					<div class="header__location">Санкт-Петербург, наб. реки Фонтанки, д. 71 наб. реки Фонтанки, д. 104</div>
				</div>
			</div>
		</div>
	</header>

	<div class="mobile-menu">
		<div class="container">
			<div class="mobile-menu__content">
				<div class="mobile-menu__close">
					<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.3848 1.41421L1.41422 18.3848L2.98023e-06 16.9706L16.9706 0L18.3848 1.41421Z" fill="white"/><path d="M18.3848 1.41421L1.41422 18.3848L2.98023e-06 16.9706L16.9706 0L18.3848 1.41421Z" fill="white"/><path d="M18.3848 1.41421L1.41422 18.3848L2.98023e-06 16.9706L16.9706 0L18.3848 1.41421Z" fill="white"/><path d="M16.9706 18.3848L0 1.41421L1.41421 8.34465e-07L18.3848 16.9706L16.9706 18.3848Z" fill="white"/><path d="M16.9706 18.3848L0 1.41421L1.41421 8.34465e-07L18.3848 16.9706L16.9706 18.3848Z" fill="white"/><path d="M16.9706 18.3848L0 1.41421L1.41421 8.34465e-07L18.3848 16.9706L16.9706 18.3848Z" fill="white"/></svg>
				</div>
				<ul class="mobile-menu__list">
					<li><a href="javascript:void(0);">Дневные экскурсии</a></li>
					<li><a href="javascript:void(0);">Ночные прогулки</a></li>
					<li><a href="javascript:void(0);">Пассажирам</a></li>
					<li><a href="javascript:void(0);">Аренда</a></li>
					<li><a href="javascript:void(0);">Акции и скидки</a></li>
					<li><a href="javascript:void(0);">Отзывы</a></li>
					<li><a href="javascript:void(0);">Контакты</a></li>
				</ul>
				<a href="tel:88002500571" class="mobile-menu__phone">8 (800) 250 05 71</a>
				<div class="mobile-menu__adres">Санкт-Петербург, наб. реки Фонтанки, д. 71 наб. реки Фонтанки, д. 104</div>
			</div>
		</div>
	</div>