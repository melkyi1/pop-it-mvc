<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
    <link rel="stylesheet" href="public/style/style.css">
</head>
<body>
<header>
    <nav class="topcollor">
        <a href="https://vk.com/k.grebenyuk2013"><img src="https://img.icons8.com/fluency-systems-regular/256/vk-com.png"></a><a href="#"><img src="https://img.icons8.com/bubbles/256/discord.png"></a>
        <a class="topButtonRight" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <a ></a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a class="topButtonRight" href="<?= app()->route->getUrl('/login') ?>">Войти</a>
            <a class="topButtonRight topButtonRight1" href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
        <?php
        else:
            ?>
            <a class="topButtonRight topButtonRight1" href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
