<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Invoice extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Invoice_model');
        $this->load->library('session');
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
    } 

    /*
     * Listing of invoice
     */
    function index()
    {
        if($this->isUserLoggedIn){ 

        $data['invoice'] = $this->Invoice_model->get_all_invoice();
        
        $data['_view'] = 'invoice/index';
        $this->load->view('layouts/main',$data);
        }else{
            redirect('admin/'); 
        }
        
    }

    function printInvoice($quotation_no)
    {
        if($this->isUserLoggedIn){ 

        $data['quotation'] = $this->Invoice_model->get_quotation_print($quotation_no);
        $data['item'] = $this->Invoice_model->get_item_print($quotation_no);
        $data['invoice'] = $this->Invoice_model->get_invoice_detail($quotation_no);
        $data['_view'] = 'invoice/printInvoice';
        $this->load->view('layouts/mainprint',$data);
        }else{
            redirect('admin/'); 
        }
        
    }

    function get_quotation()
    {
        if($this->isUserLoggedIn){ 

        if(isset($_POST) && count($_POST) > 0)     
        {
            $quotation_no = $this->input->post('quotation_no');
            $data['quotation'] = $this->Invoice_model->get_quotation($quotation_no);
            $data['item'] = $this->Invoice_model->get_items($quotation_no);
            $inv_no['invoice_no'] = $this->Invoice_model->get_last_invoice_no();
            if($inv_no['invoice_no']){
                 $data['invoice'][]=(object)array('invoice_no'=>$inv_no['invoice_no']);
            }
            else{
                $data['invoice'][]=(object)array('invoice_no'=>'LSCINV_RAN0');
            }
            
            echo json_encode($data);
        }

            else{
               $data['_view'] = 'invoice/add';
                $this->load->view('layouts/main',$data); 
            }
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
				
				$last_trans_no['transaction_no'] = $this->Invoice_model->get_last_trans_no();

                if($last_trans_no['transaction_no']){
                    $trans_no=$last_trans_no['transaction_no'];
                    
                    preg_match_all('/([0-9]+)/',$trans_no,$matches);
                    $num=(int)implode('',$matches[1]);
                    $num1=$num+1;
                    $new_trans_no='LSC_TRAN'.$num1;
                }
                else{
                    $new_trans_no='LSC_TRAN1';
                }
            $params = array(
                'invoice_no' => $this->input->post('invoice_no'),
				'invoice_date' => $this->input->post('invoice_date'),
				'quotation_no' => $this->input->post('quotation_no'),
                'created_by' => $username,
                'total_payment' => $this->input->post('total_payment'),
                'any_advance' => $this->input->post('any_advance'),
				'transaction_no'=>$new_trans_no
            );
            
            $invoice_id = $this->Invoice_model->add_invoice($params);

            if($invoice_id>0){
                
                $flag=array('invoice_generated'=>'yes');
                $update_in=$this->Invoice_model->update_invoice_flag($this->input->post('quotation_no'),$flag);
                if($update_in>0){
                    $this->session->set_flashdata('response',"Invoice Created Successfully");
                echo '1';
                }

                else{
                    $this->session->set_flashdata('response',"Error: Invoice Not Created");
                echo '0';
                }
                
            }
            else{
                $this->session->set_flashdata('response',"Error: Invoice Not Created");
                echo '0';
            }
              
        }
        else
        {    
            $data['quotation_no'] =$this->Invoice_model->get_quotation_no();     
            $data['_view'] = 'invoice/add';
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
            $data['invoice'] = $this->Invoice_model->get_invoice($id);
        
        if(isset($data['invoice']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'invoice_date' => $this->input->post('invoice_date'),
					'invoice_no' => $this->input->post('invoice_no'),
					'quotation_no' => $this->input->post('quotation_no'),
                );

                $this->Invoice_model->update_invoice($id,$params);            
                redirect('admin/invoice/index');
            }
            else
            {
                $data['_view'] = 'invoice/edit';
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
    function remove($id)
    {
        if($this->isUserLoggedIn){ 

        $invoice = $this->Invoice_model->get_invoice($id);

        // check if the invoice exists before trying to delete it
        if(isset($invoice['id']))
        {
            $this->Invoice_model->delete_invoice($id);
            redirect('admin/invoice/index');
        }
        else
            show_error('The invoice you are trying to delete does not exist.');
        }else{
            redirect('admin/'); 
        }
        
    }
    
}
