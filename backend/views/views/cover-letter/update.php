<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CoverLetter */

$this->title = 'Update Cover Letter: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cover Letters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cover-letter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
