<?php



define('API_KEY_NOT_FOUND', "URL not specified");
define('BAD_URL', "URL not specified");
define('BAD_METHOD', "Method specified is not supported");
define('NOT_COMPATIBLE', "Bee is not compatible with current version of PHP installed");

class BeeError {

    function __construct() {
        
    }

    function kill($code) {
        die($code);
    }
    
}