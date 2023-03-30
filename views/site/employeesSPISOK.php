<div class="mainBackground">
    <div class="mainBackgroundfon">
        <a class="nazvaniePEREHODA">Список сотрудников</a> <br>
        <form method="post">
        <ol>
            <?php
            foreach ($employees as $employee) {
                echo '<div>';
                echo '<p>ФИО: ' . $employee->ФИО. '</p>';
                echo '</div>';
            }
            ?>
        </ol>
        </form>
    </div>
</div>