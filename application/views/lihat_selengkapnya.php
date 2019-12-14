<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lihat Selengkapnya</title>

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/style_selengkapnya.css">



</head>

<body>
  <div class="judul">
    <h1>SIMPLE LAPOR!</h1>
  </div>

  <div class="detail">
    <h3>Detail Laporan</h3>
  </div>
  <div class="container_lihat_selengkapnya">

    <?php
    foreach ($laporan as $x) {
      ?>
      <hr>
      <table>
        <tr>
          <td colspan="4">
            <div class="highlight_laporan">
              <?php echo $x->isi_laporan; ?>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <div class="lampiran_laporan">
              <?php
                $arr = explode('.', $x->lampiran);
                $get_extensi = end($arr);

                if ($get_extensi == "png" || $get_extensi == "jpg" || $get_extensi == "jpeg") {
                  ?>

                <img width="300" src=<?php echo base_url() . "assets/upload/" . $x->lampiran; ?> alt="xxx.jpg">
              <?php
                } else {
                  ?>
                Lampiran: <a href="<?php echo base_url() . "assets/upload/" . $x->lampiran;  ?>" id="judul_lampiran"><?php echo $x->lampiran; ?></a>
              <?php
                }
                ?>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="selengkapnya">
              Waktu: <span id="tanggal_laporan"><?php echo $x->tanggal; ?></span>
            </div>
          </td>
          <td>
            <div class="selengkapnya">
              Aspek: <span id="aspek_laporan"><?php echo $x->aspek; ?></span>
            </div>
          </td>

          <td>
            <div class="edit">
              <!-- <a href="">Edit Laporan</a> -->
              <?php echo anchor('Lihat_selengkapnya/edit_laporan/' . $x->id_laporan, 'Edit Laporan'); ?>


            </div>
          </td>

          <td>
            <div class="hapus" onclick="return confirm('Apakah kamu yakin ingin menghapus laporan?')">
              <!-- <a href=  >Hapus Laporan/Komentar<b> X</b></a> -->
              <?php echo anchor('Lihat_selengkapnya/hapus/' . $x->id_laporan, 'Hapus Laporan/Komentar'); ?>
            </div>
          </td>


        </tr>


      </table>
    <?php } ?>


  </div>
</body>

</html>