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
            <div>
                <center>
                    <label>Username</label>
                    <br>
                    <input type="text" name="username" placeholder="username" class="form_login" id="username" />
                </center>
            </div>
            <br>
            <br>
            <div>
                <center>
                    <label>Password</label>
                    <br>
                    <input type="password" name="password" placeholder="password" class="form_login" id="password" />
                </center>
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
</body>

</html>