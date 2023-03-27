<link rel="stylesheet" href="public/style/style.css">
<h2 class="value">Авторизация</h2>
<h3 class="topButtonRight"><?= $message ?? ''; ?></h3>

<h3 class="topButtonRight"><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">
        <label>Логин <input type="text" name="login"></label>
        <label>Пароль <input type="password" name="password"></label>
        <button>Войти</button>
    </form>
<?php endif;