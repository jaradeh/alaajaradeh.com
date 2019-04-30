<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\ProjectCategory;

/* @var $this yii\web\View */
/* @var $model backend\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'link')->textInput(['id' => 'myTextBox']) ?>

    <div class="form-group field-myTextBox has-success" id="test_site_div" style="display: none;">
        <a href="" target="_blank" id="test_site_btn">View Site</a>
    </div>

    <?= $form->field($model, 'start_date')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'end_date')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'category_id[]')->dropDownList(ArrayHelper::map(ProjectCategory::find()->all(), 'id', 'name'),['multiple'=>'multiple','class'=>'form-control',]); ?>

    <?= $form->field($model, 'status')->dropDownList([1 => 'Pending', 2 => 'Canceled', 3 => 'Approved']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
