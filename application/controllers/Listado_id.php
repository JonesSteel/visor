<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listado_id extends CI_Controller {
    
      public function __construct() {
        Parent::__construct();
        $this->load->database();
        $this->load->helper("url");   // este carga el url desiganado en el archivo config
         
    }
//  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	public function index()
	{
		//$this->load->view('f4rt3/index_2');
    //$this->load->view('welcome_message.php');

   /* $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    $info=" usuario,clave ";
    $query = $this->db->query("select " . $info ." from correcion where usuario = " . $usuario . " and clave=" . $clave);
*/
	}
//  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++      




     
//  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++      
       public function buscar(){
            $this->load->model("listado_model");
          // $dato_placa = $this->uri->segment(3);
       
           $dato = $this->input->get('placa',TRUE);
           $dato = trim($dato);
         //$result=   $this->Listado_model->get_listado_placa(trim($dato));
        $info = " id,CVE_RUTA,PLACA,TITULARIDAD,NUMERO_DE_TITULO,FECHA,TITULAR,MARCA,ANNO_MOD,SERIE,MOTOR,OBSERVACIONES,NUM_PV,RUTA_PV,PLACA_PVJ,TITULAR_PV,MARCA_PV,MODELO_PV,JOIN_X "; 
        $query = $this->db->query("select " . $info ." from padron_m where PLACA = " . $dato );
        
        if($query->numrows()>0){
            return $query;
        }else{
            return FALSE;
        }
        
         
         
         
         $this->load->view('f4rt3/index_2'); 
       }
//  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++    
       
        public function seleccionpdf($id= null){
           $this->load->model("listado_model");
           $data = array();
           if($id == null){
               echo "Falta ID en listado";
               return;
           }
           $data['seleccion'] = $this->listado_model->get_listado_id($id);
           if (empty($data['seleccion'])){
               echo 'ID INVALIDO';
           }else{
             
             //----------------------------------------------------------
                $this->load->view('vista_listado/vista_listado_complemento_pdf',$data);
                // Get output html
                $html = $this->output->get_output();
        
                // Load pdf library
                $this->load->library('pdf');

                // Load HTML content
                $this->dompdf->loadHtml($html);

                // (Optional) Setup the paper size and orientation //landscape
                $this->dompdf->setPaper('Letter', 'portrait');

                // Render the HTML as PDF
                $this->dompdf->render();

                // Output the generated PDF (1 = download and 0 = preview)
                $this->dompdf->stream("correspondencia.pdf", array("Attachment"=>0)); 
             
             
              //-----------------------------------------------------------
             
             
             
             
           }
       }
       
 //  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++        
       
   
       
        
}
