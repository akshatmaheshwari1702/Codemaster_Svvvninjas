<?php
// Starting session
session_start();
if (isset($_SESSION["ID"] )) {
     echo"session set";
    header('location:./index.php');
}
else{
include('dbcon1.php');
$uemail = $_POST['uemail'];
$upass = $_POST['upass'];

if (isset($_POST['login'])) {
    $qry = "SELECT *FROM person WHERE UEMAIL='$uemail' AND UPASS='$upass'";
    $run2 = mysqli_query($con, $qry);
    $row2=mysqli_num_rows($run2);
    if ($row2!=0) {
        $data = mysqli_fetch_assoc($run2);
        $_SESSION["ID"] =$data['ID'];
        $_SESSION["UNAME"] = $data['UNAME'];
        $_SESSION["UEMAIL"] = $data['UEMAIL'];
        $_SESSION["UMOB"] = $data['UMOB'];
        $_SESSION["UGEN"] = $data['UGEN'];
        $_SESSION["UORGNI"] = $data['UORGNI'];
        $_SESSION["UCON"] = $data['UCON'];
        $_SESSION["LinkdinId"] = $data['LinkdinId'];
        $_SESSION["gitId"]= $data['gitId'];
        
        header('location:./index.php');
    } else { ?>
        <script>
            alert("you Entered Wrong EmailId or Password");
            window.location.href="./login.php";
        </script>
<?php
    }
}
}
?>