<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Standorte */

$this->title = $model->standort_name;
$this->params['breadcrumbs'][] = ['label' => 'Standorte', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="standorte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Sind Sie sicher?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'standort_name',
            'siegel',
        ],
    ]) ?>

</div>
