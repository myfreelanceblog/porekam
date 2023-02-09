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
					<a href="tel:88002500571" class="header__phone">8 (800) 250 05 71</a>
					<div class="header__location">Санкт-Петербург, наб. реки Фонтанки, д. 71 наб. реки Фонтанки, д. 104</div>
				</div>
			</div>
		</div>
	</header>