<?php
                if(count($_COOKIE)>0){
                    echo ""; // for future use to DISPLAY USERNAME
                }else{
                    header("Location: admin_login.php?msg=Please log in again!");
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
  <div class="mr-auto flex-grow-1">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav nav-pill">
    <li class="nav-item">
      <a class="nav-link active" href="admin_home.php"><button class="btn btn-success" style="margin-top:8px;">Back</button></a>
    </li>
  </ul>
</nav>
</div>
<!-- END -->
  <div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="logout.php"><button class="btn btn-danger" style="margin-top:8px;">Logout</button></a>
    </li>
  </ul>
</nav>
  </div>
</div>
    
        <!-- Body Container -->
        <div class="container-sm mt-3">
            <div class="card jumbotron" style="width:100%">
                <center>
                <img class="card-img-top img-fluid" src="./images/logo_latest.png" alt="Logo" style="height: 200px; width: 300px;">
                <div class="card-body">
                    
                <p id="this" style="visibility: hidden;color: red;" ></p>
                <div class="container-sm">
                
                <form method="POST" action="" class="needs-validation">
                            <div class="input-group mb-3 ml-1">
                                <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-white">Student ID</span>
                                    <span class="input-group-text">&#128101;</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Student ID" id="id" name="id">
                            </div>
                    <button type="submit" name="sbtn" class="btn btn-lg btn-danger">Delete</button>
                    <a href="delete_stu.php"><button type="button" name="sbtn" class="btn btn-lg btn-secondary">Reset</button></a>
                </form>
                </div>
                </div>
            </center>
             </div>
        </div>

        <?php
            include "conndatabase.php";
            if(isset($_POST['sbtn'])){
                $id=$_POST['id'];
                $checkvail="select * from rpgtable where `SL`='".$id."'";
                $checkvail_query=$con->query($checkvail);
                if(mysqli_num_rows($checkvail_query)<1){
                    echo '<script>document.getElementById("this").style.visibility="visible"; document.getElementById("this").innerHTML="ID NOT FOUND";</script>';
                }else{
                    $row=$checkvail_query->fetch_array(MYSQLI_ASSOC);
                    $sql = "delete from rpgtable where `SL`='$id'";
                    if($con->query($sql)===TRUE){
                        echo '<script>document.getElementById("this").style.visibility="visible"; document.getElementById("this").innerHTML="Deleted Successfully";</script>';
                    }else{
                        echo $con->error;
                    }
                }
                
            }
?>


        <!-- Footer -->
    
  <!-- Footer -->

</body>
</html>