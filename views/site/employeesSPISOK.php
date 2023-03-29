<div class="mainBackground">
    <div class="mainBackgroundfon">
        <a class="nazvaniePEREHODA">Список сотрудников</a> <br>
        <ol>
            <?php
            foreach ($posts as $post) {
                echo '<li>' . $post->title . '</li>';
            }
            ?>
        </ol>
    </div>
</div>