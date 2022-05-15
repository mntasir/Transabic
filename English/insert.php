<?php
$name= $_POST['t_name'];
$email= $_POST['t_email'];
$password= $_POST['t_password'];
$number= $_POST['t_num'];
$experience= $_POST['t_experience'];

$link= mysqli_connect("localhost","root","","translate");
$insure=mysqli_query($link,"SELECT * FROM translators WHERE t_email= '$email' ");
$ins=mysqli_fetch_array($insure);
if($ins['t_email']!=$email){
$re= mysqli_query($link,"INSERT INTO translators (t_name,t_email,t_password,t_num,t_experience) 
VALUES('$name','$email','$password','$number','$experience')");	
$rex= mysqli_query($link, "SELECT * FROM translators WHERE t_email='$email'");
$row=mysqli_fetch_array($rex);
 ?>
 <html>
 <head><link href="styl2.css" type="text/css" rel="stylesheet"></head>
 <div class="pro">
 <body>
 <center>
 <h1>DONE</h1>
 <table>
 <tr><td id="hea">name</td><td><?php echo $row['t_name'] ; ?></td></tr>
 <tr><td id="hea">email</td><td><?php echo $row['t_email'] ; ?></td></tr>
 <tr><td id="hea">number</td><td><?php echo $row['t_num'] ; ?></td></tr>
 <tr><td id="hea">experience</td><td><?php echo $row['t_experience'] ; ?></td></tr>
 <tr><td colspan="2" style="text-align: center"><a href="update.php?id=<?php echo $row['t_id']; ?>">EDIT</a></td></tr>
 </table>
 choose your translation project <a href="translator1.php?id=<?php echo $row['t_id']; ?>">here</a>
 </center>
 </body>
 </div>
 </html>
<?php } else {?>
<script> alert("This email is registered before");
window.location.replace("translatorInsert.html");
</script><?php } ?>