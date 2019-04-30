<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CvView */

$this->title = 'Create Cv View';
$this->params['breadcrumbs'][] = ['label' => 'Cv Views', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cv-view-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
