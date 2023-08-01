
    <?php
    $title = 'Главная страница';
    require "header.php";
    ?>
    <div>

    <h1>Главная страница</h1>

    <form action="check-php.php" method="post">

        <input type="text" name="username" placeholder="Введите имя">
        <input type="email" name="email" placeholder="Введите email">
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Отправить</button>

    </form>
    </div>

    <?php 
    require "footer.php";
    ?>


