<?php
$email=$_GET['em'];
$link=mysqli_connect("localhost","root","","translate");
$tr=mysqli_query($link,"SELECT * FROM links WHERE pro= '$email'");
$aa=mysqli_query($link,"SELECT * FROM admins");
$ab=mysqli_fetch_array($aa);
?>
<html>
<head>
<link href="styl2.css" rel="stylesheet" type="text/css">
</head>
<body class="pro">
<center>
<table>
<thead id="hea">
<th>Material</th><th>Status</th>
</thead>
<tbody>
<?php while($trx=mysqli_fetch_array($tr)){ ?>
<tr><td><?php echo $trx['u_url']; ?></td><td><?php if($trx['done']==$email){ echo "Finished";} else echo "Under processing"?></td></tr>
<?php } ?>
</tbody>
</table>
<form action="admin2.php" method="post">
<input type="hidden" name="name" value="<?php echo $ab['name'] ?>">
<input type="hidden" name="email" value="<?php echo $ab['email'] ?>">
<input type="hidden" name="password" value="<?php echo $ab['password'] ?>">
<input type="submit" value="RETURN">
</form>
</center>
</body>
</html>