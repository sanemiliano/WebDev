<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//You have to call the controller from this link and then the controller loads the view.
// http://localhost/Codeigniter/index.php/ControllerExample
class ControllerExample extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('myHelper');
        $this->load->helper('ConvertFiat');
    }
    function index(){        
        $this->load->view('common/header');
        $this->load->view('view1Class2vistas');     
    }

    function recibirDatos(){
        $data = array(
            'nombre'=>$this->input->post('nombre'),
            'edad' =>$this->input->post('edad')
        );
        $this->WebProgramming_model->crearCliente($data);
    }
}   
?>