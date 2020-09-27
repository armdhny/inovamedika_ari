<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BerobatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Berobats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berobat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Berobat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_Berobat',
            'id_Pasien',
            'id_dokter',
            'tgl_berobat',
            'keluhan_pasien',
            //'hasil_diagnosa',
            //'status_pasien',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
