<?php
    $conn = mysqli_connect("localhost", "root", "", "hp");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }

    $name = $_POST['search'];

    $query = "SELECT * FROM pet
                    WHERE name LIKE '$name%'";
    $result = mysqli_query($conn, $query);
    while($row = $result -> fetch_assoc()){
        if (strlen($row['description']) > 20){
			echo "
			<article class='pets' id='output'>
				<section class='pets__img'>
					<img src='", $row['img'], "' alt=''>
				</section>

				<section class='pets__info'>
					<h2>Кличка: <span></span>".$row['name']."</span></h2>
					<p><b>Описание: </b><span>",  substr($row['description'],  0, 39) .'...', "</span></p>
					<p><b>Цена: </b><span>".$row['price']."р.</span></p>
				</section>

				<section class='pets__buttons'>
				<!--<button type='submit' form='form_for_info_pet'>Больше информации</button>-->
					<form id='carts' method='post' action='shop.php?id=".$row['id']."'>
						<button type='submit' name='add_to_cart' class='add_pr' value=".$row['id']." data-value='".$row['id']."' onclick='get_id(".$row['id'].")'>Добавить в корзину</button>
					</form>
				</section>
			</article>
			";
			continue;
			} else{
				echo "
				<article class='pets' id='output'>
					<section class='pets__img'>
						<img src='", $row['img'], "' alt=''>
					</section>

					<section class='pets__info'>
						<h2>Кличка: <span></span>".$row['name']."</span></h2>
						<p><b>Описание: </b><span>",$row['description'], "</span></p>
						<p><b>Цена: </b><span>".$row['price']."р.</span></p>
					</section>

					<section class='pets__buttons'>
					<!--<button type='submit' form='form_for_info_pet'>Больше информации</button>-->
						<form id='carts' method='post' action='shop.php?id=".$row['id']."'>
							<button type='submit' name='add_to_cart' class='add_pr' value=".$row['id']." data-value='".$row['id']."' onclick='get_id(".$row['id'].")'>Добавить в корзину</button>
						</form>
					</section>
				</article>
				";
				continue;
			}
	}
