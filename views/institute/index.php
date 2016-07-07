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
'institut_name',
            'institut_abk',
            //Spalte für den Standortnamen
            [
                'attribute' => 'Standort', //Spaltenüberschrift
                'value' => 'standorte.standort_name' //Daten in der Spalten (tabelle.spalte)
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
