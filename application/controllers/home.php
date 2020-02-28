<?PHP

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('articulos_modelos', 'art');
    }

    //pagina principal
    function index() {
        $datos['articulos'] = $this->art->lista_articulos();
        $datos['Titulo'] = 'Paguina web HUGO';
        $datos['contenido'] = 'index';
        $this->load->view('plantillas/plantilla', $datos);
    }

    //Muestra un articulo por ID
    function detalle_articulo($id_articulo) {
        $id_limpio = $this->security->xss_clean($id_articulo);
        $datos['detalle'] = $this->art->detalle_articulo($id_limpio);
        $datos['Titulo'] = $datos['detalle']->nombre_articulo;
        $datos['contenido'] = 'detalle';
        $this->load->view('plantillas/plantilla', $datos);
    }

    //Muestra un articulo por nombre
//    function  detalle_articulo($nombre_articulo){
//        $this->output->enable_profiler(TRUE);
//        $nombre_limpio= str_replace('-', ' ', $nombre_articulo);
//        $datos['detalle']=$this->art->detalle_articulo($nombre_limpio);
//        $datos['Titulo']=$datos['detalle']->nombre_articulo;
//        $this->load->view('detalle',$datos);
//    }
    //MUESTRA ARTICULO POR URL
//    function  detalle_articulo($url_articulo){
//        $url_limpio= $this->security->xss_clean($url_articulo);
//        $datos['detalle']=$this->art->detalle_articulo($url_limpio);
//        $datos['Titulo']=$datos['detalle']->nombre_articulo;
//        $this->load->view('detalle',$datos);
//    }
    function encriptacion() {
//        $this->load->library('encrypt');
        $datos['Titulo'] = 'Encriptacion con CodeIgniter';
        $datos['contenido'] = 'encriptacion';
        $this->load->view('plantillas/plantilla', $datos);
    }

}
