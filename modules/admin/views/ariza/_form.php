<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ariza */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ariza-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'abiturent_id')->textInput() ?>

    <?= $form->field($model, 'holat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
