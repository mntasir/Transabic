<?php
$ID= $_GET['id'];
$TID=$_GET['TID'];
$link=mysqli_connect("localhost","root","","translate");
$qu=mysqli_query($link,"SELECT * FROM translators WHERE t_id='$TID' ");
$qux=mysqli_fetch_array($qu);
$traproject=$qux['t_email'];
$que=mysqli_query($link,"UPDATE links SET pro= '$traproject' WHERE l_id='$ID' ");
$qu=mysqli_query($link,"SELECT * FROM links WHERE l_id='$ID' ");
$quar=mysqli_fetch_array($qu);
?>
<html>
<head>
</head>
<body>
<center>
<h1>Your video</h1>
<div>
<?php echo $quar['u_url'];  ?>
</div>
Finished translating? click <a href="done.php?id=<?php echo $ID; ?> & TID=<?php echo $TID; ?>">HERE</a>
</center>
</body>
</html>