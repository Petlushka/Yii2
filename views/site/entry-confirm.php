<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2015
 * Time: 20:00
 */
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Age</label>: <?= Html::encode($model->age) ?></li>

</ul>