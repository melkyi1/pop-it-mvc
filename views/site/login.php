<link rel="stylesheet" href="public/style/style.css">
    <div class="mainBackground">
        <div class="mainBackgroundfon">
            <?php
            if (!app()->auth::check()):
            ?>
    <form method="post">
        <label class="login">Логин <br>  <input class="search1" type="text" name="login"></label><br>
        <label class="login">Пароль <br> <input class="search1" type="password" name="password"></label> <br>
        <button class="search1" >Войти</button>
    </form>
    </div>
    </div>

<?php endif;