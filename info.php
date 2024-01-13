<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>О сервисе</title>

    <!--Animation  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- CSS -->

    <link type="text/css" rel="stylesheet" href="info.css">

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Animation -->

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
</head>
<body alink="#000" link="#000" vlink="#000">

    <header class='animate__animated animate__fadeInDown'>
        <div class="header">
            <input type="submit" class="div2" value="HP">
            <span class="p5"><a href="HP.php">Happy Pet</a></span>
        
            <span id="p1"><a href="HP.php">Главная</a></span>
            <div id='div1'></div>
        
            <span id="p2"><a href="shop.php">Друзья</a></span>
        
            <span id="p3"><a href="info.php">О сервисе</a></span>
        
            <span id="p4"><a href="check_conatccts.php">Контакты</a></span>
        
            <div class="div5">
                <img src="photo\shopping-cart(2).png" class="img5">
            </div>
            <span class="p6"><a href="card.php">9 765 р.   ▼</a></span>
        
            <?php
                if ((isset($_COOKIE['izm']))&&(isset($_COOKIE['izm1']))&&(isset($_COOKIE['izm2']))&&(isset($_COOKIE['izm3']))){
	                echo "<div class='box'><a href='account.php'><img src='https://sun9-20.userapi.com/impf/c633817/v633817482/2f641/B6ALCBXVQzk.jpg?size=500x500&quality=96&sign=a220c3c6f4feedad2b1760e83250cac9&type=album'></a></div>";
                }
                else{
	                echo '<a href="nn.php" class="vhod"></a>';
                }
            ?>
        </div>
        </header>

<div class="center">
        <p class='div16 animate__animated animate__fadeInLeft' style='height:27rem;'>В нашем магазине вы можете приобрести разных животных,
                                                                                                    начиная от маленького попугайчика, заканчивая огромной собакой.
                                                                                                     Всех животных привозим сами к дому совершенно бесплатно</p>
        
            <p class='div17 animate__animated animate__fadeInLeft' >Наш ассортимент пополнился от разных заводчиков,
                                                                                                         но можно и самому. Если у вас покупают питомца,
                                                                                                          то заимствуется 5% от всей цены. Еслт вы покупаете от завозчика,
                                                                                                           то мы вам гарантируем, что все пройдет хорошо</p>    

            <p class='div18 animate__animated animate__fadeInRight'>По вопросам вы всегда можете написать нам в ВК или Телеграм, 
                            мы постораемся ответить на все ваши вопросы. С вами будет общаться оператор, а не бот. 
                            Если произайдут какие-то ошибки в редактирование аккаута, мы также вам поможем</p>
        
            <p class="div19 animate__animated animate__fadeInRight"><img class='img_p' src='photo/inf.png'></p>
        </div>
        <footer class='animate__animated animate__fadeInUp'>
            <span class='address'><b>Адрес:</b> Шадринск, ул. Пушкина, дом 500</span><br>
            <span class='nomer'><b>Номер:</b> +7 800 555 35 35</span>
        
                
        <span id="p11"><a href="HP.php">Главная</a></span>
        <div id="div11"></div>
        
        <span id="p21"><a href="shop.php">Друзья</a></span>
        
        <span id="p31"><a href="info.php">О сервисе</a></span>
        
        <span id="p41"><a href="check_conatccts.php">Контакты</a></span>
        
        <div class="div51">
            <img src="photo\shopping-cart(2).png" class="img51">
        </div>
        <span class="p61"><a href="card.php">9 765 р.▼</a></span >
        
        <a href="https://www.servicetrust.ru/images/VK%20Logo_blue_L.png" target="_blank"><img src="photo/vk.png" class="img6"></a><br>
<a href="https://z-gorodok.ru/wp-content/uploads/2022/03/telegram-icon-on-transparent-background-png.png" target="_blank"><img src="photo/telegram.jpg" class="img7"></a>
        </footer>
</body>
</html>