<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * summary
 */
class Mes extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();    
    }
    public function index()
        {
        
            $data['data']['_list_mes']= $this->db->from('cms_mes')->get()->result_array();          
            $data['template'] ='mes/index';
            $this->load->view('layout/index',isset($data)? $data :null);

        }

    public function cms_vsell_import()
        {   

            $this->load->view('mes/insert-list', isset($data) ? $data : null );

            
        }

    public function cms_save_import()
        {   
              // $data = $this->input->pos('data');
            $data=array('mes_date'=>2021-10-20);


               $this->db->trans_begin();

               $this->db->insert('mes',$data);



            if ($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
            }
            else
            {
                $this->db->trans_commit();   
            }

        }
}
