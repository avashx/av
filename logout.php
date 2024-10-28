<?php
   session_start();
   unset($_SESSION['result']);
   
   echo '<center><p>Going to Verification page</p></center>';
   header('Refresh: 1; URL = verify.php');
?>
