
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
include('dbcon1.php');
//if(isset($_POST['signup'])){
    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
    $email=$_POST['uemail'];
    $umob=$_POST['umob'];
    $ugen=$_POST['ugen'];
    $ucont=$_POST['ucont'];
    $organize=$_POST['uorg'];
    $ulink=$_POST['ulink'];
    $ugit=$_POST['ugitid'];
    $skill=$_POST['uskill'];
    $qry2= "INSERT INTO person(`UNAME`, `UPASS`, `UEMAIL`, `UMOB`, `UGEN`, `USKILL`, `UORGNI`,`UCON`,`LinkdinId`,`gitId`) VALUES ('$uname','$upass','$email','$umob','$ugen','$skill','$organize','$ucont','$ulink','$ugit')";
    $run=mysqli_query($con ,$qry2);
    if($run){
      echo"Record Inserted Successfully";
      ?>
     <script type="text/javascript">
         alert("you have Successfully Registered");
         window.location.href="./index.php";
     </script>
    <?php
    }
    else{
  ?>
     <script type="text/javascript">
         alert("you have already Registered go For Login");
         window.location.href="./login.php";
     </script>
    <?php
    //header("Location:./login.php");
       }
    mysqli_close($con);
//}
?>

</body>
</html>