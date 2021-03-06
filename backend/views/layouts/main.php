<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$this->title = "Alaa Jaradeh Admin";
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="../../web/img/fav.png"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script>
            $(function () {
                $('a[title]').tooltip();
            });

        </script>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'AJ',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems = [
                ['label' => 'Home', 'url' => Yii::$app->homeUrl],
                [
                    'label' => 'Edit website',
                    'items' => [
                        ['label' => 'Home', 'url' => Yii::$app->homeUrl],
                        ['label' => 'Send Reusme', 'url' => ['/send-resume']],
                        ['label' => 'Cover Letter', 'url' => ['/cover-letter']],
                        ['label' => 'CV', 'url' => ['/cv']],
                        ['label' => 'Projects', 'url' => ['/projects']],
                        ['label' => 'Projects Category', 'url' => ['/project-category']],
                        ['label' => 'Projects Images', 'url' => ['/project-images']],
                        ['label' => 'Projects Payments', 'url' => ['/project-payments']],
                        ['label' => 'Home Page Visitors', 'url' => ['/home-page-visitor']],
                    ],
                ],
            ];
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">Copyright &copy; www.alaajaradeh.com <?= date('Y') ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
