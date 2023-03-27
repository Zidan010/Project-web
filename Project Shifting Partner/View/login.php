<?php
include "../Control/logincheck.php";

$cookie_name="loginCheck"; 
$cookie_value="1";   
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
 
 
 
if (!isset($_COOKIE['count'])) { 
  echo "Welcome! This is the first time you have viewed this page today."; 
  $cookie = 1;
  setcookie("count", $cookie);
}
else
{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "You have viewed this page today ".$_COOKIE['count']." times.";
};
 
?>

<!DOCTYPE html>
<html>         
<head>  
    <title>LOGIN/Sign In</title>  
   <!-- <link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">-->
</head>  

<body>  
</br> <p id="labels"> SHIFTING  PARTNER </p>

<div id="myDIV"></div>    


    <div id = "frm">  
        
        <form action = ""  method = "POST" >  
            <p>  
                <label > UserName: </label>  
                <input type = "text"  id ="uname" name  = "uname" />  
            </p>  
            <p>  
                <label> Password: &nbsp </label> 
                <input type = "password" id ="pass" name  = "pass" />  
            </p>     
            <!--<h4><p id="labels2">LOG IN </p></h4>  -->
           <tr><th> <p id="labels2">Log In AS</p></th></tr>
           <tr><td> <input type =  "radio" name="choose"  value= "Admin" />Admin </tr></td>  <br></br>
           <tr><td> <input type =  "radio" name="choose"  value = "Client" />Client</tr></td>  <br></br>
           <tr><td> <input type =  "radio" name="choose"  value = "Shifter" />Shifter </tr></td> <br></br>
           <tr><td> <input type =  "radio" name="choose"  value = "Transporter" />Transporter</tr></td><br></br>
     
                <input type =  "submit" name="submit" id = "btn" value = "Login" />  <?php echo $error?>  
                <input type =  "submit" name="submit2" id = "btn" value = "Cancel" />   

        </form>  
    </div>
    <!--<div id="btn22"><a href="Home.php"><button>Cancel</button></a>  </div>  -->      
    <script> </script>  
</body>     
</html>  

