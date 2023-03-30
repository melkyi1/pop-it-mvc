
<div class="mainBackground">
    <div class="mainBackgroundfon">
<form method="post">
    <label class="login">Имя <br> <input class="search1" type="text" name="name"></label><br>
    <label class="login">Логин <br> <input class="search1" type="text" name="login"></label><br>
    <label class="login">Пароль <br> <input class="search1" type="password" name="password"></label><br>
    <label class="login">Ваша роль <br> <select class="search1" name="prof">
            <option value="0">Сотрудник</option>
            <option value="1">Админ</option> <br> </select>
    </label> <br>
    <button class="search1" >Зарегистрироваться</button>
    <h3><?= $message ?? '';?></h3>
</form>
    </div>
</div>