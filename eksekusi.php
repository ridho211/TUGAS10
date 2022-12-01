<?php 
if (isset($_POST["next"])):
$konek=mysqli_connect("localhost","root","","siakad");
$mk=filter_var ($_POST["matakuliah"],FILTER_SANITIZE_STRING);
$ds=filter_var($_POST["namadosen"],FILTER_SANITIZE_STRING);
$key="RIDHOIKHRAM";
$x="INSERT INTO entrimatakuliah VALUES('',aes_encrypt('$mk','$key'),aes_encrypt('$ds','$key'))";
$ex=mysqli_query($konek, $x);
if ($ex>0):
echo "<script>
alert('record berhasil ditambah');
 document.location.href='indx.php'; 

 </script>";
else:
echo "<script>
alert('record gagal ditambah');
 document.location.href='indx.php'; 

 </script>";
    endif;
else:
echo "<script> document.location.href='indx.php'; </script>";
endif;




 ?>