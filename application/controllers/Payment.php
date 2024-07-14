<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Razorpay\Api\Api;


class Payment extends CI_Controller {
	public function index() {
		$this->load->view('Payment');
	}

	/**
	 * This function creates order and loads the payment methods
	 */
	public function pay($id) {
		
		$this->load->model('Prebuilt_model');
        $pc = $this->Prebuilt_model->get_pc($id);

	

		$api = new Api(RAZOR_KEY, RAZOR_SECRET_KEY);
		/**
		 * You can calculate payment amount as per your logic
		 * Always set the amount from backend for security reasons
		 */
		$_SESSION['payable_amount'] = $pc[0]["amount"];

		
		$razorpayOrder = $api->order->create(array(
			'receipt' => '123456', 
			'amount' => $_SESSION['payable_amount'] * 100, // 2000 rupees in paise, 
			'currency' => 'INR', 
			'notes'=> array('key1'=> 'value3','key2'=> 'value2'),
			'payment_capture' => 1 // auto capture
		));



		$amount = $razorpayOrder['amount'];
		$razorpayOrderId = $razorpayOrder['id'];
		$pcname = $pc[0]["name"];
		
		$_SESSION['razorpay_order_id'] = $razorpayOrderId;
		$this->session->set_flashdata('razorpay_order_id', $razorpayOrderId);

		$data = $this->prepareData($amount,$razorpayOrderId, $pcname);

		$this->load->view('payment',array('data' => $data));
	}

	/**
	 * This function verifies the payment,after successful payment
	 */
	public function verify() {
		$success = true;
		$error = "payment_failed";
		if (empty($_POST['razorpay_payment_id']) === false) {
			$api = new Api(RAZOR_KEY, RAZOR_SECRET_KEY);
		try {
				$attributes = array(
					// 'razorpay_order_id' => $_SESSION['razorpay_order_id'],
					'razorpay_order_id' => $this->session->userdata('razorpay_order_id'),
					'razorpay_payment_id' => $_POST['razorpay_payment_id'],
					'razorpay_signature' => $_POST['razorpay_signature']
				);
				$api->utility->verifyPaymentSignature($attributes);
			} catch(SignatureVerificationError $e) {
				$success = false;
				$error = 'Razorpay_Error : ' . $e->getMessage();
			}
		}
		if ($success === true) {
			/**
			 * Call this function from where ever you want
			 * to save save data before of after the payment
			 */
			$this->setRegistrationData();

			redirect(base_url().'payment-success');
		}
		else {
			redirect(base_url().'payment-failed');
		}
	}

	/**
	 * This function preprares payment parameters
	 * @param $amount
	 * @param $razorpayOrderId
	 * @return array
	 */
	public function prepareData($amount,$razorpayOrderId, $pcname) {
		$data = array(
			"key" => RAZOR_KEY,
			"amount" => $amount,
			"name" => "PCFIXPRO",
			"description" => $pcname,
			"image" => base_url()."resources/frontend/images/favourite_icon_2.png",
			"prefill" => array(
				"name"  => ucwords(strtolower($this->input->post('name'))),
				"email"  => strtolower($this->input->post('email')),
				"contact" => $this->input->post('contact'),
			),
			"notes"  => array(
				"address"  => "India",
				"merchant_order_id" => rand(),
			),
			"theme"  => array(
				"color"  => "#D42222"
			),
			"order_id" => $razorpayOrderId,
		);
		return $data;
	}

	/**
	 * This function saves your form data to session,
	 * After successfull payment you can save it to database
	 */
	public function setRegistrationData() {

		$registrationData = array(
			'order_id' => $_SESSION['razorpay_order_id'],
			'name' => ucwords(strtolower($this->input->post('name'))),
			'email' => strtolower($this->input->post('email')),
			'contact' => $this->input->post('contact'),
			'amount' => $_SESSION['payable_amount'],
		);
		// save this to database

	}	
	
}
