<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Resepobat */

$this->title = 'Update Resepobat: ' . $model->id_ResepObat;
$this->params['breadcrumbs'][] = ['label' => 'Resepobats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ResepObat, 'url' => ['view', 'id' => $model->id_ResepObat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resepobat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
