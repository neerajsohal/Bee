<?php
namespace Bee;

include "BeeError.php";

class Bee {
    private $api_key;
    private $debug;
    private $format;
    private $base_url;
    private $BeeError;

    function __construct($api_key = null, $format = 'json', $debug = null) {

        $this->BeeError= new \Bee\BeeError;

        if(\is_null($api_key)) {
            $this->BeeError->kill(API_KEY_NOT_FOUND);
        } else $this->api_key = $api_key;

        if(\is_null($debug)) {
            $this->debug = true;
        } else $this->debug = false;
        
        $this->format = $format;
        $this->base_url = 'http://api.backtype.com/';
    }

}
