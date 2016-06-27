<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InstituteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Institute';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institute-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Neuer Eintrag', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'institut_name',
            'institut_abk',
            'standorte.standort_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
