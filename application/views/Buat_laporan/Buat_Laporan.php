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
    <div class="Kotak_Komentar">
        <textarea name="Laporan/Komentar" rows="25" cols="100">Laporan/Komentar</textarea>
    </div>
    <div class="Aspek">
        <select>
            <option value="Keluhan">Keluhan terhadap sarana dan prasarana </option>
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