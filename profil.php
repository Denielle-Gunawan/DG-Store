<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil</title>
    <link rel="stylesheet" href="profil.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $id = $_SESSION["id"];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $user = mysqli_fetch_array($query);
    ?>

    <div>
        <form action="update-profil.php" method="POST">
            <h1>Profil</h1>

            <input type="hidden" name="id" value="<?= $id ?>">

            <table>
                <tr>
                    <td class="username">Username</td>
                    <td><input readonly type="text" name="username" value="<?= $user["username"] ?>" class="tu"></td>
                </tr>
                <tr>
                    <td class="password">Passwword Baru</td>
                    <td class="tp"><input required type="password" name="new_password"></td>
                </tr>
                <tr>
                    <td class="password-ulangi">Ulangi Passwword Baru</td>
                    <td class="tpu"><input required type="password" name="confirm_password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="submit">SIMPAN</button>
                        <button type="reset" class="reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>