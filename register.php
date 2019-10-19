<?php
    include_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="register.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="parent-body" >
    <!-- Default form register -->
<form class="text-center border border-light p-5 body-form"   action="" method="post" >

<p class="h4 mb-4">REGISTER</p>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" name="nama_pendaftar" class="form-control" placeholder="Nama Lengkap">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
    </div>
</div>
<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" name="password" class="form-control" placeholder="Tulis Password">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" name="username" class="form-control" placeholder="Tulis Username">
    </div>
</div>

<!-- E-mail -->
<input type="date" name="tanggal_lahir" placeholder="tanggal lahir" >
<small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
    Tulis Tanggal Lahir Kamu
</small>

<!-- Password -->
<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
    </div>
</div>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text"  name="kabupaten"  class="form-control" placeholder="Kabupaten">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
    </div>
</div>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text"  name="kode_pos" class="form-control" placeholder="Kode Pos">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
    </div>
</div>


<!-- Newsletter -->

<!-- Sign up button -->
<button class="btn btn-info my-4 btn-block" name="btnkirim" type="submit">DAFTAR</button>

<!-- Social register -->
<p>sudah punya akun? <a href="login.php">login</a> </p>

<!-- <button class="btn btn-info my-4 btn-block"  name="btnMoveToLogin"  >LOGIN</button> -->



</form>



<!-- Default form register -->
</body>
</html>


<?php
    $koneksi = mysqli_connect("localhost","talenta","talenta123","tugas");
    include_once("koneksi.php");

    // if(isset())
    
   if(isset($_POST['btnkirim'])) {
      $nama_pendaftar = $_POST['nama_pendaftar'];
      $tempat_lahir = $_POST['tempat_lahir'];
      $tanggal_lahir= $_POST['tanggal_lahir'];
      $alamat = $_POST['alamat'];
      $kecamatan = $_POST['kecamatan'];
      $kabupaten = $_POST['kabupaten'];
      $provinsi = $_POST['provinsi'];
      $kode_pos = $_POST['kode_pos'];
      $asal_sekolah = $_POST['asal_sekolah'];
      $password = $_POST['password'];
      $username = $_POST['username'];

      // echo $nama_pendaftar,$tempat_lahir,$tanggal_lahir,$alamat,$kecamatan,$kabupaten,$provinsi,$kode_pos,$asal_sekolah;
      mysqli_query($koneksi,"INSERT INTO table_user (nama_lengkap,username,password,birthdate) VALUES('$nama_pendaftar','$username','$password','$tanggal_lahir')");
      mysqli_query($koneksi,"INSERT INTO table_pendaftaran (nama_pendaftar,tempat_lahir,tanggal_lahir,alamat,kecamatan,kabupaten,provinsi,kode_pos,asal_sekolah) VALUES('$nama_pendaftar','$tempat_lahir','$tanggal_lahir','$alamat','$kecamatan','$kabupaten','$provinsi','$kode_pos','$asal_sekolah')");
      header("location:home.php");
   } 
?> 





<!-- $sqltambah = mysqli_query($koneksi,"INSERT INTO table_pendaftaran(nama_pendaftar,tempat_lahir,tanggal_lahir,alamat,kecamatan,kabupaten,provinsi,kode_pos,asal_sekolah) VALUES('$nama_pendaftar','$tempat_lahir','$tanggal_lahir','$alamat','$kecamatan','$kabupaten','$provinsi','$kode_pos','$asal_sekolah')");
if($sqltambah){
  echo '<script>alert("Berhasil di Tambahkan")</script>';
  echo '<meta http-equiv="refresh" content="0">';
}
else{
  echo '<script>alert("gagal di Tambahkan")</script>';
} -->