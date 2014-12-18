<?php

$config = array(
    /**
    * Saved samples jobs are kept in this file, must be writable
     */
    'storage' => dirname(__FILE__) . DIRECTORY_SEPARATOR . 'storage.json',
    /**
     * Version number
     */
    'version' => '1.6.1',
);

if (!empty($_SERVER['beanstalkd_servers'])) {
    $config['servers'] = explode(';', $_SERVER['beanstalkd_servers']);
}
else {
    $config['servers'] = array();
}
