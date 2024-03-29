<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Inventory extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Inventory_model');
        $this->load->library('session');
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
    } 

    /*
     * Listing of invoice
     */
    function index()
    {
        if($this->isUserLoggedIn){ 

        $data['inventory'] = $this->Inventory_model->get_all_inventory();
		$data['count_all_rate'] = $this->Inventory_model->count_all_rate();
        $data['count_all_amount'] = $this->Inventory_model->count_all_amount();
        
        $data['_view'] = 'inventory/index';
        $this->load->view('layouts/main',$data);
        }else{
            redirect('admin/'); 
        }
        
    }

    /*
     * Adding a new invoice
     */
    function add()
    {   
        if($this->isUserLoggedIn){ 
            if(isset($_POST) && count($_POST) > 0)     
        {   
            //$username="admin";
            $username = $this->session->userdata('username');
            $params = array(
                'part_description' => $this->input->post('part_description'),
				'dealer_name' => $this->input->post('dealer_name'),
				'date' => $this->input->post('date'),
                'rate' => $this->input->post('rate'),
                'amount' => $this->input->post('amount'),
                'payment_status' => $this->input->post('payment_status'),
                'payment_mode' => $this->input->post('payment_mode')
            );
            
            $invoice_id = $this->Inventory_model->add_invoice($params);

            if($invoice_id>0){
                    $this->session->set_flashdata('response',"Inventory Created Successfully");
                redirect('admin/inventory/index'); 
                
            }
            else{
                $this->session->set_flashdata('response',"Error: Inventory Not Created");
                redirect('admin/inventory/index'); 
            }
              
        }
        else
        {       
            $data['_view'] = 'inventory/add';
            $this->load->view('layouts/main',$data);
        }
        }else{
            redirect('admin/'); 
        }
        
    }  

    /*
     * Editing a invoice
     */
    function edit($id)
    {   
        if($this->isUserLoggedIn){ 
            $data['inventory'] = $this->Inventory_model->get_inventory($id);
        
        if(isset($data['inventory']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'payment_status' => $this->input->post('payment_status'),
					'amount' => $this->input->post('amount'),
					'payment_mode' => $this->input->post('payment_mode'),
                );

                $this->Inventory_model->update_inventory($id,$params);  
                $this->session->set_flashdata('response',"Inventory Updated Successfully");          
                redirect('admin/inventory/index');
            }
            else
            {
                $data['_view'] = 'inventory/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The invoice you are trying to edit does not exist.');
        }else{
            redirect('admin/'); 
        }

        // check if the invoice exists before trying to edit it
        
    } 

    /*
     * Deleting invoice
     */
    /*function remove($id)
    {
        if($this->isUserLoggedIn){ 

        $invoice = $this->Invoice_model->get_invoice($id);

        // check if the invoice exists before trying to delete it
        if(isset($invoice['id']))
        {
            $this->Invoice_model->delete_invoice($id);
            redirect('invoice/index');
        }
        else
            show_error('The invoice you are trying to delete does not exist.');
        }else{
            redirect('login/index'); 
        }
        
    }*/
    
}
