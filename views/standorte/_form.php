<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Standorte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="standorte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'standort_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'siegel')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
