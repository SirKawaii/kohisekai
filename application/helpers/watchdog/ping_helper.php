<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
* Ping en Codeigniter
* Author: Mit
*/

function do_ping($host,$port,$timeout){


    if(! $fsock = fsockopen($host, $port, $errno, $errstr, $timeout)){
        return FALSE;
    }
    else{
       return TRUE;
    }

}
?>
