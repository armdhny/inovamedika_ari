<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Berobat */

$this->title = 'Update Berobat: ' . $model->id_Berobat;
$this->params['breadcrumbs'][] = ['label' => 'Berobats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Berobat, 'url' => ['view', 'id' => $model->id_Berobat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="berobat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
