<?php
$this->title=$model->header;
?>

<h3><?= $model->header ?></h3>
<div class="meta">
    <p>Автор: <b><?= $model->author ?></b> Дата публикации: <b><?= $model->date ?></p></b>
</div>
<div>
<?=$model->content?>
</div>