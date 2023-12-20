<?php 
/*
UPDATE `user` 
inner JOIN pet_1 on user.id_pet = pet.id 
inner JOIN pet p1 on pet.id = pet_1.id
inner JOIN pet p2 on pet.view_id = vied.id 
SET user.`FIO`='noname',user.`date`='1212-12-12', vied.`vied`='vid', pet.`nickname` = 'nn' 
WHERE `log_in`= 'gfgfgdf'
*/
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
       

	  setcookie('izm', 0);
	  setcookie('izm1', 0);
	  setcookie('izm2', 0);
	  setcookie('izm3', 0);

	  if ((isset($_POST['izm']))&&(isset($_POST['izm1']))&&(isset($_POST['izm2']))&&(isset($_POST['izm3']))&&(isset($_POST['soh']))) {
		$row['FIO'] = $_POST['izm'];
		$row['date'] = $_POST['izm1'];
		$row['vid'] = $_POST['izm2'];
		$row['nickname'] = $_POST['izm3'];

		$fio = $row['FIO'];
		$date = $row['date'];
		$vid = $row['vid'];
		$nn = $row['nickname'];

		$coc=$_COOKIE['logname'];
		$query = "UPDATE user
				  		SET user.FIO='$fio',user.date='$date', user.nickname_pet='$nn', user.vid_pet='$vid'
				  		WHERE log_in= '$coc'";
		$result = mysqli_query($conn, $query);    	 
	  }




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Личный кабинет</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.37.1" />

	<!--CSS  -->

	<link type="text/css" rel="stylesheet" href="style1.css">

	  <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Animation -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="photo/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>

<body>
		<div class='div1 animate__animated animate__bounceInDown' >
				<img src='https://sun9-20.userapi.com/impf/c633817/v633817482/2f641/B6ALCBXVQzk.jpg?size=500x500&quality=96&sign=a220c3c6f4feedad2b1760e83250cac9&type=album' class='img1'>
				<img src='https://cdn-icons-png.flaticon.com/512/2527/2527195.png' class='img2'>
				
				<?php
				   $coc=$_COOKIE['logname'];
				   $query = "SELECT * FROM `user` WHERE `log_in`='$coc'";      
				   $result = mysqli_query($conn, $query);   
				   $row = $result->fetch_assoc();
				   echo "<div class='text1'><b>ФИО: </b><span class='izm'>",  $row['FIO'], '</span><div class="text_underscores1"></div></div>';
				   echo "<div class='text2'><b>ДР: </b><span class='izm1'>", date('d.m.Y' , strtotime($row['date'])), "</span><div class='text_underscores1'></div></div>";
				   $_COOKIE['izm'] = $row['FIO'];
				   $_COOKIE['izm1'] = date('d.m.Y' , strtotime($row['date']));
				   echo "<div class='text2'><b>Питомец: </b><span class='izm2'> ", $row['vid_pet'],"</span><div class='text_underscores1'></div></div>";
				   $_COOKIE['izm2'] = $row['vid_pet'];
				   echo "<div class='text2'><b>Кличка: </b><span class='izm3'>", $row['nickname_pet'],"</span><div class='text_underscores1'></div></div>";
				   $_COOKIE['izm3'] = $row['nickname_pet'];
				?>				
		<div class="photo">
			<img src="https://vgtimes.ru/uploads/achievements/3857/playstation3/48d8e75c219be0b40e1eabb6531d073f.png" alt="" class='photo_1'>
			<P>Hackification</P>
        </div>
        
        <div class="photo1">
			<img src="https://vgtimes.ru/uploads/achievements/3857/playstation3/48d8e75c219be0b40e1eabb6531d073f.png" alt="" class='photo_2'>
			<P>Hackification</P>
        </div>
        
        <div class="photo2">
			<img src="https://vgtimes.ru/uploads/achievements/3857/playstation3/48d8e75c219be0b40e1eabb6531d073f.png" alt="" class='photo_3'>
			<P>Hackification</P>
        </div>
        
        <div class="photo3">
			<img src="https://vgtimes.ru/uploads/achievements/3857/playstation3/48d8e75c219be0b40e1eabb6531d073f.png" alt="" class='photo_4'>
			<P>Hackification</P>
        </div>
        
 <div class='soh'>
	 <input type='submit' value="Редактировать &#9998;" onclick="redact()" class='button' form='none'>
</div>
       
<form action="HP.php" method="post"  id='data'>			
	<input type='submit' value="Назад" form="data" class='button1' >
</form>

<div class='cloze' onclick="cloze()"></div>

</div>
</body>
<form action='#' method='post' id='home'></form>
<?php 
 // echo $_POST['izm3'];
?>

<script type="text/javascript">
	
function redact(){
	const textElement = document.querySelector('.izm');
	const textElement1 = document.querySelector('.izm1');
	const textElement2 = document.querySelector('.izm2');
	const textElement3 = document.querySelector('.izm3');
	const cloze = document.querySelector('.cloze');
	const soh = document.querySelector('.soh');
	
	const textElementContent = textElement.innerHTML;
	const textElementContent1 = textElement1.innerHTML;
	const textElementContent2 = textElement2.innerHTML;
	const textElementContent3 = textElement3.innerHTML;

	
	textElement.innerHTML = '<input type = "text" class="form-style" form="home" placeholder="Твое новое ФИО" name="izm">';
	textElement1.innerHTML = '<input type = "date" class="form-style1" form="home" placeholder="Новое ДР" name="izm1">';
	textElement2.innerHTML = '<input type = "text" class="form-style2" form="home" placeholder="Новый питомец" name="izm2">';
	textElement3.innerHTML = '<input type = "text" class="form-style3" form="home" placeholder="Новая кличка питомца" name="izm3">';
	cloze.innerHTML = '<input type = "submit" class="cloze1" value="&#10008;" form="home">';
	soh.innerHTML = '<input type = "submit" class="button"  value="Сохранить" form="home" name="soh"> ';
}

function cloze(){
	const textElement = document.querySelector('.izm');
	const textElement1 = document.querySelector('.izm1');
	const textElement2 = document.querySelector('.izm2');
	const textElement3 = document.querySelector('.izm3');
	const cloze = document.querySelector('.cloze');
	const soh = document.querySelector('.soh');
	
	textElement.innerHTML = '<?php echo $_COOKIE['izm'];?>';
	textElement1.innerHTML = '<?php echo $_COOKIE['izm1'];?>';
	textElement2.innerHTML = '<?php echo $_COOKIE['izm2'];?>';
	textElement3.innerHTML = '<?php echo $_COOKIE['izm3'];?>';
	cloze.innerHTML = '';
	soh.innerHTML = '<input type = "submit" class="button" value="Редактировать &#9998;" form="none" onclick="redact()">';
}

</script>

</html>
