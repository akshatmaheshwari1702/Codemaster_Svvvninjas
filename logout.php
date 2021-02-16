<?php
// Starting session
session_start();
 
// Destroying session
include('./first.php');
if (isset($_SESSION["ID"] )) {
session_destroy();
?>
<div class="h1 text-center mt-5">
    you are succesfully Logout from Our Website!thank you for Visiting
</div>
<?php
}
else{
    header('location:./index.php');
}
?>