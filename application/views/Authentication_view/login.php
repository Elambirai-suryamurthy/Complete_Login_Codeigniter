<!DOCTYPE html>  
 <html>  
 <head>  
      <title>Webslesson | <?php echo $title; ?></title>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
     <link rel="stylesheet" href="<?php echo base_url(); ?>asset/style.css">
     <style>
   body{
               background-color:#1f2833;
          }
     #uname{
          width:300px;
     }
     #pass{
          width:300px;
     }
     .container{
          position:absolute;
          top:200px;
          left:37%;
          border-radius:7px;
          border:1px solid lightGRAY;
          background-color:lightgray;
          width:370px;
          height:450px;
          box-shadow: 8px 8px 6px  #aaaaaa;
}
     }
     .form-group,.form-group{
          position:relative;
          margin-left:10%;
     }
     .log{
          position:relative;
          top:-10px;
          left:55px;
          border:1px solid darkturquoise;
          box-shadow: 8px 8px 6px  #aaaaaa;
          background-color:darkturquoise;
          width: 200px;
          height:50px;
          border-radius:4px;
     }
     .btn{
          background-color:darkturquoise;
          color:black;
          font-weight:bold;
     }
     .login{
          position:relative;
          top:-10px;
     }
     </style>
     </head>  
 <body class="back">  
      <div class="container">  
           <br /><br /> <br>

           <form method="post" action="<?php echo base_url(); ?>authentication/login_validation">  
        <div class="log"> 
             <center><h3 class="login">Login</h3></center> 
        </div>  <br><br>
                <div class="form-group">  
                &nbsp;&nbsp;    <label>Enter Username</label>  
                   &nbsp;&nbsp;&nbsp;  <input type="text" placeholder=" Username"name="username" class="form-control"id="uname" />  
                     <span class="text-danger"><?php echo form_error('username'); ?></span>                 
                </div>  <br>
                <div class="form-group">  
                &nbsp;&nbsp; <label>Enter Password</label>  
                     <input type="password" name="password"placeholder="password" class="form-control"id="pass" />  
                    <span class="text-danger"><?php echo form_error('password'); ?></span>  
                </div>  <br>
                <div class="form-group">  
                   <center><input type="submit" name="insert" value="Submit" class="btn btn-info" /></center> <br>  
                   <center> <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?></center>   
                </div>  
           </form>  
      </div>  
 </body>  
 </html>  