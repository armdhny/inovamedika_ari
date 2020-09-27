<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BerobatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berobat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_Berobat') ?>

    <?= $form->field($model, 'id_Pasien') ?>

    <?= $form->field($model, 'id_dokter') ?>

    <?= $form->field($model, 'tgl_berobat') ?>

    <?= $form->field($model, 'keluhan_pasien') ?>

    <?php // echo $form->field($model, 'hasil_diagnosa') ?>

    <?php // echo $form->field($model, 'status_pasien') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
