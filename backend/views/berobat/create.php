<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Berobat */

$this->title = 'Create Berobat';
$this->params['breadcrumbs'][] = ['label' => 'Berobats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berobat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
