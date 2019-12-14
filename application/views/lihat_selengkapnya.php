<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Selengkapnya</title>
    <style media="screen">
        .judul{
          text-align: center;
          padding-top: 50px;
        }

        .detail{
            padding-left: 30px;
        }
        
        body{
          margin: 0px;
        }
        

        .container_lihat_selengkapnya{
          padding-top: 20px;
          padding-left: 30px;
          padding-right: 30px;
        }

        .highlight_laporan{
          padding-top: 20px;
          padding-bottom: 50px;
        }

        .waktu_laporan{
          text-align: left;
        }

        #lihat{
          padding-left: 30px;
        }

        .selengkapnya{
          text-align: left;

    
        }
        .hapus{
          text-align: right;
          text-decoration: none;
        }

        .edit{
          text-align: right;
          text-decoration: none;
        }

        table{
          width: 1100px;
        }

    </style>



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
            foreach($laporan as $x){
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
                      Lampiran: <a href="<?php echo $x->lampiran; ?>" id="judul_lampiran"><?php echo $x->lampiran; ?></a>
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
                        <?php echo anchor('Lihat_selengkapnya/edit_laporan/'.$x->id_laporan,'Edit Laporan'); ?>

                        
                      </div>
                    </td>

                    <td>
                    <div class="hapus" onclick="return confirm('Apakah kamu yakin ingin menghapus laporan?')">
                        <!-- <a href=  >Hapus Laporan/Komentar<b> X</b></a> -->
                        <?php echo anchor('Lihat_selengkapnya/hapus/'.$x->id_laporan,'Hapus Laporan/Komentar'); ?>
                      </div>
                    </td>

                    
              </tr>


            </table>
          <?php } ?>


        </div>
</body>
</html>