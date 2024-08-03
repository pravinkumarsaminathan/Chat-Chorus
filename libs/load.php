<?php

include_once "_includes/Database.Class.php";

function load_templates($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/Chat-Chorus/_templates/$name.php";
}

global $__site_config;
$__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../mysql_server.json');

function get_config($key, $default = NULL)
{
    global $__site_config;
    $array = json_decode($__site_config,true);
    if (isset($array[$key]))
        return $array[$key];
    else
        return $default;

}