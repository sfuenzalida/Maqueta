<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Database extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template');
       // $this->load->model('personas_model'); //este llamado sería para todos los métodos de la clase
    }
    
	public function index()
	{
		//$this->load->model('personas_model'); acá sería un llamado de tipo local sólo para el método
//        $datos=$this->personas_model->getPersonas();
  //      $this->layout->view('index',compact("datos"));
        $this->layout->view('index');
	}
/*	public function usando_result_array()
	{
		//$this->load->model('personas_model'); acá sería un llamado de tipo local sólo para el método
        $datos=$this->personas_model->getPersonas2();
        $this->layout->view('usando_result_array',compact("datos"));
	}
    public function usando_where($id=null)
	{
		//$this->load->model('personas_model'); acá sería un llamado de tipo local sólo para el método
        $datos=$this->personas_model->getPersonasPorId($id);
        $this->layout->view('usando_where',compact("datos"));
	}*/
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
