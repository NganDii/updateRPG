<?php
    if(count($_COOKIE)>0){
        echo ""; // for future use to DISPLAY USERNAME
    }else{
        header("Location: admin_login.php?msg=Please log in again");
    }
    include "conndatabase.php";

    $chk="Select * from rpgtable";
    $query=$con->query($chk);
?>
<!DOCTYPE html>  
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>
<body class="bg-light">
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
    <!-- Navigation bar-->
        <!-- Body Container -->
        <div class="container-fluid mt-2">
            <div class="card jumbotron mt-0" style="width:100%;">
                <center>
                <img class="card-img-top img-fluid" src="./images/logo_latest.png" alt="Logo" style="margin-top: -50px;height: 200px; width: 230px;">
                <div class="card-body">
                    <h4 class="card-title" style="margin-bottom: -90px;">RPG OFFICIAL</h4>
                </div>
            </center>
             </div>
        </div>

        <!-- TABLE -->

        <div class="container">
  <h2>Students Details</h2>
  <p>New features will be added soon.</p>                                                                                      
  
  <div class="table-responsive">
    <table class="table table-hover table-striped table-success table-bordered">
      <thead class="thead-light">
        <tr>
          <th>SL. NO.</th>
          <th>FULL NAME</th>
          <th>ADDRESS</th>
          <th>GENDER</th>
          <th>DISTRICT</th>
          <th>CONTACT NUMBER</th>
          <th>WHATSAPP NUMBER</th>
          <th>EMAIL</th>
          <th>OCCUPATION</th>
          <th>HIGHEST QUALIFICATION</th>
          <th>DATE OF BIRTH</th>
          <th>COURSE</th>
          <th>PASSPORT PHOTO</th>
          <th>SIGNATURE</th>
        </tr>
      </thead>
      <tbody>
      <?php
    while($row=$query->fetch_array(MYSQLI_ASSOC)){
        ?>
        <tr>
          <td><?php echo $row['SL'];?></td>
          <td><?php echo $row['FullName'];?></td>
          <td><?php echo $row['Address'];?></td>
          <td><?php echo $row['Gender'];?></td>
          <td><?php echo $row['District'];?></td>
          <td><?php echo $row['ContactNumber'];?></td>
          <td><?php echo $row['WhatsAppNumber'];?></td>
          <td><?php echo $row['Email'];?></td>
          <td><?php echo $row['Occupation'];?></td>
          <td><?php echo $row['HighestQualification'];?></td>
          <td><?php echo $row['DateOfBirth'];?></td>
          <td><?php echo $row['Course'];?></td>
          <td><?php echo "<a target='_blank' href='view.php?id=".$row['SL']."'><img src='data:image;base64,".base64_encode($row['Passport'])."' alt='Image' style='width: 100px; height: 100px;'></a>" ?></td>
          <td><?php echo "<a target='_blank' href='viewSig.php?id=".$row['SL']."'><img src='data:image;base64,".base64_encode($row['Signature'])."' alt='Image' style='width: 100px; height: 100px;'></a>" ?></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>



        <!-- Footer -->
   <!-- Footer -->
   <footer class="text-center text-lg-start bg-light text-muted">

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  &copy; 2021 Copyright:
  <a class="text-reset fw-bold" href="http://rpgofficial.site">RPG, All Rights Reserved</a>
</div>
<!-- Copyright -->
</footer>
  <!-- Footer -->

</body>
</html>