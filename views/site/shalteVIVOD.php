<div class="mainBackground">
    <div class="mainBackgroundfon">

        <form method="post" action="/pop-it-mvc/shalte">
            <a class="nazvaniePEREHODA">ПОИСК</a> <br>
            <div>
            <input class="login" name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input class="search1" type="search" name="value" placeholder="Дисциплина"> <br>
            <button>Подтвердить</button>
            </div>
        </form>

        <form method="post" action="/pop-it-mvc/shalte1">
            <div>
                <input class="login" name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <input class="search1" type="search" name="value1" placeholder="Подразделение"> <br>
                <button>Подтвердить</button>
            </div>
        </form>

        <form method="post" action="/pop-it-mvc/shalte2">
            <div>
                <input class="login" name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <input class="search1" type="search" name="value3" placeholder="Дисциплина"> <br>
                <input class="search1" type="search" name="value2" placeholder="Подразделение"> <br>
                <button>Подтвердить</button>
            </div>
        </form>


    </div>
</div>