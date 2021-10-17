<?php
require "vendor/autoload.php";

use CowSay\Cow;

$vacheKiri = new Cow('Hello, Farm!');

$output = $vacheKiri->say();
echo $output;

$cowKiller = new Cow('Hello, World!');
$cowKiller->setEyes('XX')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $cowKiller;