<?php //HEADER
	$title = 'Корзина';
	$css_name = 'card';
	include 'include/header.php';
?>
<?php
	if (isset($_POST['delete_pr'])){
		$query = "DELETE FROM `cart`
				  WHERE id = ".$_COOKIE['id_card']."";
		mysqli_query($conn, $query);
	}
?>
<main>
    <div class="container">
        <section class="pets">
        <?php
			$query = 'SELECT * FROM `cart`';
			$result = mysqli_query($conn, $query);
			while ($row = $result -> fetch_assoc()){
				if (strlen($row['description']) > 20){
					echo "
						<article class='pet' id='output'>
							<section class='pets__info'>
								<h2>Кличка: <span></span>".$row['name']."</span></h2>
								<p><b>Описание: </b><span>",  substr($row['description'],  0, 39) .'...', "</span></p>
								<p><b>Цена: </b><span>".$row['price']."р.</span></p>
							</section>

							<section class='pets__buttons'>
								<form action='#' method='post'>
									<button type='submit' onclick='get_id(".$row['id'].")' name='delete_pr'>Удалить из корзины</button>
								</form>
							</section>
						</article>
					";
					continue;
				} else{
					echo "
						<article class='pet' id='output'>
							<section class='pets__info'>
								<h2>Кличка: <span></span>".$row['name']."</span></h2>
								<p><b>Описание: </b><span>",$row['description'], "</span></p>
								<p><b>Цена: </b><span>".$row['price']."р.</span></p>
							</section>

							<section class='pets__buttons'>
								<form action='#' method='post'>
									<button type='submit' onclick='get_id(".$row['id'].")' name='delete_pr'>Удалить из корзины</button>
								</form>
							</section>
						</article>
					";
					continue;
				}
			}
        ?>
        </section>
    </div>
</main>
<?php //FOOTER
    include 'include/footer.php';
?>
<script type='text/javascript' 
			src="js/main.js">
</script>
<script>
function get_id(id){
	console.log(id);
	document.cookie = "id_card=" + id;
}
</script>
</body>
</html>
