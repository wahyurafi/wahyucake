<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Form Login</title>
        <link rel="stylesheet" type="text/css" href="stylelog.css">
    </head>
    <body>
        <div class="kotak_login">
            <p class="tulisan_login"> Silahkan Login </p>
            <form action="ceklogin.php" method="post" role="form">
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Username" autocomplete="off" required>
                <label>Password</label>
                <input type="password" name="password" class="form_login" placeholder="Password" autocomplete="off" required>
                <input type="submit" class="tombol_login" value="Login">
            </form>
        </div>
    </body>
</html>
        