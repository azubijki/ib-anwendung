<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Institute */

$this->title = $model->institut_name;
$this->params['breadcrumbs'][] = ['label' => 'Institute', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institute-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'standorte_ID' => $model->standorte_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Löschen', ['delete', 'id' => $model->id, 'standorte_ID' => $model->standorte_ID], [
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
            'id',
            'institut_name',
            'institut_abk',
            'standorte.standort_name',
        ],
    ]) ?>

</div>
