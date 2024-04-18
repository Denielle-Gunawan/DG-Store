<!DOCTYPE html>
<html>

<head>
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
</head>

<body>
    <form action="validasi.php" method="POST">
        <h1 class="gradient-text">Selamat Datang!</h1>
        <table>
            <tr>
                <td class="login">LOGIN</td>
            </tr>
            <tr>
                <td><input type="text" name="username" placeholder="Enter your username" class="username"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Enter your password" class="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="submit">LOGIN</button>
                    <button type="reset" class="reset">CLEAR</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>