<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Resepobat */

$this->title = 'Create Resepobat';
$this->params['breadcrumbs'][] = ['label' => 'Resepobats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resepobat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
