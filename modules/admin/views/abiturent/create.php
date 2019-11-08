<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Abiturent */

$this->title = 'Ariza qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Arizalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abiturent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
