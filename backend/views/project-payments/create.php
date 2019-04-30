<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProjectPayments */

$this->title = 'Create Project Payments';
$this->params['breadcrumbs'][] = ['label' => 'Project Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-payments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
