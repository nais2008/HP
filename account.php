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
      $result = mysqli_query($conn, $query, );      
		$row = $result->fetch_assoc();
       

	  setcookie('fio', 0, time() + 1209600);
	  setcookie('date', 0, time() + 1209600);
	  setcookie('pet', 0, time() + 1209600);
	  setcookie('nickname_pet', 0, time() + 1209600);

	  if ((isset($_POST['fio'])) &&
	  	   (isset($_POST['date'])) &&
		   (isset($_POST['pet'])) &&
		   (isset($_POST['nickname_pet'])) &&
		   (isset($_POST['save']))) {
		$row['FIO'] = $_POST['fio'];
		$row['date'] = $_POST['date'];
		$row['vid'] = $_POST['pet'];
		$row['nickname'] = $_POST['nickname_pet'];

		$fio = $row['FIO'];
		$date = $row['date'];
		$vid = $row['vid'];
		$nn = $row['nickname'];

		$login = $_COOKIE['logname'];
		$query = "UPDATE user
				  		SET user.FIO='$fio',user.date='$date', user.nickname_pet='$nn', user.vid_pet='$vid'
				  		WHERE log_in= '$login'";
		$result = mysqli_query($conn, $query);    	 
	  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный кабинет</title>

	<!--CSS  -->

	<link type="text/css" rel="stylesheet" href="css/account.css">

	  <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Animation -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
	<main>
		<div class="container">
			<section class="acc">
				<article class="acc__info">
					<section class="acc__info_imgAcc">
						<img src='https://sun9-20.userapi.com/impf/c633817/v633817482/2f641/B6ALCBXVQzk.jpg?size=500x500&quality=96&sign=a220c3c6f4feedad2b1760e83250cac9&type=album' alt="фото аккаунта">
					</section>
					<?php
						$login = $_COOKIE['logname'];
						$query = "SELECT * FROM `user`
										 WHERE `log_in` = '$login'";
						$result = mysqli_query($conn, $query);
						$row = $result -> fetch_assoc();
					?>
					<aside class="acc__info_text">
						<div>
							<b>ФИО : </b>
							<span class='fio'>
								<?php
									echo $row['FIO'];
									$_COOKIE['fio'] = $row['FIO'];
								 ?>
							</span>
						</div>
						<div>
							<b>ДР : </b>
							<span class='date'>
								<?php
									echo date('d.m.Y' , strtotime($row['date']));
									$_COOKIE['date'] = date('d.m.Y' , strtotime($row['date']));
								 ?>
							</span>
						</div>
						<div>
							<b>Питомец : </b>
							<span class='pet'>
								<?php
									echo $row['vid_pet'];
									$_COOKIE['pet'] = $row['vid_pet'];
								 ?>
							</span>
						</div>
						<div>
							<b>Кличка : </b>
							<span class='nickname'>
								<?php
									echo $row['nickname_pet'];
									$_COOKIE['nickname_pet'] = $row['nickname_pet'];
								 ?>
							</span>
						</div>
					</aside>
					<section class="acc__info_imgPet">
						<img src="https://cdn-icons-png.flaticon.com/256/2330/2330071.png" alt="">
					</section>
				</article>
				<section class="acc__block">
					<div class="acc__block_achiv">
						<img src="https://static.stratege.ru/achievements/1431505079/ACH041.JPG" alt="">
						<p>Hackification</p>
					</div>
					<div class="acc__block_achiv">
						<img src="https://static.stratege.ru/achievements/1431505079/ACH041.JPG" alt="">
						<p>Hackification</p>
					</div>
					<div class="acc__block_achiv">
						<img src="https://static.stratege.ru/achievements/1431505079/ACH041.JPG" alt="">
						<p>Hackification</p>
					</div>
					<div class="acc__block_achiv">
						<img src="https://static.stratege.ru/achievements/1431505079/ACH041.JPG" alt="">
						<p>Hackification</p>
					</div>
				</section>
				<section class="acc__buttons">
					<div class="close"></div>
					<div class="save redact">
						<button onclick="redact_form();">Редактировать ✎</button>
					</div>
					<div class="back">
						<form action="index.php">
							<button>На Главную</button>
						</form>
					</div>
				</section>
			</section>
		</div>
	</main>
	<script type="text/javascript">
		function redact_form(){
			const textElement = document.querySelector('.fio');
			const textElement1 = document.querySelector('.date');
			const textElement2 = document.querySelector('.pet');
			const textElement3 = document.querySelector('.nickname');
			const close = document.querySelector('.close');
			const save = document.querySelector('.save');
			
			const textElementContent = textElement.innerHTML;
			const textElementContent1 = textElement1.innerHTML;
			const textElementContent2 = textElement2.innerHTML;
			const textElementContent3 = textElement3.innerHTML;

			
			textElement.innerHTML = '<input type="text" placeholder="Твое новое ФИО" name="fio" form="save">';
			textElement1.innerHTML = '<input type="date" placeholder="Новое ДР" name="date" form="save">';
			textElement2.innerHTML = '<input type="text" placeholder="Новый питомец" name="pet" form="save">';
			textElement3.innerHTML = '<input type="text" placeholder="Новая кличка питомца" name="nickname_pet" form="save">';
			close.innerHTML = '<input type="button" class="close_button" value="&times;" onclick="close_form()">';
			save.innerHTML = '<input type="submit" class="save__redact_button"  value="Сохранить" name="save" form="save"> ';
		}
		function close_form(){
			const textElement = document.querySelector('.fio');
			const textElement1 = document.querySelector('.date');
			const textElement2 = document.querySelector('.pet');
			const textElement3 = document.querySelector('.nickname');
			const close = document.querySelector('.close');
			const save = document.querySelector('.save');
			
			textElement.innerHTML = '<?php echo $_COOKIE['fio'];?>';
			textElement1.innerHTML = '<?php echo $_COOKIE['date'];?>';
			textElement2.innerHTML = '<?php echo $_COOKIE['pet'];?>';
			textElement3.innerHTML = '<?php echo $_COOKIE['nickname_pet'];?>';
			close.innerHTML = '';
			save.innerHTML = '<button onclick="redact_form();">Редактировать ✎</button>';
		}
</script>
<form action="#" id='save' method="post"></form>
</body>
</html>
