<?php
//session_start();
include "../Control/logincheck.php";

?>

<html>
    <title>SHIFTING_PARTNER/HOME</title>
<head>
<!--<link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">-->
    </head>
    <body>

</br><p id="labels"> SHIFTING  PARTNER </p><div id="myDIV"></div>    
<div id="frm1">
<table class="center2"> 
<tr><th><p id="labels2">SIGN UP AS</p></th></tr>
<tr><td><div class="box"><a href="Shifter_Reg_Form.php"><button>SHIFTER</button></a></div> </td></tr>
<tr><td><div class="box"><a href="Transporter_Reg_Form.php"><button>TRANSPORTER</button></a></div></td></tr>
<tr><td><div class="box"><a href="Client_Reg_Form.php"><button>CLIENT</button></a></div></td></tr>

</table>
</div>
<br></br>
<form action="" method="post"> 
    <input type =  "submit" name="loginpage" id = "btn" value = "Login" />
    <input type =  "submit" name="submit2" id = "btn" value = "Cancel" /> 
</form>
</body>
</html>