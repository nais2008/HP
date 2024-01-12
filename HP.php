
<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "hp");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
//~ echo "Подключение успешно установлено";

 // текст SQL запроса, который будет передан базе
      $query = 'SELECT * FROM `shop`';

   // выполняем запрос к базе данных
      $result = mysqli_query($conn, $query);

   // выводим полученные данные
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Happy Pet </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.37.1" />

	<!-- favicon -->

	<link rel="apple-touch-icon" sizes="57x57" href="photo/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="photo/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="photo/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="photo/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="photo/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="photo/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="photo/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="photo/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="photo/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="photo/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="photo/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="photo/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="photo/favicon/favicon-16x16.png">
	<link rel="manifest" href="photo/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="photo/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- CSS -->

	<link type="text/css" rel="stylesheet" href="style.css">

	<!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Animation -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body alink="#000" link="#000" vlink="#000">
	
<header class='animate__animated animate__fadeInDown wow'>
	<input type="submit" class="div2" value="HP" src="https://www.mk.ru/upload/entities/2022/04/01/07/articlesImages/image/20/09/e8/52/e2933b1e0d643269e2e17de2d90df584.jpg">
	<span class="p5"><a href="HP.php">Happy Pet</a></span>

	<span id="p1"><a href="HP.php">Главная</a></span>
	<div id='div1'></div>

	<span id="p2"><a href="shop.php">Друзья</a></span>

	<span id="p3"><a href="info.php">О сервисе</a></span>

	<span id="p4"><a href="check_conatccts.php">Контакты</a></span>

	<div class="div5">
		<img src="photo\shopping-cart(2).png" class="img5">
	</div>
	<span class="p6"><a href="https://memepedia.ru/wp-content/uploads/2020/03/memy-marta-768x512.jpg">9 765 р. ▼</a></span>
	<?php
		if ((isset($_COOKIE['izm']))&&(isset($_COOKIE['izm1']))&&(isset($_COOKIE['izm2']))&&(isset($_COOKIE['izm3']))){
			echo "<div class='box'><a href='account.php'><img src='https://sun9-20.userapi.com/impf/c633817/v633817482/2f641/B6ALCBXVQzk.jpg?size=500x500&quality=96&sign=a220c3c6f4feedad2b1760e83250cac9&type=album'></a></div>";
		}
		else{
			echo '<a href="nn.php" class="vhod"></a>';
		}
	?>

</header>

	<div class='center'>
	<form action="shop.php" method="get" id='data'>
	<div class="div1 animate__animated animate__fadeInLeft">
		<p class="p1" align="left">Твой новый друг <br>
								   с доставкой на дом </p>
		<p class="p2" >Онлайн-магазин домашних животных -
					   удобное решение, когда лень выходить 
					   из дома</p><br> 
</div>

<input type="submit" class="div3 animate__animated animate__fadeInLeft" value="Посмотреть друзей" border='0' form="data"  >

<hr>
<div class='animate__fadeInRight animate__animated'>
	<img src="photo\noroot.png" class="img4">
	<img src="photo\dog.png" class="img3">
	<div class="div7"></div>
	<div class="div8"></div>
</div>
	
<div id="div2" class='animate__fadeInUp animate__animated'>
	<div class="p7">	
		<a class="a1" href="shop.php">Собаки ➔</a> 
	</div>
	<img src="photo\075ba26b69030aace84243475de7843f.png" class="img1" width="160px">
</div>

<div id="div3" class='animate__fadeInUp animate__animated'>
	<div class="p8">
		<a class="a2" href="shop.php">Попугаи ➔</a>
	</div>
	<img src="photo\budgies_white_small.png" class="img2">
</div>

<div class="div11"></div>
<p class='div16'>В нашем магазине вы можете пробрести разных животных,начиная от маленького попугайчика, заканчивая огромной собакой. Всех животных привозим сами к
	дому совершенно бесплатно</p>
	
<footer class='animate__animated animate__fadeIn wow'>
	<span class='address'><b>Адрес:</b> Шадринск, ул. Пушкина, дом 500</span><br>
	<span class='nomer'><b>Номер:</b> +7 800 555 35 35</span>

		
<span id="p11"><a href="HP.php">Главная</a></span>
<div id="div11"></div>

<span id="p21"><a href="shop.php">Друзья</a></span>

<span id="p31"><a href="info.php">О сервисе</a></span>

<span id="p41"><a href="contacts.php">Контакты</a></span>

<div class="div51">
	<img src="photo\shopping-cart(2).png" class="img51">
</div>
<span class="p61"><a href="https://memepedia.ru/wp-content/uploads/2020/03/memy-marta-768x512.jpg">9 765 р.▼</a></span >

<a href="https://www.servicetrust.ru/images/VK%20Logo_blue_L.png" target="_blank"><img src="photo/vk.png" class="img6"></a><br>
<a href="https://z-gorodok.ru/wp-content/uploads/2022/03/telegram-icon-on-transparent-background-png.png" target="_blank"><img src="photo/telegram.jpg" class="img7"></a>
</footer>
</form>
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</div>
</body>
</html>
