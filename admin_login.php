<?php
                if(count($_COOKIE)>0){
                    header("Location: admin_home.php");
                }
?>
<!DOCTYPE html>  
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>
<body>
    <!-- Navigation bar-->
    <div class="d-flex bg-dark">
  
      <!-- Brand/logo -->
      <div>
      <nav class="navbar navbar-expand-sm navbar-dark">
      <a class="navbar-brand" href="index.html">
        <img src="./images/logo_latest.png" alt="logo" style="width:55px;height: 55px;background-color: white;border-radius: 50%;">
      </a>
    </nav>
      </div>
      <!-- NAV AFTER LOGO -->
      <div class="flex-fill">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark text-weight-bold ">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active " href="#" style="margin-top:8px;"><h4>RPG OFFICIAL</h4></a>
        </li>
      </ul>
    </nav>
    </div>
    </div>
    
        <!-- Body Container -->
        <div class="container-sm mt-3" >
            <div class="card jumbotron" style="width:100%">
                <center>
                <img class="card-img-top img-fluid" src="./images/logo_latest.png" alt="Logo" style="height: 200px; width: 230px;">
                <div class="card-body">
                  <?php
                    if(isset($_REQUEST['msg'])){
                      echo "<p style='color:red;'>".$_REQUEST['msg']."</p>";
                    }else{

                    }
                        ?>
                <div class="container-sm mt-2">
                <form method="POST" action="" class="needs-validation">
                            <div class="input-group mb-3 ml-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">&#128101;</span>
                                </div>
                                <input type="text" class="form-control" required placeholder="Username" id="name" name="name">
                            </div>
                            <div class="input-group mb-3 ml-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">????</span>
                                </div>
                                <input type="password" class="form-control" required placeholder="Your Password" id="password" name="password">
                            </div>
                    <button type="submit" name="sbtn" class="btn btn-lg btn-primary">Submit</button>
                </form>
                </div>
                </div>
            </center>
             </div>
        </div>
        <?php
    include "conndatabase.php";

    if(isset($_POST['sbtn'])){
        $name=$_POST['name'];
        $pass=$_POST['password'];
        $chk=mysqli_query($con,"select * from admintable where Name='".$name."' and Password='".$pass."'");
        if(mysqli_num_rows($chk)<1){
            header("Location: admin_login.php?msg=Wrong Username or Password");
        }
        else{
            setcookie("user",$name);
            header("location: admin_home.php");
        }
        

    }
?>


        <!-- Footer -->
  <!-- Footer -->

</body>
</html>