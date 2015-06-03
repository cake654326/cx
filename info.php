<?php

error_reporting(E_ALL | E_STRICT);
date_default_timezone_set("Asia/Taipei");
 

function get_client_ip()
{
    foreach (array(
                'HTTP_CLIENT_IP',
                'HTTP_X_FORWARDED_FOR',
                'HTTP_X_FORWARDED',
                'HTTP_X_CLUSTER_CLIENT_IP',
                'HTTP_FORWARDED_FOR',
                'HTTP_FORWARDED',
                'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER)) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip);
                if ((bool) filter_var($ip, FILTER_VALIDATE_IP,
                                FILTER_FLAG_IPV4 |
                                FILTER_FLAG_NO_PRIV_RANGE |
                                FILTER_FLAG_NO_RES_RANGE)) {
                    return $ip;
                }
            }
        }
    }
    return "0.0.0.0";
}

$_ip = get_client_ip();
$_ua = $_SERVER['HTTP_USER_AGENT'];
$_time = date("Y-m-d H:m:s");

$_all_data = @$_GET['cx'];

echo "→".$_ip ."→".$_ua."→".$_time."→".$_all_data;
