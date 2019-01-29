<html>
    <head>
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'assets/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.css'?>" rel="stylesheet" type="text/css"/>
    <style type="text/css">  
 table {  
      background:#ADDAF1;  
      border-radius:10px;  
      margin-top:95px;  
 }  
 
 </style>  
 <title><?php echo $title;?></title>  
    </head>
    <body>
        <div><?php echo $error; ?></div>
    <form  name="form1" id="form1" method="post"action="<?php print site_url();?>authentication/register/" >  
 <table width="200" border="0" align="center">  
 <tr>  
   <td>SNO:</td>  
   <td><input type="text" name="sno" id="sno"> <font color="#FF0000"><?php echo form_error('name');?></font></td>  
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

    </body>
</html>