<?php
$conn = mysqli_connect('localhost','root','','catatan');
if (isset($_POST["submit"])) {
    $nama = $_POST["judul"];
    $isi = $_POST["isi"];
    $query = "INSERT INTO note VALUES ('','$nama','$isi')";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Redirect</title>
      <meta http-equiv = "refresh" content = "1; url =index.php" />
   </head>
   <body>
      <p><?="Berhasil menginput data"?></p>
   </body>
</html>