<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Type extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_type');
    } 

    /*
     * Listing of t_type
     */
    function index()
    {
        $data['t_type'] = $this->M_type->get_all_t_type();
        
        $data['_view'] = 'type/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new t_type
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'created_by' => $this->input->post('created_by'),
				'modified_by' => $this->input->post('modified_by'),
				'created_date' => $this->input->post('created_date'),
				'modified_date' => $this->input->post('modified_date'),
            );
            
            $t_type_id = $this->M_type->add_t_type($params);
            redirect('type/index');
        }
        else
        {            
            $data['_view'] = 'type/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a t_type
     */
    function edit($id_type)
    {   
        // check if the t_type exists before trying to edit it
        $data['t_type'] = $this->M_type->get_t_type($id_type);
        
        if(isset($data['t_type']['id_type']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'created_by' => $this->input->post('created_by'),
					'modified_by' => $this->input->post('modified_by'),
					'created_date' => $this->input->post('created_date'),
					'modified_date' => $this->input->post('modified_date'),
                );

                $this->M_type->update_t_type($id_type,$params);            
                redirect('type/index');
            }
            else
            {
                $data['_view'] = 'type/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The t_type you are trying to edit does not exist.');
    } 

    /*
     * Deleting t_type
     */
    function remove($id_type)
    {
        $t_type = $this->M_type->get_t_type($id_type);

        // check if the t_type exists before trying to delete it
        if(isset($t_type['id_type']))
        {
            $this->M_type->delete_t_type($id_type);
            redirect('type/index');
        }
        else
            show_error('The t_type you are trying to delete does not exist.');
    }
    
}