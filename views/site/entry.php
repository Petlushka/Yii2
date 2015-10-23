<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2015
 * Time: 20:01
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('Ваше имя: ') ?>

<?= $form->field($model, 'email')->label('Ваш email: ') ?>

<?= $form->field($model, 'age')->label('Ваш возраст: ') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>