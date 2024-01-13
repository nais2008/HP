<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>

    <!-- CSS -->

	<link type="text/css" rel="stylesheet" href="contacts.css">

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Animation -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

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

</head>
<body>
    <div class="header">
        <header class='animate__animated animate__fadeInDown'>
            <div class="header">
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
    </div>
    <div class="container">
        <main>
            <section>
                <h1 align='center'>Сообщение на почту</h1>
                <div class='fon'>
                    <div class='success_mail'>
                        <?=$_SESSION['success_mail']?>
                    </div>
                </div>

                <form action="check_conatccts.php" method="post" id="form">
                    <input type='text' name='username' form='form' placeholder='Введите имя:' class='form-style animate__fadeIn animate__animated' value='<?=$_SESSION["user_name"] ?>'>
                    <div class='text-danger'><?=$_SESSION['error_username']?></div>
                    <input type='email' name='email' form='form' placeholder='Введите email:' class='form-style animate__fadeIn animate__animated' value='<?=$_SESSION["email"] ?>'>
                    <div class='text-danger'><?=$_SESSION['error_email']?></div>
                    <input type='text' name='subject' form='form' placeholder='Введите тему сообщения:' class='form-style animate__fadeIn animate__animated' value='<?=$_SESSION["subject"] ?>'>
                    <div class='text-danger'><?=$_SESSION['error_subject']?></div>
                    <textarea name='message' placeholder='Введите соощение:' form='form' class='form-style animate__fadeIn animate__animated'style='height:5rem;'><?=$_SESSION['message']?></textarea>
                    <div class='text-danger'><?=$_SESSION['error_message']?></div>
                    <button tupe='submit' class='div3'>Отправить</button>
                </form>
            </section>
        </main>
    </div>
    <main>

    </main>

    <div class="footer">
        <footer class='animate__animated animate__fadeInUp'>
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
            <span class="p61"><a href="card.php">9 765 р.▼</a></span >
            
            <a href="https://www.servicetrust.ru/images/VK%20Logo_blue_L.png" target="_blank"><img src="photo/vk.png" class="img6"></a><br>
            <a href="https://z-gorodok.ru/wp-content/uploads/2022/03/telegram-icon-on-transparent-background-png.png" target="_blank"><img src="photo/telegram.jpg" class="img7"></a>
        </footer>
    </div>
</body>
</html>