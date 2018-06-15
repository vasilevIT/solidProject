<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:13
 */

spl_autoload_register(function ($name) {
    $name = str_replace("\\", DIRECTORY_SEPARATOR, $name);
    $name .= ".php";
    if (file_exists(__DIR__ . "/" . $name)) {
        include_once(__DIR__ . "/" . $name);
    }
});