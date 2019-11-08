<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Abiturent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abiturent-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="input-field">
        <label style="color: #212121;">F.I.O :</label><br>
        <?=$form->field($model,'fio')->textInput(['placeholder'=>"Ismingizni kiriting", 'required'=>"required"])->label('')?>
        <!--                            <input type="text" class="form-control" name="fio" placeholder="Ismingizni kiriting" required="required">-->
    </div>
    <div class="input-field">
        <label style="color: #212121;">Passport seriya raqami :</label><br>
        <?=$form->field($model,'passport')->textInput(['placeholder'=>"Passport seriya va raqamini kiriting", 'required'=>"required"])->label('')?>
        <!--                            <input type="text" class="form-control" name="passport" placeholder="Passport seriya va raqamini kiriting" required="required">-->
    </div>
    <div class="input-field">
        <label style="color: #212121;">Telefon raqam :</label><br>
        <?=$form->field($model,'telefon')->textInput(['placeholder'=>"Telefon raqamingizni kiriting", 'required'=>"required"])->label('')?>
        <!--                            <input type="text" class="form-control" name="tel" placeholder="Telefon raqamingizni kiriting" required="required">-->
    </div>
    <div class="input-field">
        <label style="color: #212121;">Manzil :</label><br>
        <?=$form->field($model,'manzil')->textInput(['placeholder'=>"Manzilingizni kiriting", 'required'=>"required"])->label('')?>
        <!--                            <input type="text" class="form-control" name="mazil" placeholder="Manzilingizni kiriting" required="required">-->
    </div>
    <div class="input-field">
        <label style="color: #212121;">Dtm raqami: </label><br>
        <?=$form->field($model,'id_kod')->textInput(['placeholder'=>"DTM raqamini kiriting",'type'=>'number', 'required'=>"required"])->label('')?>
        <!--                            <input type="text" class="form-control" name="dtm_raqam" placeholder="DTM raqamini kiriting" required="required">-->
    </div>
    <div class="input-field" >
        <label style="color: #212121;">DTM varaqa :</label><br>
        <?= $form->field($model, 'dtm_varaqi')->fileInput(['maxlength' => true])->label('') ?>
    </div>
    <div class="input-field">
        <label style="color: #212121;">To'lov haqida ma'lumotnomani yuklang :<span class="small" style="color: #1b6d85">To'lov <a href="#">8600020496681232</a>  raqamiga jo'natilsin</span></label><br>
        <?=$form->field($model,'payment_file')->fileInput(['maxlenth'=>true])->label('')?>
    </div>
    <div class="input-field">
        <label> Ariza holati</label>
        <?=$form->field($model,'image')->dropDownList([1=>'Ko\'rib chiqish jarayoni',2=>'Hujjat qabul qilingan',2=>'Hujjat rad qilingan'])->label('')?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
