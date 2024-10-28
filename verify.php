<?php
  session_start();
?>
<html>
  <head>
    <title>OTP</title>
    <style>
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
      body {
        margin: 40px 0 10;
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        font-family: 'Open Sans', sans-serif;
      }

      @keyframes gradient {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }

      footer {
        margin-top: 30px;
        text-align: center;
        font-size: 12px;
        color: rgba(0,0,0,.6);
      }

      footer a {
        color: rgba(255,255,255,.8);
      }	

      .login {
        width: 400px;
        margin: 16px auto;
        font-size: 16px;
      }

      /* Reset top and bottom margins from certain elements */
      .login-header, .login p {
        margin-top: 0;
        margin-bottom: 0;
      }

      .login-header {
        background: #28d;
        padding: 20px;
        font-size: 1.4em;
        font-weight: normal;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
      }

      .login-container {
        background: #f4e1fa;
        padding: 12px;
      }

      .login p {
        padding: 12px;
      }

      .login input {
        box-sizing: border-box;
        display: block;
        width: 100%;
        border-width: 1px;
        border-style: solid;
        padding: 16px;
        outline: 0;
        font-family: inherit;
        font-size: 0.95em;
      }

      .login input[type="number"] {

      }

      /* Text fields' focus effect */
      .login input[type="number"]:focus {
        border-color: #888;
      }

      .login input[type="submit"] {
        background: #28d;
        border-color: transparent;
        color: #fff;
        cursor: pointer;
      }

      .login input[type="submit"]:hover {
        background: #17c;
      }

      /* Buttons' focus effect */
      .login input[type="submit"]:focus {
        border-color: #05a;
      }
    </style>
  </head>
  <body>	
    <div class="login">
      <h2 class="login-header">Log in</h2>
      <form class="login-container" method="POST" >	
        <p><input type="number" name="otp"  id="inotp"  placeholder="One Time Password" class="login-input" required></p>
        <p><input type="submit" value="Verify" onclick="getInputValue();"></p>
      </form> 
    </div>
    <script></script>
    <?php
      date_default_timezone_set("Asia/Calcutta"); 

      //H(hr):00-24, d(day): 01-31, w(week):0-6
      $otp =  date("Hdw") ;
      if (isset($_POST["otp"])) {
        $value=($_POST['otp']); 
        $_SESSION['result'] = ($_POST['otp']);
        if($value==$otp){
          echo "welcome otp is correct";
          header("Location: index.php");
        }
        else{
          echo '<center><b><p style="color:#800000;text-align:center;">Try again.</p></b></center>' ;
        }			
      }
    ?>
    <footer>
      <center>
        <p>|| Hr:00-24;  Day: 01-31;  week:0-6 ||</p>
      </center>
    </footer>
  </body>
</html>
