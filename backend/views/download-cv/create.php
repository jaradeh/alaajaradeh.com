<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DownloadCv */

$this->title = 'Create Download Cv';
$this->params['breadcrumbs'][] = ['label' => 'Download Cvs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="download-cv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
