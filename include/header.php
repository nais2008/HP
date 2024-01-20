<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "hp");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$title?></title>

	<!-- CSS -->

	<link type="text/css" rel="stylesheet" href="css/<?=$css_name?>.css">

	<!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Animation -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

	<!-- favicon -->

	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<header>
		<div class="header">
			<section class="header__logo">
				<form action="index.php">
					<button type="submit">HP</button>
				</form>
				<h2><a href='index.php'>Happy pet</a></h2>
			</section>
			<section class="header__navigation">
				<nav>
					<ul>
						<li><a href='index.php'>Главная</a></li>
						<li><a href='shop.php'>Друзья</a></li>
						<li><a href='info.php'>О сервисе</a></li>
						<li><a href='./check_contacts.php'>Контаты</a></li>
						<li>
							<form action="card.php">
								<button type="submit">
									<img src="img/card.png" alt="Корзина">
								</button>
							</form>
							<p><a href='card.php'>0p. ⯆</a></p>
						</li>
						<li>
							<?php
								if ((isset($_COOKIE['fio'])) &&
									 (isset($_COOKIE['date'])) &&
									 (isset($_COOKIE['pet'])) &&
									 (isset($_COOKIE['nickname_pet']))){
									echo "
									<div class='box'>
										<a href='account.php'>
											<img src='https://sun9-20.userapi.com/impf/c633817/v633817482/2f641/B6ALCBXVQzk.jpg?size=500x500&quality=96&sign=a220c3c6f4feedad2b1760e83250cac9&type=album' alt='фото аккаунта'>
										</a>
									</div>";
								} else{
									echo '
									<section class="box1">
										<a href="vhod.php">
											<img src="img/vhod.svg" alt="Вход / Регистрация">
										</a>
									</section>';
								}
							?>
						</li>
					</ul>
				</nav>
			</section>
			<section class="header__bur_menu">
				<label for="check">
					<input type="checkbox" id="check" name="remeber"> 
					<span></span>
					<span></span>
					<span></span>
					</label>
			</section>
		</div>
	</header>