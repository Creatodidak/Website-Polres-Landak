<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class laphardivhumas extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mlaphardivhumas');
    } 

    /*
     * Listing of laphardivhumas
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('laphardivhumas/index?');
        $config['total_rows'] = $this->Mlaphardivhumas->get_all_laphardivhumas_count();
        $this->pagination->initialize($config);

        $data['laphardivhumas'] = $this->Mlaphardivhumas->get_all_laphardivhumas($params);
        
        $data['_view'] = 'laphardivhumas/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new laphardivhumas
     */
    function add()
    {   
        $this->load->library('form_validation');
        $laporan = $this->input->post('laphardivhumas');

		$cek = $this->Mlaphardivhumas->get_all_laphardivhumas_count($laporan);
		
		if($cek < 1)     
        {   
            $params = array(
				'time' => date('Y-m-d H:i:s'),
				'satuan' => $this->session->userdata('satuan'),
				'laphardivhumas' => $this->input->post('laphardivhumas'),
            );
            
            $this->Mlaphardivhumas->add_laphardivhumas($params);

            $this->session->set_flashdata('msg','simpan');
            redirect(base_url('admin/inputlaphardivhumas'));
        }
        else
        {            
            $this->session->set_flashdata('msg','gagal');
            redirect(base_url('admin/inputlaphardivhumas'));
        }
    }  

    /*
     * Editing a laphardivhumas
     */
    function edit($id)
    {   
        // check if the laphardivhumas exists before trying to edit it
        $data['laphardivhumas'] = $this->Mlaphardivhumas->get_laphardivhumas($id);
        
        if(isset($data['laphardivhumas']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('laphardivhumas','laphardivhumas','max_length[1000]|min_length[10]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'time' => $this->input->post('time'),
					'satuan' => $this->input->post('satuan'),
					'laphardivhumas' => $this->input->post('laphardivhumas'),
                );

                $this->Mlaphardivhumas->update_laphardivhumas($id,$params);            
                redirect('laphardivhumas/index');
            }
            else
            {
                $data['_view'] = 'laphardivhumas/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The laphardivhumas you are trying to edit does not exist.');
    } 

    /*
     * Deleting laphardivhumas
     */
    function remove($id)
    {
        $laphardivhumas = $this->Mlaphardivhumas->get_laphardivhumas($id);

        // check if the laphardivhumas exists before trying to delete it
        if(isset($laphardivhumas['id']))
        {
            $this->Mlaphardivhumas->delete_laphardivhumas($id);
            redirect('laphardivhumas/index');
        }
        else
            show_error('The laphardivhumas you are trying to delete does not exist.');
    }
    
}
