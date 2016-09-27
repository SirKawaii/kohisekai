<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitios extends CI_Controller{
		public function view ($page = 'Pagina de Inicio'){

			$data['title'] = ucfirst($page); // Capitalize the first letter

			$this->load->view('tema/header', $data);
			$this->load->view('tema/nav', $data);
      $this->load->view('estaticas/bienvenido');
			$this->load->view('tema/footer', $data);

		}
}



?>
