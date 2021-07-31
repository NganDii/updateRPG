<?php
    include "conndatabase.php";

    if(isset($_POST['sbtn'])){
        $fname=$_POST['fname'];
        $addr=$_POST['address'];
        $gender=$_POST['gender'];
        $district=$_POST['district'];
        $phoneno=$_POST['contact_number'];
        $waNo=$_POST['waNo'];
        $email=$_POST['email'];
        $occu=$_POST['occupation'];
        $high_qual=$_POST['highest_qualification'];
        $dob=$_POST['dob'];
        $course=$_POST['course'];
        // Passport 
        $photoFile=$_FILES['passport_photo'];
        $photoName=$photoFile['name'];
        $photoSize=$photoFile['size'];
        $photoType=$photoFile['type'];
        $photoBlob= addslashes(file_get_contents($photoFile['tmp_name']));
        $photoExt=explode('.',$photoName);
        $photoActualExt=strtolower(end($photoExt));
        // Signature
        $sigFile=$_FILES['signature_photo'];
        $sigName=$sigFile['name'];
        $sigSize=$sigFile['size'];
        $sigType=$sigFile['type'];
        $sigBlob=addslashes(file_get_contents($sigFile['tmp_name']));
        $sigExt=explode('.',$sigName);
        $sigActualExt=strtolower(end($sigExt));

        // Validation for extension
        $match=array('jpg','png','pdf','jpeg');
        if(in_array($photoActualExt,$match) && in_array($sigActualExt,$match)){
                if($photoSize<=200000 && $sigSize<=200000){
                 $ins="insert into `rpgtable`(`FullName`, `Address`, `Gender`, `District`, `ContactNumber`, `WhatsAppNumber`, `Email`, `Occupation`, `HighestQualification`, `DateOfBirth`, `Course`, `Passport`, `Signature`, `extension`, `sigextension`) values ('$fname','$addr','$gender','$district','$phoneno','$waNo','$email','$occu','$high_qual','$dob','$course','$photoBlob','$sigBlob', '$photoType','$sigType')";
                  $chk=$con->query($ins);
                    if($chk===TRUE){
                        header("Location: successful.html");
                    }
                    else{
                        echo "Failed to SUBMIT THE FORM";
                    }

                } else{
                    echo '<script type="text/javascript">alert("File Size Exceeded");</script>';
                }
            }else{
            echo '<script type="text/javascript">alert("Invalid FileType for Passport! or Signature! ");</script>';
        }

    } else{
        echo "Hacking not possible";
    }
?>