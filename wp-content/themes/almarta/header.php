<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Almatra</title>

	<?php wp_head(); ?>

</head>
<body>

	<header>
		<div class="topbar">
			<a href="#" class="whatsapp"></a>
			<span class="phone-icon"></span>
			<div class="phone">
				<a href="tel://74996861088">+7 (499) 686-10-88</a>
				<a href="tel://79770001245">+7 (977) 000-12-45</a>
			</div>
			<a href="#" class="btn">Заказать звонок</a>
		</div>
		<div class="header">
			<a href="#" class="logo">
				<img src="<?=get_template_directory_uri()?>/assets/img/logo.png" width="148" height="118">
			</a>
			<ul class="menu">
				<li class="menu__item">
					<a href="#" class="menu__link">Каталог</a>

				</li>
				<li class="menu__item">
					<a href="#" class="menu__link">Покупателям</a>
				</li>
				<li class="menu__item">
					<a href="#" class="menu__link">Отзывы</a>
				</li>
				<li class="menu__item">
					<a href="#" class="menu__link">Частые вопросы</a>
				</li>
				<li class="menu__item">
					<a href="#" class="menu__link">Контакты</a>
				</li>
			</ul>
			<div class="search">
				<form class="search__form">
					<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					<input type="text" name="search" class="form-control">
				</form>
			</div>
		</div>
	</header>

	<main>