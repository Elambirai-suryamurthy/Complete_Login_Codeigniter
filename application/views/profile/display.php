<?php

    $sno = $empInfo['sno'] ? $empInfo['sno'] : '';
    $name = $empInfo['name'] ? $empInfo['name'] : '';
    $email = $empInfo['email'] ? $empInfo['email'] : '';
    $password = $empInfo['password'] ? $empInfo['password'] : '';
    $city = $empInfo['city'] ? $empInfo['city'] : '';
   
?>
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
        <a href="<?php print site_url();?>" class="pull-right btn btn-primary btn-xs" style="margin: 2px;;"><i class="fa fa-list"></i> List</a>
       
    </div>
</div>

<div class="row">   
    <div class="col-lg-12">
        <p><strong>First Name: </strong><?php print $sno?></p>
        <p><strong>Last Name: </strong><?php print $name?></p>
        <p><strong>Email: </strong><?php print $email?></p>
        <p><strong>Address: </strong><?php print $password?></p>
        <p><strong>Phone: </strong><?php print $city?></p>
           
    </div>
</div>
