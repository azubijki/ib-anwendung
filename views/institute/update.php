<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Institute */

$this->title = 'Update Institut: ' . $model->institut_name;
$this->params['breadcrumbs'][] = ['label' => 'Institute', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->institut_name, 'url' => ['view', 'id' => $model->id, 'standorte_ID' => $model->standorte_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="institute-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
