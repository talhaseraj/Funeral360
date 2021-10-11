
<?php $updates = mysqli_query($conn, "SELECT * FROM funerals WHERE sr = (SELECT max(sr) FROM funerals)"); 
$upd = mysqli_fetch_array($updates)




?>

