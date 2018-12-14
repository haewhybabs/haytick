<?php
class Haytick extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
  $this->load->model('Haytick_model');
  $this->load->library('pagination');
}
	public function index($page=false)
	{
    /*

         *if logged in ,return to index page;
         

    */
    
      $config=array();
      $config["base_url"]='http://localhost:8666/Haytick/Haytick/index/';
      $total_row=$this->Haytick_model->record_count();
      $config["total_rows"]=$total_row;
      $config["per_page"]=6;
      $config['use_page_numbers']=TRUE;
      $config['num_links']=$total_row;
      $config['cur_tag_open']='&nbsp;<a class="current">';
      $config['cur_tag_close']='</a>';
      $config['next_link']='Next';
      $config['prev_link']='Previous';
      $this->pagination->initialize($config);
      if($this->uri->segment(3)){
         $page=($this->uri->segment(3));
      }
      else{
        $page=1;
      }
      $data["results"]=$this->Haytick_model->get_products($config["per_page"],$page);
      $data['random']=$this->Haytick_model->get_random_products();
      $str_links=$this->pagination->create_links();
      $data["links"]=explode('&nbsp;',$str_links);
      $this->load->view("Haytick",$data);


	}

  public function detail($id)
  {

   
    $this->load->model('Haytick_model');
     $data['random']=$this->Haytick_model->get_random_products();
    $data['product']=$this->Haytick_model->get_products_detail($id);
    $this->load->view('detail',$data);


  }
   
   
}
?> 