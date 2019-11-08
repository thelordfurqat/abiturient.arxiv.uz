<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Abiturent */

$this->title = $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Arizalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="abiturent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fio',
            'id_kod',
            'passport',
            'telefon',

            'manzil',
            [
                'attribute'=>'dtm_varaqi',
                'value'=>function($d){
                    return "<object data='/web/image/{$d->dtm_varaqi}' type='image/png' style='width: 200px'><img src='/web/image/avatar.jpg' style='width:100px;'></object>";

                },
                'filter'=>false,
                'format'=>'raw'
            ],
            [
                'attribute'=>'payment_file',
                'value'=>function($d){
                    return "<object data='/web/image/{$d->payment_file}' type='image/png' style='width: 200px'><img src='/web/image/avatar.jpg' style='width:100px;'></object>";

                },
                'filter'=>false,
                'format'=>'raw'
            ],
            [
                'attribute'=>'image',
                'value'=>function($x){
                    switch ($x->image){
                        case '1': return 'Ko\'rib chiqish jarayoni';break;
                        case '2':return 'Hujjat qabul qilingan';break;
                        case '3':return 'Hujjat qabul qilinmagan';break;
                        default: return 'Ko\'rib chiqish jarayoni';break;
                    }
                },
            ],
        ],
    ]) ?>
<div class="row" style="margin-left: 320px;">
    <a href="<?=Yii::$app->urlManager->createUrl(['admin/abiturent/one','id'=>$model->id,'holat'=>1])?>" class="btn btn-success">Ko'rib chiqish jarayoniga o'tkazish</a>
    <a href="<?=Yii::$app->urlManager->createUrl(['admin/abiturent/one','id'=>$model->id,'holat'=>2])?>" class="btn btn-primary">Hujjatni qabul qilish</a>
    <a href="<?=Yii::$app->urlManager->createUrl(['admin/abiturent/one','id'=>$model->id,'holat'=>3])?>" class="btn btn-danger">Hujjatni rad qilish</a>
</div>
</div>
