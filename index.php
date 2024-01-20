<?php //HEADER
	$title = 'Happy Pet';
	$css_name = 'style';
	include 'include/header.php';
?>
	<main>
		<div class="container">
			<section class="container__left">
				<article class="container__left__text">
					<h1>Твой новый друг с доставкой на дом</h1>
					<p>Онлайн-магазин домашних животных - удобное решение, когда лень выходиь из дома</p>
				</article>
				<section class="container__left__button">
					<form action="shop.php">
						<button type="submit">Посмотреть друзей</button>
					</form>
				</section>
				<section class="container__left__block">
					<div>
						<aside>
							<a href="shop.php">Собаки </a>
							<a href="shop.php">→</a>
						</aside>
						<img src="img/index/dog_card.png" alt="карта собаки">
					</div>
					<div>
						<aside>
							<a href="shop.php">Попугаи</a>
							<a href="shop.php">→</a>
						</aside>
						<img src="img/index/popug_card.png" alt="карта попугая">
					</div>
				</section>
			</section>
			<section class="container__right">
				<img src="img/index/dog.png" alt="собака">		
				<img src="img/index/cat.png" alt="кошка">
				<div class="container__right__cirkle"></div>
				<div class="container__right__vsp"></div>
			</section>
		</div>
	</main>
    <?php //FOOTER
        include 'include/footer.php';
    ?>
	<script src="js/main.js">
	</script>
</body>
</html>