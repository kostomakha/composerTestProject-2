<?php
/**
 * Created by PhpStorm.
 * User: roach
 * Date: 1/15/16
 * Time: 1:17 PM
 */
use ForkMyspace\Test;
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';



$foo = new Test();
$foo->logger();