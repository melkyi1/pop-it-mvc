<div class="mainBackground">
    <div class="mainBackgroundfon">
        <a class="nazvaniePEREHODA">Добавление сотрудника</a> <br>
        <form method="post">
            <input class="login" name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input class="search1" type="text" name="ФИО" placeholder="Фио"> <br>
        <input class="search1" type="text" name="Пол" placeholder="Пол"> <br>
        <input class="search1" type="date" name="birthday" placeholder="Дата рождения"> <br>
        <input class="search1" type="text" name="Адрес" placeholder="Адрес прописки"> <br>
        <input class="search1" type="text" name="Должность" placeholder="Должность"> <br>
        <input class="search1" type="text" name="Подразделение" placeholder="Подразделение"> <br>
            <button class="buttonCONFIRM">Подтвердить</button>
        </form>

    </div>
</div>