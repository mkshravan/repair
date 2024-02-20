<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Report extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Quotation_model');
        $this->load->model('Invoice_model');
        $this->load->library('session');
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
    } 

    /*
     * Listing of quotation
     */
    function index()
    {
        if($this->isUserLoggedIn){ 

        $data['quotation'] = $this->Quotation_model->get_all_quotation();
        
        $data['_view'] = 'report/quotation';
        $this->load->view('layouts/main',$data);
        }else{
            redirect('admin/login/index'); 
        }
        
    }
    function quotation()
    {
        if($this->isUserLoggedIn){ 

        $data['quotation'] = $this->Quotation_model->get_all_quotation();
        
        $data['_view'] = 'report/quotation';
        $this->load->view('layouts/main',$data);
        }else{
            redirect('admin/login/index'); 
        }
        
    }
    function date_to_date_quotation()
    {
        if($this->isUserLoggedIn){ 

        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'from_date' => $this->input->post('from_date'),
				'to_date' => $this->input->post('to_date'),
            );
            
            $data['date_quotation'] = $this->Invoice_model->get_quotation_from_date($params);
            $data['_view'] = 'report/date_to_date_quotation';
            $this->load->view('layouts/main',$data);
            //print_r($data);
            //redirect('invoice/index');
        }
        //$data['quotation'] = $this->Quotation_model->get_all_quotation();
        else{
            $data['date_quotation']=Array();
            $data['_view'] = 'report/date_to_date_quotation';
            $this->load->view('layouts/main',$data);
        }
        }else{
            redirect('admin/login/index'); 
        }
        
    }
    function tax_invoice()
    {
        if($this->isUserLoggedIn){ 

        $data['tax_invoice'] = $this->Invoice_model->get_all_invoice();
        
        $data['_view'] = 'report/tax_invoice';
        $this->load->view('layouts/main',$data);
        }else{
            redirect('admin/login/index'); 
        }
        
    }
    function date_to_date_tax_invoice()
    {
        if($this->isUserLoggedIn){ 

        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'from_date' => $this->input->post('from_date'),
				'to_date' => $this->input->post('to_date'),
            );
            
            $data['date_invoice'] = $this->Invoice_model->get_invoice_from_date($params);
            $data['_view'] = 'report/date_to_date_tax_invoice';
            $this->load->view('layouts/main',$data);
            //print_r($data);
            //redirect('invoice/index');
        }
        //$data['quotation'] = $this->Quotation_model->get_all_quotation();
        else{
            $data['date_invoice']=Array();
            $data['_view'] = 'report/date_to_date_tax_invoice';
            $this->load->view('layouts/main',$data);
        }
        }else{
            redirect('admin/login/index'); 
        }
        
    }
    function tax_invoice_due()
    {
        if($this->isUserLoggedIn){ 

        $data['tax_invoice_due'] = $this->Invoice_model->get_all_due_invoice();
        
        $data['_view'] = 'report/tax_invoice_due';
        $this->load->view('layouts/main',$data);
        }else{
            redirect('admin/login/index'); 
        }
        
    }
    function total_received_amount()
    {
        if($this->isUserLoggedIn){ 

        $data['quotation'] = $this->Quotation_model->total_received_amount();
        
        $data['_view'] = 'report/total_received_amount';
        $this->load->view('layouts/main',$data);
        }else{
            redirect('admin/login/index'); 
        }
        
    }
    function date_to_date_received_amount()
    {
        if($this->isUserLoggedIn){ 

        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'from_date' => $this->input->post('from_date'),
				'to_date' => $this->input->post('to_date'),
            );
            
            $data['date_quotation'] = $this->Quotation_model->date_to_date_total_received_amount($params);
            $data['_view'] = 'report/date_to_date_received_amount';
            $this->load->view('layouts/main',$data);
            //print_r($data);
            //redirect('invoice/index');
        }
        //$data['quotation'] = $this->Quotation_model->get_all_quotation();
        else{
            $data['date_quotation']=Array();
            $data['_view'] = 'report/date_to_date_received_amount';
            $this->load->view('layouts/main',$data);
        }

        // $data['quotation'] = $this->Quotation_model->date_to_date_total_received_amount();
        // $data['_view'] = 'report/date_to_date_received_amount';
        // $this->load->view('layouts/main',$data);
        }else{
            redirect('admin/login/index'); 
        }
        
    }

    function cancel_quotation()
    {
        if($this->isUserLoggedIn){ 

        $data['quotation'] = $this->Quotation_model->get_cancel_quotation();
        
        $data['_view'] = 'report/cancel_quotation';
        $this->load->view('layouts/main',$data);
        }else{
            redirect('admin/login/index'); 
        }
        
    }

    function quotationApprovalList()
    {
        if($this->isUserLoggedIn){ 

        $data['quotation'] = $this->Quotation_model->get_all_quotation();
        
        $data['_view'] = 'quotation/approvalList';
        $this->load->view('layouts/main',$data);
        }else{
            redirect('admin/login/index'); 
        }
        
    }

    
}