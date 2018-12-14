<?php
class Message extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->load->model('Haytick_model');
}
	public function index()
	{
     if(!isset($_SESSION['id']) || $_SESSION['id'] = false){
        redirect('Haytick');


      }

      
    

    }
    public function chat($author_id){
       $this->form_validation->set_rules('messages','Message', 'required');
        $this->load->model('Haytick_model');
         $id=$this->session->userdata('id');
          $data['sender_id']=$author_id;
        
        $data['messages']=$this->Haytick_model->get_messages($_SESSION['id'],$author_id);
         $data['chatdetails']=$this->Haytick_model->get_chatdetails($author_id);
           $data['chats']=$this->Haytick_model->new_get_chats($id);
          
        if($this->form_validation->run()){
         $data=$this->input->post();
         $data['sender_id']=$author_id;
         $data['receiver_id']=$this->session->userdata('id');
          $data['notification']=1;

           unset($data ['submit']);

         $send_message=$this->Haytick_model->send_messages($data); 


         $data['messages']=$this->Haytick_model->get_messages($_SESSION['id'],$author_id);
         $data['chatdetails']=$this->Haytick_model->get_chatdetails($author_id);
       
          redirect('message/chat/'.$author_id);
     }
     else{

         $this->load->view('message',$data);
         
     }
     
  
    }


    public function chatlist(){
       
         $id=$this->session->userdata('id');

       $data['chats']=$this->Haytick_model->new_get_chats($id);
        $data['notifications']=$this->Haytick_model->notifications($id);
        $this->load->view('message_chat', $data);
        
        
      

    }

public function test(){
  $myarr = array(
    4 => array(
        'id'=> 1,
        'sender_id' => '4',
        'receiver_id' => '6',
        'message' => 'Hello'
      ),
    1 => array(
        'id'=> 6,
        'sender_id' => '1',
        'receiver_id' => '6',
        'message' => 'Hello World')
  );

  if (in_array('1', array_keys($myarr))){
   var_dump($myarr['1']);
  }else{
    echo "not found";
  }

}
  
}
?>