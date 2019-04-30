<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\HomePageVisitor */

$this->title = 'Create Home Page Visitor';
$this->params['breadcrumbs'][] = ['label' => 'Home Page Visitors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-page-visitor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
