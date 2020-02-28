<?PHP

/**
 * 
 */
class Emails extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	function index() {
        $datos['Titulo'] = 'Envio de Emails';
        $datos['contenido'] = 'emails';
        $this->load->view('plantillas/plantilla', $datos);
    }

    function enviar(){
    	$this->load->library('email');
    	$dequien=$this->input->post('dequien');
    	$destinatario=$this->input->post('destinatario');
    	$asunto=$this->input->post('asunto');
    	$mensaje=$this->input->post('mensaje');

    	$this->email->from($dequien,'Usuario');
    	$this->email->to($destinatario);
    	$this->email->subject($asunto);
    	$this->email->message($mensaje);
    	$this->email->sen();
    	redirect('emails');
    }

}