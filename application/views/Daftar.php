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
                        <td><img class="m-username" src="user2.png"> </img></td>
                        <td>:</td>
                        <td><input type="text" name="username" placeholder="Username" /></td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="form_daftar">
                <table>
                    <tr>
                        <td><img class="m-email" src="mail.png"></img></td>
                        <td>:</td>
                        <td><input type="email" name="email" placeholder="E-mail" class="form_daftar" /></td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="form_daftar">
                <td><img class="m-password" src="pass.png"> </img> </td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password" class="form_daftar" /></td>
            </div>
            <br>

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