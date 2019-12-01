<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="Login">
        <center>
            <p class="tulisan_login">LOGIN</p>
        </center>
        <br>
        <form action="Login.php" method="post" onSubmit="return validasi()">
            <div class="form_login">
                <table>
                    <tr>
                        <td><img class="m-user" src="user2.png"> </img></td>
                        <td><input type="text" name="username" placeholder="Username" /></td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="form_login">
                <table>
                    <tr>
                        <td><img class="m-pass" src="pass.png"> </img></td>
                        <td><input type="text" name="password" placeholder="Password" /></td>
                    </tr>
                </table>
            </div>
            <br>
            <br>
            <div>
                <center>
                    <input type="submit" value="Login" class="tombol">
                </center>
            </div>
            <br>
            <div>
                <center>
                    <label>Lupa Password?</label>
                    <input type="reset" value="Reset" class="reset">
                </center>
        </form>
    </div>
    </div>

</body>

</html>