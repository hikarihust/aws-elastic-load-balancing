<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

ini_set('session.save_handler', 'memcached');
ini_set('session.save_path', 'web-memcached.phjlhr.cfg.use2.cache.amazonaws.com:11211');
ini_set('session.gc_maxlifetime', 1800);
ini_set('session.cookie_domain', 'web-load-balancer-1122129272.us-east-2.elb.amazonaws.com');


if (empty($_SESSION)) session_start();


echo "Set Server 1<br/>";

if (isset($_SESSION["username"])) {
        echo $_SESSION["username"];
} else {
        $_SESSION["username"] = " Vu Dinh Quang";
}
?>
