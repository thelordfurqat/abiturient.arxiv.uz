<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ariza */

$this->title = 'Update Ariza: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Arizas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ariza-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
