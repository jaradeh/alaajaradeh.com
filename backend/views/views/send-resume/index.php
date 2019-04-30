<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SendResumeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Send Resumes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="send-resume-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Send Resume', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            [

                'attribute' => 'path',
                'format' => 'html',
                'value' => function ($model) {
                    return "<a href='/../..//frontend/web/cv/" . $model->path . "'>Alaa Jaradeh</a>";
                },
            ],
            'email:email',
            'name',
            //'cover_letter:ntext',
            [
                'attribute' => 'date',
                'format' => 'html',
                'value' => function ($model) {
                    return date('d M Y h:i:s A', $model->date);
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
