<div class="mainBackground">
    <div class="mainBackgroundfon">
        <a class="nazvaniePEREHODA">Добавление подразделения</a> <br>
        <form method="post">
            <input class="login" name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input class="search1" type="search" name="Name" placeholder="Название"> <br>
        <input class="search1" type="search" name="Subdivisiontype" placeholder="Вид подразделения"> <br>
        <input class="buttonCONFIRM" type="submit" value="Подтвердить">
        </form>
    </div>
</div>