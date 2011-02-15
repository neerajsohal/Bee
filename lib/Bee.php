<?php

include "BeeError.php";

class Bee {
    private $api_key;
    private $debug;
    private $format;
    private $base_uri;
    private $BeeError;
    private $method;
    private $url;

    function __construct($api_key = null, $format = 'json') {

        $this->BeeError= new BeeError();

        if(!$this->is_compatible()) {
            $this->BeeError->kill(NOT_COMPATIBLE);
        }

        if(is_null($api_key)) {
            $this->BeeError->kill(API_KEY_NOT_FOUND);
        } else $this->api_key = $api_key;
        
        $this->format = $format;
        $this->base_uri = 'http://api.backtype.com/';

    }


    function set_url($url = null) {
        if(!is_null($url)) {
            $this->url = $url;
            return true;
        } else return false;
    }

    function set_method($method = null) {
        
        switch($method) {
            case 'comments/connect/stats' : $this->method = $method;
                break;
            case 'comments/search' : $this->method = $method;
                break;
            default: $this->BeeError->kill(BAD_METHOD);
                break;
        }
    }

    function set_format($format = 'json') {
        if($format == 'json' || 'xml') {
            $this->format = $format;
            return true;
        } else return false;
    }

    function set_debug(bool $status) {
        if($status) {
            $this->debug = true;
        } else $this->debug = false;
        
    }

    function get_result() {
        $this->prep_uri();
        return file_get_contents($this->base_uri);
    }

    private function prep_uri() {
        $this->base_uri .= $this->method . '.'.$this->format.'?&key='.$this->api_key.'&url='.$this->url;
        return true;
    }

    private function is_compatible() {
        
        if(PHP_MAJOR_VERSION >= 5) {
            return true;
        } else return false;

        if(function_exists('curl_init')) {
            return true;
        } else return false;

        
    }

}
