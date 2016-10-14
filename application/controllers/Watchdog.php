<?php
/*
    Perrito miron: Created By Mit
    Watchdog, el ch llama a las tablas.
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Watchdog extends CI_Controller{

    public $pagina, $nombreSitio, $variables;

    function __construct(){
        parent::__construct();
        $this->load->helper('watchdog/ping_helper');
        //inicializacion de Atributos Globales
        $this->nombreSitio = 'Kohisekai';
        $this->pagina = 'Perrito miron';

        $this->variables['nombreSitio'] = $this->nombreSitio;
        $this->variables['titulo'] = ucfirst($this->pagina); // Capitalize the first letter

        //FinAtributos


    }

    function index (){

        $this->load->view('tema/header', $this->variables);

        //Lista de Servidores
        $lista_servidores = [
            ['host' => "hostalalmendral.dyndns.org",
             'puerto' => "80"],
            //Siguiente
            ['host' => "nicolcasa.myq-see.com",
             'puerto' => "80"]
        ];

        //tiempo de espera
        $timeout = 2;
        //creacion de tabla :
        $this->load->view('watchdog/wat');
        foreach($lista_servidores as $servidor){
            //llamada al ping
            @$up = do_ping($servidor['host'],$servidor['puerto'],$timeout);
            if($up){$resultado = "<td class='green-text'>Online</td>";}
            else{$resultado = "<td class='red-text'>Offline</td>";}

            $this->variables['host'] = $servidor['host'];
            $this->variables['puerto'] = $servidor['puerto'];
            $this->variables['estado'] = $resultado;
            $this->load->view('watchdog/ch', $this->variables);
        }
        $this->load->view('watchdog/dog');




        $this->load->view('tema/footer', $this->variables);


    }


}



?>
