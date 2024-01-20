<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "hp");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
      $query = 'SELECT * FROM `shop`';
      $result = mysqli_query($conn, $query);
      
if ((isset($_POST['logemail']))&&(isset($_POST['logname']))&&(isset($_POST['logpass']))&&(isset($_POST['input2']))) {
      $o=0; 
      $query = 'SELECT * FROM `user`';
      $result = mysqli_query($conn, $query);
        while($row = $result->fetch_assoc()){
			if (($row['log_in'] == $_POST['logname']) || ($row['email'] == $_POST['logemail'])){
			$o=1;
			}
		}
		if($o==1){
			echo '<h2 class="osh">Такой аккаунт уже существует</h2>';
		}
		else{
				$log=$_POST['logname'];
				$pas=$_POST['logpass'];
				$email=$_POST['logemail'];
				setcookie("logname", $_POST['logname']);
				setcookie("logpass", $_POST['logpass']);
				setcookie("logemail", $_POST['logemail']);
				
				$p = "INSERT INTO `user`(`id`, `log_in`, `password`, `FIO`, `date`, `email`,`nickname_pet`, `vid_pet`) VALUES ('','$log','$pas','','','$email','', '')";
				if(mysqli_query($conn, $p)){
					echo "Данные успешно добавлены";
				} else{
					echo "Ошибка: " . mysqli_error($conn);
				}
				
				$new_url = 'account.php';
				header('Location: '.$new_url);
				}
		
	}
	
if ((isset($_POST['logname1']))&&(isset($_POST['logpass1']))&&(isset($_POST['input1']))){
	$a = 0;

    $query = 'SELECT log_in, password FROM `user`';
	$result = mysqli_query($conn, $query);
	while($row = $result->fetch_assoc()){
		if (($row['log_in']==$_POST['logname1']) && ($row['password']==$_POST['logpass1'])){
			$a=1;
		}
	}	
	if ($a == 0) {
		echo '<h2 class="osh">Не правильно введен логин или пароль</h2>';
    } else{
		$log=$_POST['logname1'];
		$pas=$_POST['logpass1'];
		
		setcookie("logname", $_POST['logname1']);
		setcookie("logpass", $_POST['logpass1']);
				
		$new_url = 'account.php';
		header('Location: '.$new_url);
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Вход / Регистрация</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.37.1" />

	<!-- CSS -->

	<link type="text/css" rel="stylesheet" href="css/vhod.css">

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
	<div class="section">
		<div class="container">
			<div class="full-height">
				<div class="fill-height__child">
					<div class="section">
						<h5>
							<span>Вход</span>
							<span>Регистрация</span>
						</h5>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" form='form'>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section">
											<h4 class="">Вход</h4>
											<div class="form-group">
												<input type="text" name="logname1" class="form-style" placeholder="Никнейм" id="logemail" autocomplete="off" form='form'>
											</div>	
											<div class="form-group">
												<input form='form' type="password" name="logpass1" class="form-style" placeholder="Пароль" id="logpass" autocomplete="off">
											</div>
											<section>
												<input type="submit" value="Войти" form="form" class='vhod_reg' name="input1">
												<input type="submit" value="Назад" onclick="history.back()" class='back'>
											</section>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section">
											<h4 class="">Регистрация</h4>
											<div class="form-group">
												<input form='form' type="text" name="logname" class="form-style" placeholder="Никнейм" id="logname" autocomplete="off">
											</div>	
											<div class="form-group">
												<input form='form' type="email" name="logemail" class="form-style" placeholder="Email" id="logemail" autocomplete="off">
											</div>	
											<div class="form-group">
												<input form='form' type="password" name="logpass" class="form-style" placeholder="Пароль" id="logpass" autocomplete="off">
											</div>
											<section>
												<input type="submit" value="Зарегистрироваться" form="form" class='vhod_reg' name="input2" style='top:-1rem;'>
												<input type="submit" value="Назад" onclick="history.back()" class='back'>
											</section>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
<form action="#" method="post" id="form"></form>
</body>

</html>
