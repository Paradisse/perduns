<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>
<li><label>Email</label>: <?= Html::encode($model->email) ?></li>
<li><label>Имя</label>: <?= Html::encode($model->name) ?></li>
