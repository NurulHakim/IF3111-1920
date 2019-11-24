<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Utama</title>

    <style media="screen">
        body{
          margin: 0px;
        }
        .navigasi{
          background-color: black;
          padding: 10px;
          margin: 0px;
        }

        .navigasi a{
          text-decoration: none;
          text-decoration-style: solid;
          font-display: block;
          color: white;
          padding-right: 10px;

        }

        .judul{
          text-align: center;
          padding-top: 50px;
        }


        .container_laporan{
          padding-top: 20px;
          padding-left: 100px;
          padding-right: 100px;
          padding-bottom: 10px;
        align-content: center;
        }



    </style>

  </head>
  <body>
    <div class="navigasi">
      <a href="#">Login</a>
      <a href="#">Daftar</a>
    </div>

    <div class="judul">
      <h1>SIMPLE LAPOR!</h1>
    </div>
    <div class="container_laporan">
      <div class="pencarian">
        <form action="" method="get">
          <input type="text" name="input_cari" value="" placeholder="Cari Laporan">
          <button type="submit" name="cari_sekarang" value="cari">Cari</button>
        </form>
      </div>
      <div class ="laporan">
          <textarea id="isi_laporan" name="isi_laporan" rows="10" cols="50" placeholder="Buat Laporan"></textarea>
          </br>

          <select id="aspek" name="aspek" >
            <option value="#" >Pilih Aspek Pelaporan</option>
            <option value="dosen">Dosen</option>
            <option value="staff">Staff</option>
            <option value="mahasiswa">Mahasiswa</option>
            <option value="infrastruktur">Infratruktur</option>
            <option value="perkuliahan">Pengajaran</option>
          </select>
          </br>
          <button type="submit" name="submit_laporan">Submit Laporan</button>
          </br>

          <hr>
      </div>

      <div class="container_laporan_teratas">

      </div>
    </div>
  </body>
</html>
