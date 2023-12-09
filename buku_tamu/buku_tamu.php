<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Buku Tamu</title>
  </head>
  <body>
    <div class="container">
    <h1>Buku Tamu</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->



</head>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Buku Tamu</title>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group mt-5">
    <label for="exampleInputPassword1">Nama</label>
    <input class="form-control" type="text" name="nama" placeholder="Masukan Nama Anda" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input class="form-control" type="text" name="alamat" placeholder="Masukan Alamat Anda" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nomor telepon</label>
    <input class="form-control" type="number" name="telepon" placeholder="Masukan Nomor Telepon Anda" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Pesan</label>
    <textarea class="form-control" name="pesan", id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>  
  <button type="submit" name="process" class="btn btn-primary" value="submit">Proses</button>
  <hr>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <button type="submit" name="hapus_data" class="btn btn-primary" value="Hapus Semua Data">Hapus Semua Data</button>
    </form>
  </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $telepon = $_POST["telepon"];
        $pesan = $_POST["pesan"];

        $file = fopen("buku tamu.txt", "a");
        fwrite($file, "Nama: $nama\nAlamat: $alamat\nTelepon: $telepon\nPesan: $pesan\n\n");
        fclose($file);
    }
    if (isset($_POST['hapus_data'])) {
        file_put_contents("buku tamu.txt", "");
    }
    echo "<h2>Data Tamu</h2>";
    if (file_exists("buku tamu.txt")) {
        $data = file_get_contents("buku tamu.txt");
        echo "<pre>$data</pre>";
    } else {
        echo "Belum ada data tamu.";
    }
    ?>
    </div>
</body>
</html>
