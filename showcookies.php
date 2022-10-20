<?php
  echo "Welcome Raunak <br>";
  echo "Welcome Back<br>";
$Cookie1=$_COOKIE['Cookie_1'];
$Cookie2=$_COOKIE['Cookie_2'];
$Cookie3=$_COOKIE['Cookie_3'];
$Cookie4=$_COOKIE['Cookie_4'];
$Cookie5=$_COOKIE['Cookie_5'];
$Cookie6=$_COOKIE['Cookie_6'];
$Cookie7=$_COOKIE['Cookie_7'];
$Cookie8=$_COOKIE['Cookie_8'];
$Cookie9=$_COOKIE['Cookie_9'];
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
    <h3> Active Cookies </h3>
    <table border = "1" align = "center">
         <tr bgcolor = "red">
            <th>Cookie Name</th>
            <th>Cookie Values</th>
          </tr>
          <tr>
            <td><?php echo "Cookie_1"?></td>
            <td><?php echo $Cookie1 ?></td>
         </tr>
         <tr>
            <td><?php echo "Cookie_2" ?></td>
            <td><?php echo $Cookie2?></td>
         </tr>
         <tr>
            <td><?php echo "Cookie_3"?></td>
            <td><?php echo $Cookie3?></td>
         </tr>
         <tr>
            <td><?php echo "Cookie_4" ?></td>
            <td><?php echo $Cookie4?></td>
         </tr>
         <tr>
            <td><?php echo "Cookie_5" ?></td>
            <td><?php echo $Cookie5?></td>
         </tr>
         <tr>
            <td><?php echo "Cookie_6" ?></td>
            <td><?php echo $Cookie6?></td>
         </tr>
         <tr>
            <td><?php echo "Cookie_7" ?></td>
            <td><?php echo $Cookie7?></td>
         </tr>
         <tr>
            <td><?php echo "Cookie_8" ?></td>
            <td><?php echo $Cookie8?></td>
         </tr>
         <tr>
            <td><?php echo "Cookie_9" ?></td>
            <td><?php echo $Cookie9?></td>
         </tr>
   </body>
   </html>
