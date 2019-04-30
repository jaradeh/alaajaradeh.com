<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Cv;
use backend\models\CoverLetter;
use dosamigos\tinymce\TinyMce;

$get_coverLetter = CoverLetter::find()->one();

/* @var $this yii\web\View */
/* @var $model backend\models\SendResume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="send-resume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'path')->dropDownList(ArrayHelper::map(Cv::find()->all(), 'path', 'name')) ?>

    <?=
    $form->field($model, 'cover_letter')->widget(TinyMce::className(), [
        'options' => ['rows' => 26],
        'language' => 'en',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | fontselect | fontsizeselect | colorselect "
        ]
    ]);
    ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => time()]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>