<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head>
<div class="row">
    <div class="col-lg-12">
    <center><h2>My Task</h2>   </center><br><br>                
    </div>
</div>

<div class="row">
    <div class="col-lg-12">        
        <a href="<?php print site_url();?>/user_profile/" class="pull-right btn btn-primary btn-xs" style="margin: 2px;;"><i class="fa fa-list"></i> List</a>
                      
    </div>
</div>
<form  name="form1" id="form1" method="post"action="<?php print site_url();?>/User_profile/save" >  
 <table width="200" border="0" align="center">  
 <tr>  
   <td>SNO:</td>  
   <td><input type="text" name="sno" id="sno"> <font color="#FF0000"><?php echo form_error('sno');?></font></td>  
  </tr>
  <tr>  
   <td>Name:</td>  
   <td><input type="text" name="name" id="name"> <font color="#FF0000"><?php echo form_error('name');?></font></td>  
  </tr>  
  <tr>  
   <td>Email:</td>  
   <td><input type="text" name="email" id="email"> <font color="#FF0000"><?php echo form_error('email');?></font></td>  
  </tr>  
  <tr>  
   <td>Password:</td>  
   <td><input type="password" name="password" id="password"> <font color="#FF0000"><?php echo form_error('password');?></font></td>  
  </tr>  
  <tr>  
   <td>City:</td>  
   <td><select name="city" id="city">  
   <option value="">Select</option>  
   <option value="bangalore">bangalore</option>  
   <option value="vijayawada">vijayawada</option>  
   </select> <font color="#FF0000"><?php echo form_error('city');?></font></td>  
  </tr>  
  <tr><td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Register"></td></tr>  
 </table>  
 </form>  
<!-- 
 <form action="<?php print site_url();?>/User_profile/save" method="POST" class="add-emp" id="add-emp">
<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user-o"></i>
                    </span>
                    <input type="text" name="sno" class="form-control" id="first-name" placeholder="sno"required>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                
                    </span>
                    <input type="text" name="name" class="form-control" id="last-name" placeholder=" Name"required>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        
                    </span>
                    <input type="text" name="email" class="form-control"required id="email" placeholder="Email"required>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                       
                    </span>
                    <input type="password" name="password"required class="form-control" id="address" placeholder="password"required>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                
                    </span>
                    <input type="text" name="city"required class="form-control" id="contact-no" placeholder="City"required>
                </div>
            </div>
        </div>
       
    
    <div class="row">
        <div class="col-lg-12 text-right">
            <button type="reset" name="reset_add_emp" id="re-submit-emp" class="btn btn-danger"><i class="fa fa-undo"></i> Reset</button>
            <button type="submit" name="add_emp" id="submit-emp" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
        </div>
    </div>  
</form> -->
