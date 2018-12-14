<?php
class Cart extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}
	public function index()
	{

    }
     public function add(){

     	$this->load->model('product_model');
        $data = array(
	        'id'      => $this->input->post('item_number'),
	        'qty'     => $this->input->post('qty'),
	        'price'   => $this->input->post('price'),
	        'name'    => $this->input->post('title')
	        
         );
         $this->cart->insert($data);
         redirect ('product');
     }
     /*
      *update cart
     */
     public function update($in_cart=null){

     $data=$this->input->post();
     $this->cart->update($data);
     redirect('cart','refresh');


     }
	}


?>