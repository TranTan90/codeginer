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
}
