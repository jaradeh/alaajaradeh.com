<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HomePageVisitorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Page Visitors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-page-visitor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Home Page Visitor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'ip',
            'connection',
            'city',
            'country',
            // 'country_code',
            // 'isp',
            // 'lat',
            // 'lon',
            // 'org',
            // 'region',
            // 'region_name',
            // 'status',
            // 'timezone',
            // 'zip',
            [
                'attribute' => 'date',
                'format' => 'html',
                'value' => function ($model) {
                    return date('d M Y h:i:s A', $model->date);
                },
            ],
            // 'visits',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
