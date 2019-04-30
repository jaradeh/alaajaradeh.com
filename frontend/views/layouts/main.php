<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use backend\models\HomePageVisitor;

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

//function get_current_ip() {
//    $ip = file_get_contents('https://api.ipify.org');
//    return json_encode($ip);
//}
//
//function get_client_info($url) {
//
//    $ch = curl_init();
//    $timeout = 5;
//    curl_setopt($ch, CURLOPT_URL, $url);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
//    $data = curl_exec($ch);
//    curl_close($ch);
//    return $data;
//}
//
//$url = "http://ip-api.com/json/";
//$current_ip = $get_ip = get_client_ip();
//if ($current_ip == "UNKNOWN") {
//    $current_ip = get_current_ip();
//} else {
//    $current_ip = $current_ip;
//}
//$url = $url . $current_ip;
//$array_all_data = get_client_info($url);
//$all_data = json_decode(get_client_info($url));
//
//if ($all_data->status == "success") {
//    $check_if_ip_in_db = HomePageVisitor::find()->where(['ip' => $all_data->query])->one();
//
//    if (sizeof($check_if_ip_in_db) <= 0) {
//        $visits = 1;
//        $save_into_visitors_db = Yii::$app->db->createCommand('INSERT INTO home_page_visitor (ip,connection,city,country,country_code,isp,lat,lon,org,region,region_name,status,timezone,zip,date,visits)
//				VALUES (
//				"' . $all_data->query . '",
//				"' . $all_data->as . '",
//				"' . $all_data->city . '",
//				"' . $all_data->country . '",
//				"' . $all_data->countryCode . '",
//				"' . $all_data->isp . '",
//				"' . $all_data->lat . '",
//				"' . $all_data->lon . '",
//				"' . $all_data->org . '",
//				"' . $all_data->region . '",
//				"' . $all_data->regionName . '",
//				"' . $all_data->status . '",
//				"' . $all_data->timezone . '",
//				"' . $all_data->zip . '",
//				"' . time() . '",
//				"' . $visits . '")')
//                ->execute();
//    } else {
//        $new_visits = (int) $check_if_ip_in_db->visits + 1;
//        Yii::$app->db->createCommand()
//                ->update('home_page_visitor', ['visits' => $new_visits], ['id' => $check_if_ip_in_db->id])
//                ->execute();
//
//        $save_into_visitors_db = Yii::$app->db->createCommand('INSERT INTO visits (ip_id,date)
//				VALUES (
//				"' . $check_if_ip_in_db->id . '",
//				"' . time() . '")')
//                ->execute();
//    }
//}

$this->title = "Alaa Jaradeh";
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-92992662-1', 'auto');
            ga('send', 'pageview');

        </script>

        <script src="/js/jquery-2.1.3.min.js"></script>
        <script src="/js/modernizr.custom.js"></script>

        <script src='https://www.google.com/recaptcha/api.js'></script>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <!-- Loading animation -->

        <?= $content ?>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108843132-1"></script>
<script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-108843132-1');
</script>
