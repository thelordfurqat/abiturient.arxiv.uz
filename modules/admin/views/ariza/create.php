<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ariza */

$this->title = 'Create Ariza';
$this->params['breadcrumbs'][] = ['label' => 'Arizas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ariza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
