<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #endregion
  class  User_profile extends CI_controller
  {
    function __construct(){
        parent::__construct();
          //load library ignited-dataTable
          $this->load->model('Profile_model', 'emp'); //load model crud_model

      }
function index()
{
    $data['page'] = 'emp-list';
    $data['title'] = 'Employee List | TechArise';
    $data['empInfo'] = $this->emp->getEmpList();
    $this->load->view('profile/profile_view',$data);
}
    
     function view_load()
     {

         $this->load->view('profile/add');
      //  header('Content-Type: application/json');


     }
     function save()
      {
       
        $this->emp->add($data);
        redirect('user_profile/');
      }
     
        public function display($sno='') {
          
          $data['page'] = 'emp-display';
          $data['title'] = 'Employee Display | TechArise';
          $this->emp->setSno($sno);
          $data['empInfo'] = $this->emp->getEmp();
          $this->load->view('profile/display', $data);
      
        }
      function edit()
      {
        $this->load->view('profile/edit');
      }
      function update()
      {
        $data = array(
            'table_name'=>'clist', 
            'sno' => $this->input->post('sno'), 
            'name' => $this->input->post('name'), 
            'email' => $this->input->post('email'), 
            'password' => $this->input->post('password'), 
            'city' => $this->input->post('city') 
        );
            $this->emp->updateEmp($data);
            redirect('user_profile/');
      
    

    }
    public function delete($sno='') {
      $this->emp->setSno($sno);
      $this->emp->deleteEmp();
      redirect('user_profile/');
  }


  } 
  
 
 
 
 
 ?>