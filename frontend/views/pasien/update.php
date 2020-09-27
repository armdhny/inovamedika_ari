<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pasien */

$this->title = 'Update Pasien: ' . $model->id.Pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id.Pasien, 'url' => ['view', 'id' => $model->id.Pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
