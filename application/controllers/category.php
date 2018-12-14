<?php
class Category extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
	 $this->load->model('Haytick_model');
  $this->load->library('pagination');
}
	public function index()
	{
    $this->load->view('category');
      }

      public function android(){
      	  $this->load->model('Haytick_model');
	      $config=array();
	      $config["base_url"]='http://localhost:8666/Haytick/category/android';
	      $total_row=$this->Haytick_model->record_countandroid();
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
          
	      $data["results"]=$this->Haytick_model->get_androidphones($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
          $data['random']=$this->Haytick_model->get_random_products();
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }

       public function otherphones(){
      	$this->load->model('Haytick_model');
	      $config=array();
	      $config["base_url"]='http://localhost:8666/Haytick/category/android';
	      $total_row=$this->Haytick_model->record_count_otherphones();
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
          
	      $data["results"]=$this->Haytick_model->get_otherphones($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();

	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);


      }
       public function Hplaptops(){
      	  $this->load->model('Haytick_model');
	      $config=array();
	      $config["base_url"]='http://localhost:8666/Haytick/category/android';
	      $total_row=$this->Haytick_model->record_count_Hplaptops();
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
          
	      $data["results"]=$this->Haytick_model->get_Hplaptops($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();

	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);


      }
      public function lenovolaptops(){
      	  $this->load->model('Haytick_model');
	      $config=array();
	      $config["base_url"]='http://localhost:8666/Haytick/category/android';
	      $total_row=$this->Haytick_model->record_count_lenovolaptops();
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
          
	      $data["results"]=$this->Haytick_model->get_lenovolaptops($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();

	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);


      }
        public function otherlaptops(){
      	  $this->load->model('Haytick_model');
	      $config=array();
	      $config["base_url"]='http://localhost:8666/Haytick/category/android';
	      $total_row=$this->Haytick_model->record_count_otherlaptops();
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
          
	      $data["results"]=$this->Haytick_model->get_otherlaptops($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();

	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

        }

        public function others(){
      	  $this->load->model('Haytick_model');
	      $config=array();
	      $config["base_url"]='http://localhost:8666/Haytick/category/android';
	      $total_row=$this->Haytick_model->record_count_others();
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
          
	      $data["results"]=$this->Haytick_model->get_others($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();

	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);


      }
      public function layout(){
      	$this->load->view('layout');
      }

}
