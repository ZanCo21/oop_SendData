<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

</head>
<body>
<h2>BIODATA</h2>
<form action="index.php" method="post" style="width: 500px; margin-top: 5%; margin-left: 31%;">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" name="nama" class="nama" />
        <label class="form-label" for="form6Example1">Nama Lengkap</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="kelas"/>
        <label class="form-label" for="form6Example2">Kelas</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" name="jurusan"/>
    <label class="form-label" for="form6Example3">Jurusan</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" name="sekolah"/>
    <label class="form-label" for="form6Example4">Sekolah</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" name="email"/>
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control"  name="nohp"/>
    <label class="form-label" for="form6Example6">Phone</label>
  </div>
    <!-- Number input -->
    <div class="form-outline mb-4">
    <input type="text" id="form6Example6" class="form-control" name="jeniskelamin"/>
    <label class="form-label" for="form6Example6">jeniskelamin</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form6Example7" rows="4" name="alamat"></textarea>
    <label class="form-label" for="form6Example7">Alamat</label>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
    <label class="form-check-label" for="form6Example8"> A privacy policy </label>
  </div>

  <!-- Submit button -->
  <button type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block mb-4">Submit</button>
</form>


    <!-- <form action="index.php" method="post">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" name="nama" class="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="jurusan"></td>
        </tr>
        <tr>
            <td>Sekolah</td>
            <td><input type="text" name="sekolah"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td><input type="text" name="nohp"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jeniskelamin"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="simpan"></td>
        </tr>
    </table>
    </form> -->
</body>
</html>