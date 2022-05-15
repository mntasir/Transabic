<?php
$name= $_POST['t_name'];
$email= $_POST['t_email'];
$password= $_POST['t_password'];
$number =$_POST['t_num'];
$experience= $_POST['t_experience'];
$id=$_POST['t_id'];
$link= mysqli_connect("localhost","root","","translate");
$re=mysqli_query($link,"UPDATE translators SET t_name='$name',t_email='$email', t_password='$password',t_num='$number',t_experience='$experience'
 WHERE t_id='$id' "); 

$rex= mysqli_query($link, "SELECT * FROM translators WHERE t_id='$id'");
$row=mysqli_fetch_array($rex);
?>
<html>
<head><link href="styl2.css" type="text/css" rel="stylesheet">
</head>
<div class="pro">
<body><center><h1><h1>
<table>
 <tr><td id="hea">name</td><td><?php echo $row['t_name'] ; ?></td></tr>
 <tr><td id="hea">email</td><td><?php echo $row['t_email'] ; ?></td></tr>
 <tr><td id="hea">number</td><td><?php echo $row['t_num'] ; ?></td></tr>
 <tr><td id="hea">experience</td><td><?php echo $row['t_experience'] ; ?></td></tr>
 <tr><td colspan="2"><center><a href="update.php?id=<?php echo $row['t_id']; ?>">EDIT</a></center></td></tr>
 </table>
 choose your translation project <a href="translator1.php?id=<?php echo $row['t_id']; ?>">here</a>
 </center>
</body>
</div>
</html>	
