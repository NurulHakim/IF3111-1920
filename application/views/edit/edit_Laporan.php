<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css ">
    <title>Buat Laporan</title>
</head>

<body>
    <div class="judul">
        <h1>SIMPLE LAPOR!</h1>
    </div>
    <br>
    <div>
        <p class="Laporan_Komentar">Buat Laporan/Komentar</p>
    </div>
    <div class="garis">
        <hr />
    </div>
    <br>
    <div class="Kotak_Komentar">
        <textarea name="Laporan/Komentar" rows="18" cols="110"><?php foreach($laporan as $x )echo $x-> isi_laporan; ?></textarea>
    </div>
    <div class="Aspek">
    <select name="aspek" id ="aspek" >
              <option value="">Pilih Aspek</option>
              <option value="1">Staff</option>
                <option value="1">Dosen</option>
                <option value="2">Mahasiswa </option>
                <option value="3">infrastruktur </option>
                <option value="4">Pengajaran </option>
            </select>
    </div>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="upload" class="upload">
        </form>
    </div>
    <div>
        <input type="button" value="Buat LAPOR!" class="tombol">
    </div>
    <br>
    <div class="garis">
        <hr />
    </div>
    <br>
    <br>
    <br>
</body>

</html>