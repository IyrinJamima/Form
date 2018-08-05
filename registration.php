<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 
include('db.php');
    if(isset($_POST['submit'])){
            $sql = "INSERT INTO login (username,password) VALUES ('".$_POST['username']."','".$_POST['password']."')";
            $res = mysqli_query($db,$sql);
       
}

?>
<html>
   <head>
      <title>Login Page</title>
      </head>
      <body>
               <form action = "reg.php" method = "post" align = "center">
                  <label>UserName  :</label><input type = "text" name = "username"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password"/><br/><br />
                  <input type="submit" name="submit" value="login" onclick ="javascript:login()">
               </form>
</body>
</html>
<script>
    function login(){
          if(confirm('sure to login')){
            window.location.href ='reg.php';
      }
   }
</script>  
