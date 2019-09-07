<?php
include 'koneksi.php';
?>




<html>
<head>
<title>HALAMAN DATABASE GUDANG</title>



</head>
<body>
<h3>Data Gudang </h3>
<table border="1">
<tr>
<td>id</td>
<td>name</td>
<td>name</td>
</tr>

<?php
$query =mysqli_query ($conn,"SELECT *FROM products");
while ($data =mysqli_fetch_array ($query) ){
?>
<tr>
<td><?php echo $data['id'];?></td>
<td><?php echo $data['name'];?></td>
<td><?php echo $data['name'];?></td>
</tr>

<?php } ?>

</table>
</body>
</html>