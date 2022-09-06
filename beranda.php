<?php

session_start();
if(!isset($_SESSION["username"])) { // jika ada session username
   header("Location:form.php");
}
 echo "<h2> Beranda </h2>";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>Beranda</title>
</head>
<body>
   <form action="user.php">
 <button class="btn btn-primary">Halaman User</button>
</form>
 <form action="delete.php">
 <button class="btn btn-danger" onclick="alert('anda telah logout')">Logout</button>
</form>
</body>
</html>
 

