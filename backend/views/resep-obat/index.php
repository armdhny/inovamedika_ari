<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ResepObatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resep Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resep Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ResepObat',
            'id_obat',
            'id_Berobat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
