<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Standorte;

/* @var $this yii\web\View */
/* @var $model app\models\Institute */
/* @var $form yii\widgets\ActiveForm */

$standortArray = ArrayHelper::map(\app\models\Standorte::find()->orderBy('ID')->all(), 'ID', 'standort_name')
?>

<div class="institute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'institut_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institut_abk')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'standorte_ID')->dropDownList(ArrayHelper::map(Standorte::find()->orderBy('ID')->all(), 'ID', 'standort_name'), ['class' => 'form-control inline-block']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
