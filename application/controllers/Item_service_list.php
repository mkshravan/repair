<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Item_service_list extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Item_service_list_model');
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
    } 

    /*
     * Listing of item_service_list
     */
    function index()
    {
        $data['item_service_list'] = $this->Item_service_list_model->get_all_item_service_list();
        
        $data['_view'] = 'item_service_list/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new item_service_list
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'sl_no' => $this->input->post('sl_no'),
				'hsn_sac' => $this->input->post('hsn_sac'),
				'goods_service_desc' => $this->input->post('goods_service_desc'),
				'qty' => $this->input->post('qty'),
				'unit_price' => $this->input->post('unit_price'),
				'gst_percentage' => $this->input->post('gst_percentage'),
				'gst_amount' => $this->input->post('gst_amount'),
				'total' => $this->input->post('total'),
				'quotation_no' => $this->input->post('quotation_no'),
            );
            
            $item_service_list_id = $this->Item_service_list_model->add_item_service_list($params);
            redirect('item_service_list/index');
        }
        else
        {            
            $data['_view'] = 'item_service_list/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a item_service_list
     */
    function edit($id)
    {   
        // check if the item_service_list exists before trying to edit it
        $data['item_service_list'] = $this->Item_service_list_model->get_item_service_list($id);
        
        if(isset($data['item_service_list']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'sl_no' => $this->input->post('sl_no'),
					'hsn_sac' => $this->input->post('hsn_sac'),
					'goods_service_desc' => $this->input->post('goods_service_desc'),
					'qty' => $this->input->post('qty'),
					'unit_price' => $this->input->post('unit_price'),
					'gst_percentage' => $this->input->post('gst_percentage'),
					'gst_amount' => $this->input->post('gst_amount'),
					'total' => $this->input->post('total'),
					'quotation_no' => $this->input->post('quotation_no'),
                );

                $this->Item_service_list_model->update_item_service_list($id,$params);            
                redirect('item_service_list/index');
            }
            else
            {
                $data['_view'] = 'item_service_list/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The item_service_list you are trying to edit does not exist.');
    } 

    /*
     * Deleting item_service_list
     */
    function remove($id)
    {
        $item_service_list = $this->Item_service_list_model->get_item_service_list($id);

        // check if the item_service_list exists before trying to delete it
        if(isset($item_service_list['id']))
        {
            $this->Item_service_list_model->delete_item_service_list($id);
            redirect('item_service_list/index');
        }
        else
            show_error('The item_service_list you are trying to delete does not exist.');
    }
    
}
