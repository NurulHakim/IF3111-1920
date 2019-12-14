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
    <?php foreach ($laporan as $x) {
        $isi = $x->isi_laporan;
        $id_laporan = $x->id_laporan;
    } ?>
    <form onsubmit="return validasi()" action="<?php echo base_url() . 'index.php/Lihat_selengkapnya/update_laporan/' . $id_laporan ?>" method="post" enctype="multipart/form-data">
        <div class="Kotak_Komentar">
            <textarea name="Komentar" rows="18" cols="110"><?php echo $isi; ?></textarea>
        </div>
        <div class="Aspek">
            <select name="aspek" id="aspek">
                <option value="">Pilih Aspek</option>
                <option value="1">Staff</option>
                <option value="1">Dosen</option>
                <option value="2">Mahasiswa </option>
                <option value="3">infrastruktur </option>
                <option value="4">Pengajaran </option>
            </select>
        </div>
        <div class="form">
            <input type="file" name="lampiran" class="upload">

        </div>
        <div>
            <button type="submit" class="tombol">Simpan</button>
            <!-- <input type="submit" value="Buat LAPOR!" class="tombol"> -->
        </div>
    </form>
    <br>
    <div class="garis">
        <hr />
    </div>
    <br>
    <br>
    <br>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/validasi.js"></script>
</body>

</html>