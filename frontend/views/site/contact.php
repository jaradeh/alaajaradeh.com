<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="column" id="content" style="width:70%;">
        <h1><?= Html::encode($this->title) ?></h1>

        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    
                    <?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                    <?php if ($success != "") { ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <center><div class="alert alert-info"><?php echo $success; ?></div></center>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="column" id="sidebar" style="width:297px;">
        <h2>Locations</h2>
        <ul>
            <li>
                <strong>Armada 2, Unit 1509<br />
                    Jumeirah Lakes Towers,Cluster P<br />
                    Dubai, UAE
                </strong><br />
                Tel: +971 4 399 8335<br />
                Fax: +971 4 399 8336<br />
                <a href="mailto:info@vupoint.net">info@vupoint.net</a>
            </li>
        </ul>
    </div>

</div>
