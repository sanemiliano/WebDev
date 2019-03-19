<? if (! defined('BASEPATH')) EXIT('No Access');

class WebProgramming_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function crearCliente(){
        $this->db->insert('Clientes2',array('nombre'=>$data['nombre'],'edad'=>$data['edad']));
    }
}