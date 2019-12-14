<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <form action="<?php echo base_url() . "Buat_laporan/kirim_L" ?>" method="post" enctype="multipart/form-data">
        <div class="Kotak_Komentar">
            <textarea name="Komentar" rows="18" cols="110">Laporan/Komentar</textarea>
        </div>
        <div class="Aspek">
            <select name="aspek">
                <option value="Keluhan1">Keluhan tentang sarana dan prasarana </option>
                <option value="Keluhan2">Keluhan tentang proses pembuatan surat perizinan </option>
                <option value="Keluhan3">Keluhan tentang proses pengajaran </option>
                <option value="Keluhan4">Keluhan tentang proses penilaian </option>
            </select>
        </div>
        <div class="form">

            <input type="file" name="lampiran" class="upload">

        </div>
        <div>
            <input type="submit" value="Buat LAPOR!" class="tombol">
        </div>
    </form>
    <br>
    <div class="garis">
        <hr />
    </div>
    <br>
    <br>
    <br>
</body>

</html>