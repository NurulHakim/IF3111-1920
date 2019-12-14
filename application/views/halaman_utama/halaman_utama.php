<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Halaman Utama</title>

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/style_utama.css">

</head>

<body>
  <div class="navigasi">

  </div>

  <div class="judul">
    <h1>SIMPLE LAPOR!</h1>
  </div>
  <div class="container_laporan">

    <div class="pencarian">
      <form action="" method="get">
        <input type="text" name="input_cari" placeholder="Cari Laporan">
        <button type="submit" name="cari_sekarang" value="cari">Cari</button>
      </form>
    </div>
    <!--end dari class pencarian  -->


    <div class="laporan">
      <a href="<?php echo base_url() . "index.php/Buat_laporan/" ?>"><b> + </b> Buat Laporan/Komentar</a>
      <!-- <textarea id="isi_laporan" name="isi_laporan" rows="10" cols="50" placeholder="Buat Laporan"></textarea>
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
          </br> -->


    </div>
    <!--end dari class laporan  -->



    <div class="container_laporan_teratas">

      <?php
      foreach ($laporan as $x) {
        ?>
        <hr>
        <table>
          <tr>
            <td colspan="2">
              <div class="highlight_laporan">
                <?php echo $x->isi_laporan; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="lampiran_laporan">
                Lampiran: <a href="<?php echo $x->lampiran; ?>" id="judul_lampiran"><?php echo $x->lampiran; ?></a>
              </div>
            </td>

            <td>
              <div class="selengkapnya">
                Waktu: <span id="tanggal_laporan"><?php echo $x->tanggal; ?></span>
                <a id="lihat" href="<?php echo base_url() . "index.php/Lihat_selengkapnya/index/" . $x->id_laporan; ?>">Lihat Selengkapnya > </a>
              </div>
            </td>
          </tr>


        </table>
      <?php } ?>

      <div class="tombol_lebih_banyak">
        <button href="<?php echo base_url();
                      echo "utama/laporan_teratas"; ?>" id="lebih_banyak">Tampilkan lebih banyak</button>
      </div>

    </div>
    <!--end dari class container_laporan_teratas  -->

    <hr>

  </div> <!-- end dari class container_laporan -->
</body>

</html>