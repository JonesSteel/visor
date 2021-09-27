<?php

class Htmltopdf_model extends CI_Model{
    
    function fetch_single_details($customer_id ){
            
        $this->db->where('id',$customer_id);
        $data->db->get('concentrado');
        $output= '<table width="100%" cellspacing="5" cellpadding="5" >';
          foreach ($data->result() as $row){
             $output .= '<tr> 
                     <td style="width: 30%;" ><center><b>DGRPT/'.$row->id.'/2020 </td>
                     </tr>';
             $output .='</table>';
             return $output;
            
           }
        
        
        
        }
    
}
