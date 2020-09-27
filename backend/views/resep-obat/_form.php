<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ResepObat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resep-obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_obat')->textInput() ?>

    <?= $form->field($model, 'id_Berobat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
