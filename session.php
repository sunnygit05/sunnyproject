<?php
   session_start();
   date_default_timezone_set('Asia/Kolkata');
   if(isset($_SESSION['counter']))
   {
   echo "Welcome Back";
   $myid = session_id();
   $userIDKey = "userID";
   $visitCount = $_SESSION['counter'];
   $today = date("D M j G:i:s T Y");
   $created=date("D M j G:i:s T Y",filemtime("index.php"));
   $_SESSION['counter']++;
   }
   else
   {
         echo "Welcome, Newcomer";
         $_SESSION['counter']=0;
         $myid = session_id();
         $visitCount = $_SESSION['counter'];
         $userID =  $myid;
         $today = date("D M j G:i:s T Y");      
         $myid = session_id();   
         $created=date("D M j G:i:s T Y",filemtime("index.php"));
   }
?>
<html>
<head>
    <style>
        body {background-color: black;
                color:white;
            text-align:center;}
        </style></head>
   <body>
    <center>
       <p>Information on Your Session:<p>
       <table border = "1" align = "center">
         <tr bgcolor = "red">
            <th>Info Type</th>
            <th>Value</th>
         </tr>
         <tr>
            <td>ID</td>
            <td><?php echo $myid ; ?></td>
         </tr>
         <tr>
            <td>Creation Time</td>
            <td><?php echo $created; ?></td>
         </tr>
         <tr>
            <td>Time of Last Access</td>
            <td><?php echo $today; ?></td>
         </tr>
         <tr>
            <td>Number of Previous Accesses</td>
            <td><?php echo $visitCount ?></td>
         </tr>
        </table>
    </center>
  </body>
</html>