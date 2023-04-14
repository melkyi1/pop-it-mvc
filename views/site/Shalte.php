<div class="header">
    <p>Результат поиска</p>
    <a class="main_header" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
</div>

<div class="main">
    <?php
    foreach ($disciplines as $discipline) {
    echo '<p>Дисциплина: ' . $discipline->discipline . '</p>';
    foreach ($chatons as $chaton) {
        echo '<p>Группа: ' . $chaton->group . '</p>';
        echo '<p>Фамилия: ' . $chaton->surname . '</p>';
        echo '<p>Имя: ' . $chaton->name . '</p>';
        echo '<p>Отчество: ' . $chaton->middlename . '</p>';
        echo '<p>Дисциплина: ' . $chaton->discipline . '</p>';
        echo '<p>Количество часов: ' . $chaton->number_of_hours . '</p>';
        echo '<p>Вид контроля: ' . $chaton->control . '</p>';
        echo '<br>';
    }
    ?>
    <p>Допустим мяу</p>
</div>