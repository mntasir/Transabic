<?php
$TID=$_GET['id'];
$link=mysqli_connect("localhost","root","","translate");
$que=mysqli_query($link,"SELECT * FROM links");

?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<table>
<?php while($yr=mysqli_fetch_array($que)) { if($yr['pro']==null){?>
<tr><td><?php echo $yr['u_url']; ?></td><td><a href="accept.php?id=<?php echo $yr['l_id']; ?> & TID=<?php echo $TID; ?>" >Accept</a></td></tr>
<?php }} ?>
</table>
</center>
</body>
</html>