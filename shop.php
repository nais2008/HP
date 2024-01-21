<?php //HEADER
	$title = 'Друзья';
	$css_name = 'shop';
	include 'include/header.php';
?>
<?php
if (isset($_POST['sozdat_product'])){
	if (isset($_POST['nickname_modal']) &&
			isset($_POST['price_modal']) &&
			isset($_POST['description_modal']) &&
			isset($_POST['file_modal'])){
		$nic = $_POST['nickname_modal'];
		$price = $_POST['price_modal'];
		$des = $_POST['description_modal'];
		$img = $_POST['file_modal'];

		$query = "INSERT INTO `pet`(`id`, `name`, `description`, `price`, `img`) 
						VALUES ('', '$nic', '$des', '$price', 'img/img_shop/$img')";
		mysqli_query($conn, $query);
		
		header('Location: shop.php');
	}
} 
?>
<main>
	<div class="container">
		<div class="product">
			<section class="form_poisk">
				<form action="#" method="post">
					<input type='text' class='poisk' id='search' placeholder="Поиск..." name='poisk_text'>
					<button type="submit" class="poisk_submit" name="poisk_submit">Искать</button>
				</form>
			</section>
			<div class="pet">
			<?php
					$query = "SELECT * FROM `pet`";      
					$result = mysqli_query($conn, $query);   
					
					while($row = $result -> fetch_assoc()){
						if (isset($row)){
							if (strlen($row['description']) > 20){
								echo "
								<article class='pets' id='output'>
									<section class='pets__img'>
										<img src='", $row['img'], "' alt=''>
									</section>

									<section class='pets__info'>
										<h2>Кличка: <span>", $row['name'], "</span></h2>
										<p><b>Описание: </b><span>",  substr($row['description'],  0, 39) .'...', "</span></p>
										<p><b>Цена: </b><span>", $row['price'], "р.</span></p>
									</section>

									<section class='pets__buttons'>
										<form id='form_for_info_pet' method='post'>
											<button type='submit' form='form_for_info_pet'>Больше информации</button>
										</form>
										<a class='add_pr'  name='dobav' data-value='".$row['id']."' onclick='get_id(".$row['id'].")'>Добавить в корзину</a>
									</section>
								</article>
							";
							continue;
							} else{
								echo "
								<article class='pets' id='output''>
									<section class='pets__img'>
										<img src='", $row['img'], "' alt=''>
									</section>

									<section class='pets__info'>
										<h2>Кличка: <span>", $row['name'], "</span></h2>
										<p><b>Описание: </b><span>",  $row['description'], "</span></p>
										<p><b>Цена: </b><span>", $row['price'], "р.</span></p>
									</section>

									<section class='pets__buttons'>
									<form id='form_for_info_pet' method='post'>
										<button type='submit' form='form_for_info_pet'>Больше информации</button>
									</form>
									<a class='add_pr'  name='dobav' data-value='".$row['id']."' onclick='get_id(".$row['id'].")'>Добавить в корзину</a>
									</section>
								</article>
							";
							continue;
							}
						} else if(!isset($row)){
							echo "
								<article class='non_pets'>
									<h2 align='center'>К сожелению объявлений нет...</h2>
								</article>
							";
							continue;
						}
					}
				?>
			</div>
			<section class="form_sozdat">
				<button type='button' class='sozdat' id='myBtn'>Создать объявление</button>
				<div id="myModal" class="modal">
					<div class="modal-content">
						<span class="close">&times;</span>
						<section class='modal_product'>
							<aside>
								<p>Изоброжение: </p>
								<form action="shop.php" id="form_modal" method="post">
									<div class="form__group">
										<div class="file-input-wrapper js-file-input-controller">
											<button>Загрузить</button>
											<input type="text" disabled placeholder="Выберите файл...">
											<input type="file" form='form_modal' name='file_modal'>
										</div>
									</div>
								</form>
							</aside>
							<aside>
								<input type="text" 
										  name="nickname_modal" 
										  form="form_modal" 
										  placeholder="Введите кличку :">
							</aside>
							<aside>
								<input type="text" 
										  name="price_modal" 
										  form="form_modal" 
										  placeholder="Введите цену :"
										  class='input_modal'>
							</aside>
							<aside>
								<textarea name="description_modal" 
												form="form_modal"
												placeholder="Введите описание : "></textarea>
							</aside>
							<aside>
								<div class='nado'>
									<button type="submit" form="form_modal" name='sozdat_product'>Создать</button>
								</div>
							</aside>
						</section>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>
<?php //FOOTER
    include 'include/footer.php';
?>
<button class="back-to-top hidde">⬆</button>

<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<script type='text/javascript' 
			src="js/main_shop.js">
</script>
<script type='text/javascript' 
			src="js/main.js">
</script>
<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous">
</script>
<script>
function get_id(id){
	console.log(id);
}
</script>
</body>

</html>
