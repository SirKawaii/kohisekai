<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitios extends CI_Controller{

        function __construct(){
        parent::__construct();
        //inicializacion de Atributos Globales
        $this->nombreSitio = 'Masticapp';
        $this->pagina = 'Mapa';

        $this->variables['nombreSitio'] = $this->nombreSitio;
        $this->variables['titulo'] = ucfirst($this->pagina); // Capitalize the first letter

        //FinAtributos


    }

		public function view ($page = 'Kohisekai'){

			$data['title'] = ucfirst($page); // Capitalize the first letter

			$this->load->view('tema/header', $this->variables);
            $this->load->view('estaticas/bienvenido');
			$this->load->view('tema/footer', $this->variables);

		}
}



?>
