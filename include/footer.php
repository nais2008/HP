<footer>
	<div class="footer">
		<section class="footer__text">
			<aside>
				<p><b>Адрес: </b>Шадринск, ул. Пушкина, дом 500</p>
				<p><b>Номер: </b>+7 800 555 35 35</p>
			</aside>
			<aside>
				<h4>&copy; 2024 My Website. All rights reserves.</h4>
			</aside>
		</section>
		<section class="footer__navigation">
			<nav>
				<ul>
					<li><a href='index.php'>Главная</a></li>
					<li><a href='shop.php'>Друзья</a></li>
					<li><a href='info.php'>О сервисе</a></li>
					<li><a href='check_contacts.php'>Контаты</a></li>
					<li>
						<form action="card.php">
							<button type="submit">
								<img src="img/card.png" alt="корзина">
							</button>
						</form>
						<p><a href="card.php">
							<?php
								$query = "SELECT SUM(price) FROM `cart`";
								$result = mysqli_query($conn, $query);
								$row = $result -> fetch_assoc();
								if (!isset($row)){
									echo "0р. ";
								}
								else{
									echo "".$row['SUM(price)']."р. ";	
								}
							?>
						</a></p>
					</li>
				</ul>
			</nav>
		</section>
		<section class="footer__img">
			<a href="https://t.me/MamaKupiSnikers" target="_blank">
				<img src="img/tg.svg" alt="">
			</a>
			<a href="https://github.com/nais2008" target="_blank">
				<img src="img/github.svg" alt="">
			</a>
			<a href="https://vk.com/mama_kupi_snikers" target="_blank">
				<img src="img/vk.svg" alt="">
			</a>
		</section>
	</div>
</footer>
