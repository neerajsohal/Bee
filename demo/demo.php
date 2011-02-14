<?php
include_once "../lib/Bee.php";

use Bee\Bee;
$api_key = 'e1531af80a245cd95801';

$bee = new Bee($api_key);

$bee->get_comments();

