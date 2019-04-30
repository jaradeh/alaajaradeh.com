<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CoverLetter */

$this->title = 'Create Cover Letter';
$this->params['breadcrumbs'][] = ['label' => 'Cover Letters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cover-letter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
