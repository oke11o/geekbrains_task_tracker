<?php

$this -> title = 'Создать команду';
$this -> params['breadcrumbs'][] = $this -> title;

?>

<?= $this -> render('_form', ['model' => $model]) ?>
