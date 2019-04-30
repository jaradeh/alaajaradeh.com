<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CvSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cvs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cv-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cv', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'path',
            [
                'attribute' => 'date',
                'format' => 'html',
                'value' => function ($model) {
                    return date('d M Y h:i:s A', $model->date);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
