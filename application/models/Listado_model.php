<?php

class Listado_Model extends CI_Model
{

     public function get_listado()
     {
         $campos="id,f_recepcion,procedencia,concepto,oficio,ge_ma,asunto,signa,prioridad,tipo ";
         $query = $this->db->query("select" . $campos . "from concentrado" );
          //return $this->db->get("concentrado");
          return $query->result();
     }

     
     public function get_listado_placa($dato)
     {
         
$info  = " id,CVE_RUTA,PLACA,TITULARIDAD,NUMERO_DE_TIT,FECHA,TITULAR,MARCA,ANNO_MOD,SERIE,MOTOR,OBSERVAC,NUM_PV,RUTA_PV,PLACA_PVJ,TITULAR_PV,MARCA_PV,MODELO_PV,JOIN_X,";
$info2 = " PADRON_PR,C_REGU_PR,RUTA_PR,NPLACA_PR,ESTATUS_PR,TITULAR_PR,MARCA_REG_PR,MODELO_PR,RAMAL_REG_PR,";
$info3 = " NCORREDOR_C,CORREDOR_C,ESTATUS_C,COR_CTRL_C,COR_PNENT_C, ";
$info4 = " RUTA_CHA_CH,SERIE_CH, MOTOR_CH,CONCECIONARIO_CH,MODELO_CH,FECHA_PRES_CH,HORA_PRES_CH,EMPRESA_CH ";
      
            $this->db->select($info . $info2 . $info3 . $info4);
            $this->db->from('padron_m');
            $this->db->where('PLACA', $dato);
            $consulta = $this->db->get();
           
            if($consulta->num_rows()>0){
                return $consulta;
            }else{
                return FALSE;
            }
           
            //$resultado = $consulta->row();
          
           // return $consulta;
          
     }
     
     public function obtengo_ultimo_id(){
         
         $query = $this->db->query("select max(id)id FROM concentrado ");
           return $query->result();
         
     }
     
     public function cargo_subdirecciones(){
         $query = $this->db->query("select * from subdirecciones");
         return $query->result();
         
     }
     
     
}