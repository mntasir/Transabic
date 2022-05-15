<?php 
$ID=$_GET['id'];
$TID=$_GET['TID'];
$link=mysqli_connect("localhost","root","","translate");
$qu=mysqli_query($link,"SELECT * FROM translators WHERE t_id='$TID' ");
$qux=mysqli_fetch_array($qu);
$traproject=$qux['t_email'];
$qq=mysqli_query($link,"UPDATE links SET done= '$traproject' WHERE l_id='$ID'");
$qqi=mysqli_query($link,"SELECT * FROM links WHERE l_id='$ID'");
$qqx=mysqli_fetch_array($qqi);
$url=$qqx['u_url'];

?>
<html>
<body>
<h2>DONE! <br>Want to take other task? click <a href="translator1.php?id=<?php echo $TID; ?>">here</a></h2>
</body>
</html>