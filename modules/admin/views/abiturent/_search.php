<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AbiturentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abiturent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'passport') ?>

    <?= $form->field($model, 'telefon') ?>

    <?= $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'manzil') ?>

    <?php // echo $form->field($model, 'dtm_varaqi') ?>

    <?php // echo $form->field($model, 'id_kod') ?>

    <?php // echo $form->field($model, 'payment_file') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
