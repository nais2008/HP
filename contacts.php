<?php //HEADER
	$title = 'Контакты';
	$css_name = 'contacts';
	include 'include/header.php';
?>
    <main>
        <div class="container">
            <section>
                <article>
                    <h1 align='center'>Сообщение на почту</h1>
                </article>
                <section>
                    <form action="check_contacts.php" method="post" id="form">
                        <span class='success_mail'><?=$_SESSION['success_mail']?></span>
                        <input type='text' name='username' form='form' placeholder='Введите имя:' class='form-style animate__fadeIn animate__animated' value='<?=$_SESSION["user_name"] ?>'>
                        <span class='text-danger'><?=$_SESSION['error_username']?></span>
                        <input type='email' name='email' form='form' placeholder='Введите email:' class='form-style animate__fadeIn animate__animated' value='<?=$_SESSION["email"] ?>'>
                        <span class='text-danger'><?=$_SESSION['error_email']?></span>
                        <input type='text' name='subject' form='form' placeholder='Введите тему сообщения:' class='form-style animate__fadeIn animate__animated' value='<?=$_SESSION["subject"] ?>'>
                        <span class='text-danger'><?=$_SESSION['error_subject']?></span>
                        <textarea name='message' placeholder='Введите соощение:' form='form' class='form-style animate__fadeIn animate__animated'><?=$_SESSION['message']?></textarea>
                        <span class='text-danger'><?=$_SESSION['error_message']?></span>
                        <button tupe='submit'>Отправить</button>
                    </form>
                </section>
            </section>
        </div>
    </main>
    <?php //FOOTER
        include 'include/footer.php';
    ?>
    <script src="js/main.js"></script>
</body>
</html>