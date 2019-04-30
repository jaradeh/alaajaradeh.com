<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SendResume */

$this->title = 'Send Resume';
$this->params['breadcrumbs'][] = ['label' => 'Send Resumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="send-resume-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
