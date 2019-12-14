<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akun</title>

    <style media="screen">
        body{
          margin: 0px;
        }

        .header{
            font-family: arial;
            font-size : 15px;
            text-decoration:none;
            float: right;
            padding-right: 30px;
        }

        . header b{
            text-decoration: none;
        }

        
        .navigasi a{
            font-family: arial;
            font-size : 15px;
            text-decoration:none
            
        }
        
        .judul{
          text-align: center;
          padding-top: 50px;
        }
        #inline {
            margin: 15px auto;
            padding: 0;
        }

        #inline li {
            display: inline;
            margin-left: 15px;
            margin-right: 15px;
        }

        input[type=text]{

            width: 750px;
        }

        .laporan{
            padding-top: 10px;
            text-align: center;
        }
        .container_laporan{
        padding-top: 20px;
        padding-left: 100px;
        padding-right: 100px;
        padding-bottom: 10px;
        }

        .container_laporan_teratas{
        padding-top: 20px;
        padding-left: 30px;
        padding-right: 30px;
        }

        .highlight_laporan{
        padding-top: 20px;
        padding-bottom: 50px;
        }

        .waktu_laporan{
        text-align: right;
        }

        #lihat{
        padding-left: 30px;
        }

        .selengkapnya{
        text-align: right;
        }

        table{
        width: 1100px;
        }

    </style>
</head>

<body>
    <div class="header"></br>
        <a href="">KELUAR</a>
    </div>

    <div class="judul">
        <h1>SIMPLE LAPOR!</h1>
    </div>

    <div class="navigasi">
        <div class="container">
            <ul id="inline">
                <li><a href="">Lihat Laporan</a></li>
                <li><a href="">Buat Laporan</a></li>
            </ul>
        </div>
            <hr width="28%" align="left">
    </div>
    /* <?php
    foreach($laporan as $x ){
        echo $x->isi_laporan;
    }
    ?>

<div class="container_laporan_teratas">

    <?php
    foreach($laporan as $x){
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
            <a id="lihat" href="<?php echo $x->id_laporan; ?>">Lihat Selengkapnya > </a>
            </div>
        </td>
        </tr>


    </table>
    <?php } ?>


    
    
</body>
</html>