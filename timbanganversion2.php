<html>
<title> PHP-Timbangan </title>

<body>
<form action = "timbanganversion2.php" method= "POST">
Masukkan berat anda <input type="number" name="nilai" value="0" />
<input type="submit" value="Hasil" />
</form>

<?php
$nilai = $_POST ['nilai'];
if($nilai >= 80)
{
 $result = "Anda Berat";
}
else
{
 $result = "Berat Anda Adalah Normal";
}

?>                      
<br>Mesej Untuk Anda :

<?php
echo $result;
?>
</body>
</html>