<?php

class Articulos_modelos extends CI_Model{
    public function __contruct(){
        parent:: __construct();
    }
    
    
    //Genera una lista de los articulos
    function lista_articulos(){
        $this->db->order_by('id_articulo','desc');
        $consulta=$this->db->get('artiulos');
        return $consulta->result();
    }
    //muesra el detalle de un articulo por id 
    function detalle_articulo($id_articulo){
        $this->db->where('id_articulo',$id_articulo);
        $consulta=$this->db->get('artiulos');
        return $consulta->row();
    }
    
    //Muestra el detalle de un articulo por nombre
//    function detalle_articulo($nombre_articulo){
//        $this->db->where('nombre_articulo',$nombre_articulo);
//        $consulta=$this->db->get('artiulos');
//        return $consulta->row;
//    }
    
    //Muestra detalle por URL
//    function detalle_articulo($url_articulo){
//        $this->db->where('url_articulo',$url_articulo);
//        $consulta=$this->db->get('artiulos');
//        return $consulta->row;
//    }
}

