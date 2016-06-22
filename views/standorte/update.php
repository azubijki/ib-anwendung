<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Standorte */

$this->title = 'Update Standorte: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Standortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="standorte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
