<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

     function __construct(){
          parent::__construct();
            //load library ignited-dataTable
            $this->load->model('Profile_model', 'emp'); //load model crud_model
  
        }
    
         function login()  
         {  
            $this->load->library('form_validation');
              //http://localhost/tutorial/codeigniter/main/login  
              $data['title'] = 'My Login';  
              $this->load->view("Authentication_view/login", $data);  
         }  
         function login_validation()  
         {  
              $this->load->library('form_validation');
              $this->form_validation->set_rules('username', 'Username', 'required');  
              $this->form_validation->set_rules('password', 'Password', 'required');  
              if($this->form_validation->run())  
              {  
                   //true  
                   $username = $this->input->post('username');  
                   $password = $this->input->post('password');  
                   //model function  
                   $ep=md5($password);
                   $this->load->model('authentication_model');  
                   if($this->authentication_model->can_login($username, $ep))  
                   {  
                        $session_data = array(  
                             'username'     =>     $username  
                        );  
                        $this->session->set_userdata($session_data);  
                        redirect(base_url() . 'authentication/enter');  
                   }  
                   else  
                   {  
                        $this->session->set_flashdata('error', 'Invalid Username and Password');  
                        redirect(base_url() . 'authentication/login');  
                   }  
              }  
              else  
              {  
                   //false  
                   $this->login();  
              }  
         }  
         function enter(){  
              if($this->session->userdata('username') != '')  
              {  
               $data['empInfo'] = $this->emp->getEmpList();
               $this->load->view('profile/profile_view',$data);
               //     echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
               //     echo '<label><a href="'. base_url ().'authentication/logout">Logout</a></label>';  
              } 
              
              else  
              {  
                   redirect(base_url() . 'authentication/login');  
              }  
         }  
         function logout()  
         {  
              
              $this->session->unset_userdata('username');  
              redirect(base_url() . 'authentication/login');  
         }  

         public function register()
         {
          $data['title'] = 'My register'; 
        

              $name=$this->input->post('name');
              $e=$this->input->post('email');
              $p=$this->input->post('password');
              $c=$this->input->post('city');
              $ep=md5($p);
              
              $que=$this->db->query("select * from clist where email='".$e."'");
              $row = $que->num_rows();
              if($row)
              {
              $data['error']="<h3 style='color:red'>This user already exists</h3>";
              }
              else
              {
              $que=$this->db->query("insert into clist values('','$name','$e','$ep','$c')");
              
              $data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
              }			
              $this->load->view('authentication_view/register',$data);	          
              
        
         }

    } 
 

    
    
         
     // public function register()  
     // {  
     // $this->insert(); 
     // $this->load->view("Authentication_view/register", $data);        
     // }  
     // public function insert()  
     // {  $this->load->library('form_validation');
     //      $this->form_validation->set_rules('name', 'Name', 'required');  
     //      $this->form_validation->set_rules('email', 'Email', 'required');  
     //      $this->form_validation->set_rules('password', 'Password', 'required|numeric');  
     //      $this->form_validation->set_rules('city','City','required');  
     //      if ($this->form_validation->run())  
     //      {       
     //      $register=$this->register_model->insertdata($_POST);  
     //      if($register){  
     //                echo "<script>alert('added Sucessfully')</script>";  
     //           }  
     //      }  
     //      $data['title']="Registration";  
     //   $this->load->view('authentication/register_view',$data);       
     // }  
  

