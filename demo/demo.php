<?php
include_once "../lib/Bee.php";


$api_key = 'YOUR_API_KEY_HERE';

$bee = new Bee($api_key);
//$bee->set_format('json');
$bee->set_method('comments/connect/stats');
$bee->set_url("http://www.engadget.com/2011/02/15/iphone-5-to-feature-a-bigger-4-inch-display/");

print_r($bee->get_result());

