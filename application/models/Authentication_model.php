<?php  
 class Authentication_model extends CI_Model  
 {  
      function can_login($username, $password)  
      {  
           $this->db->where('name', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('clist');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
      function get_all_details()
      {
          
               $this->datatables->select('sno,name,email,password,city');
               $this->datatables->from('clist');
               // $this->datatables->join('categories', 'product_category_id=category_id');
                $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info" data-code="$1" data-name="$2" data-price="$3" data-category="$4">Edit</a>  <a href="javascript:void(0);" class="delete_record btn btn-danger" data-code="$1">Delete</a>','product_code,product_name,product_price,category_id,category_name');
               return $this->datatables->generate();
           
      }
 }  
 class register_model extends CI_Model {  
     function insertdata($options = array()){  
          if(isset($options['name']))  
               $this->db->set('name',strip_tags($options['name']));  
               if(isset($options['email']))  
               $this->db->set('email',strip_tags($options['email']));  
          if(isset($options['password']))  
               $this->db->set('password',strip_tags($options['password']));  
          if(isset($options['city']))  
               $this->db->set('city',($options['city']));  
               $this->db->insert("clist");  
          return $this->db->insert_id();  
     }  
}  ?>
