<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Standorte */

$this->title = 'Create Standorte';
$this->params['breadcrumbs'][] = ['label' => 'Standortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="standorte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
