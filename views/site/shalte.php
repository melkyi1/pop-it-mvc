<div class="mainBackground">
    <div class="mainBackgroundfon">
<input class="login" name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
<div class="main">
    <a class="nazvaniePEREHODA2">Найденые сотрудники</a> <br>
    <?php
    foreach ($shaltegodx as $shaltegod) {
        echo '<div class="zadnikVivoda">';
        echo '<div class="vivod">';
        echo '<p>ФИО: ' . $shaltegod->ФИО . '</p>';
        echo '<p>Пол: ' . $shaltegod->Пол. '</p>';
        echo '<p>Дата рождения: ' . $shaltegod->birthday. '</p>';
        echo '<p>Адрес: ' . $shaltegod->Адрес. '</p>';
        echo '<p>Должность: ' . $shaltegod->Должность. '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>
    </div>
</div>