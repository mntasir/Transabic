<?php
$id=$_GET['id'];
$link= mysqli_connect("localhost","root","","translate");
$re= mysqli_query($link, "SELECT * FROM translators WHERE t_id='$id' ");
$row=mysqli_fetch_array($re);
?>
<html>
<head><link href="styl.css" type="text/css" rel="stylesheet"></head>
<div class="pro">
<body>
<center>
<table>
<thead><tr><th id="hea"  colspan='2'>Translators data editing</th></tr></thead>
<tbody>
<form action="updated.php" method="post">
<input type="hidden" name="t_id" value="<?php echo $row['t_id']; ?>">
<tr><td>name</td>   <td><input type="text" name="t_name" value="<?php echo $row['t_name']; ?>"></td></tr>
<tr><td>email</td>  <td><input type="email" name="t_email" value="<?php echo $row['t_email']; ?>"></td></tr>
<tr><td>Resst password?</td>  <td><input type="password" name="t_password"></td></tr>
<tr><td>number</td>  <td><input type="number" name="t_num" value="<?php echo $row['t_num']; ?>"></td></tr>
<tr><td>experience</td>  <td><input type="number" name="t_experience" value="<?php echo $row['t_experience']; ?>"></td></tr>
<tr><td></td><td><input type="submit" value="EDIT"></td></tr>
</form>
</tbody>
</table>
</center>
</body>
</div>
</html>
