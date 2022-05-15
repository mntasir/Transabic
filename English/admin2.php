<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$link=mysqli_connect("localhost","root","","translate");
$tr=mysqli_query($link,"SELECT * FROM translators");
$aa=mysqli_query($link,"SELECT * FROM admins");
$ab=mysqli_fetch_array($aa);
if($name==$ab['name'] && $email==$ab['email'] && $password==$ab['password']){
?>
<html>
<head>
<link href="styl2.css" rel="stylesheet" type="text/css">
</head>
<body class="pro">
<center>
<table>
<thead id="hea">
<th colspan=3>Translators Data</th>
</thead>
<tbody>
<tr><td>Name</td><td>Email</td><td>Links Accepted</td></tr>
<?php while($trx=mysqli_fetch_array($tr)) { ?>
<tr><td><?php echo $trx['t_name']; ?></td><td><?php echo $trx['t_email']; ?></td>
<td><a href="tra links.php?em=<?php echo $trx['t_email']; ?>">Links Accepted</a></td></tr>
<?php } ?>
</tbody>
</table>
</center>
</body>
</html>
<?php } else echo "wrong email or password or both" ?>