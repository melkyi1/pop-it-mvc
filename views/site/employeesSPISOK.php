<div class="mainBackground">
    <div class="mainBackgroundfon">
        <a class="nazvaniePEREHODA">Список сотрудников</a> <br>
        <form method="post">
            <input class="login" name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <ol>
            <?php
            foreach ($employees as $employee) {
                echo '<div class="zadnikVivoda">';
                echo '<div class="vivod">';
                echo '<p>ФИО: ' . $employee->ФИО. '</p>';
                echo '<p>Пол: ' . $employee->Пол. '</p>';
                echo '<p>Дата рождения: ' . $employee->birthday. '</p>';
                echo '<p>Адрес: ' . $employee->Адрес. '</p>';
                echo '<p>Должность: ' . $employee->Должность. '</p>';
                echo '<p>Подразделение: ' . $employee->Подразделение. '</p>';

//                echo '<label>Выбрать дисциплину<select name="Название">';
//                echo "<option value=\"$employee->ДисцилинаID\">" .'</option>';
//                echo '</select></label>'
//;
                echo '<label>Выбрать дисциплину<select name="Название">';
                foreach ($discipline as $item) {
                    echo "<option value=\"$item->ДисцилинаID\">" . $item->Название. '</option>';
                }
                echo '</select></label>';
                echo '<button>Подтвердить </button>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </ol>
        </form>
    </div>
</div>