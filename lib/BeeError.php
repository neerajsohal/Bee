<?php

namespace Bee;

\define('API_KEY_NOT_FOUND', "URL not specified");
\define('BAD_URL', "URL not specified");

class BeeError {

    function __construct() {
        
    }

    function kill($code) {
        die(BAD_URL);
    }
    
}