<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CvView */

$this->title = 'Update Cv View: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cv Views', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cv-view-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
