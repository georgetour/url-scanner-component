<?php
$directory = require(dirname(__DIR__) . '/vendor/autoload.php');

// Fetch URLs from CSV
$urls = file('urls.csv', FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);

// Find invalid urls
$scanner = new GeorgeTour\Url\Scanner($urls);
$invalidUrls = $scanner->getInvalidUrls();

// // Do something with invalid urls
// array_map(function($invalidUrl){
//     echo $invalidUrl['url'] . PHP_EOL;
// }, $invalidUrls);

foreach ($invalidUrls as $invalidUrl) {
    echo $invalidUrl['url'] .PHP_EOL;
}