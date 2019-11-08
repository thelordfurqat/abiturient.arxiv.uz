<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AbiturentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Arizalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abiturent-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ariza qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'fio',
            'id_kod',
            'passport',
            'telefon',
            [
                'attribute'=>'image',
                'value'=>function($x){
                    switch ($x->image){
                        case '1': return 'Ko\'rib chiqish jarayoni';break;
                        case '2':return 'Hujjat qabul qilingan';break;
                        case '3':return 'Hujjatni rad qilish';break;
                        default: return 'Ko\'rib chiqish jarayoni';break;
                    }
                }
            ],
//            'image',
            //'manzil',
            //'dtm_varaqi',
            //'payment_file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
