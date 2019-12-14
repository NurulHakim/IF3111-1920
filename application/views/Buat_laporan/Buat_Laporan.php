<!DOCTYPE html>
<html lang="en">

<?php
if(!isset($data)){

}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
    <title>Buat Laporan</title>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/validasi.js">

    </script>
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
        <span id="peringatan"></span>
    </div>
    <br>

    <form onsubmit="return validasi()" action="<?php echo base_url() . "index.php/Buat_laporan/kirim_L" ?>" method="post" enctype="multipart/form-data">
        <div class="Kotak_Komentar">
            <textarea  id="komentar" name="Komentar" rows="18" cols="80">Laporan/Komentar</textarea>
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

            <input id="lampiran" type="file" name="lampiran" class="upload">

        </div>
        <div>
            <button type="submit" class = "tombol">Buat LAPOR!</button>
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
