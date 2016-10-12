<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Watchdog extends CI_Controller{

    public $pagina, $nombreSitio, $variables;

    function __construct(){
        parent::__construct();
        //inicializacion de Atributos Globales
        $this->nombreSitio = 'Kohisekai';
        $this->pagina = 'Perrito miron';

        $this->variables['nombreSitio'] = $this->nombreSitio;
        $this->variables['titulo'] = ucfirst($this->pagina); // Capitalize the first letter

        //FinAtributos


    }

    function index (){



        $this->load->view('tema/header', $this->variables);

        //Inicia Ping
        $host = 'hostalalmendral.dyndns.org';
        $port = 80;
        $waitTimeoutInSeconds = 1;
        if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){
           $resultado = "Ping Exitoso";
        } else {
           $resultado = "La conexion a fallado.";
        }
        fclose($fp);
        //Fin Ping
        $this->variables['host']= $host;
        $this->variables['port'] = $port;
        $this->variables['tiempo'] = $waitTimeoutInSeconds;

        $this->variables['resultado'] = $resultado;
        $this->load->view('watchdog/watchdog.php', $this->variables);


        $this->load->view('tema/footer', $this->variables);


    }
}



?>
