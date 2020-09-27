<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ResepObat */

$this->title = 'Update Resep Obat: ' . $model->id_ResepObat;
$this->params['breadcrumbs'][] = ['label' => 'Resep Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ResepObat, 'url' => ['view', 'id' => $model->id_ResepObat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resep-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
