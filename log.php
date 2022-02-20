<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
       
        <div class="col-sm-4">
            
            </div>
            <div class="col-sm-4">
                <?php
                if(isset($_GET['loginerror'])){
                    $loginerror=$_GET['loginerror'];
                    
                }
                if(!empty($loginerror)){
                    echo'invalid';
                }
                ?>
            <form action="loginprocess.php" method="POST">
  <div class="form-group">
    <label >Email address</label>
    <input type="text" name="login_var" value="<?php if(!empty($loginerror)){
        echo $loginerror;
    }
    ?>" class="form-control"  >
   
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="text" name="password" class="form-control">
  </div>
 
  <button type="submit" name="sublogin"class="btn btn-primary">Login</button>
</form>
            
            </div>
            <div class="col-sm-4">
                <div class="login_form"></div>
            
            </div>
    </div>
    </div>
    
</body>
</html>