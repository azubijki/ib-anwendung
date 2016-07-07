<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StandorteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Standorte';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="standorte-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Standorte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'standort_name',
            'siegel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
