<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Daftar Akun</title>
</head>

<body>
    <div class="register">
        <center>
            <p class="tulisan_daftar">DAFTAR</p>
        </center>
        <form action="Daftar.php" method="POST">

            <div class="form_daftar">
                <table>
                    <tr>
                        <td><label class="m-60">Nama</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder="Nama Lengkap" /></td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="form_daftar">
                <table>
                    <tr>
                        <td><label class="m-30">Username</label></td>
                        <td>:</td>
                        <td><input type="text" name="username" placeholder="Username" /></td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="form_daftar">
                <table>
                    <tr>
                        <td><label class="m-60">Email</label></td>
                        <td>:</td>
                        <td><input type="email" name="email" placeholder="E-mail" class="form_daftar" /></td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="form_daftar">
                <td><label class="m-35">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password" class="form_daftar" /></td>
            </div>
            <br>
            <div class="form_daftar">

                <td><label class="m-5">Jenis kelamin</label></td>
                <td>:</td>
                <td><label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label></td>
            </div>
            <br>
            <br>
            <div class="form_daftar">
                <center>
                    <input type="submit" name="submit" value="Daftar" class="tombol" />
                </center>
            </div>
        </form>
    </div>
</body>

</html>