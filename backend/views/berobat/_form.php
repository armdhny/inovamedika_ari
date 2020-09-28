<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Berobat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berobat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Pasien')->textInput() ?>

    <?= $form->field($model, 'id_dokter')->textInput() ?>
    
    <?= $form->field($model, 'tgl_berobat')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Masukan tanggal'],
        'pluginOptions' => [
            'autoclose'=>true
    ]
    ]); 
?>

    <?= $form->field($model, 'keluhan_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hasil_diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_pasien')->dropDownList([ 'Rawat inap' => 'Rawat inap', 'Rawat Jalan' => 'Rawat Jalan', 'Rujuk' => 'Rujuk', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
