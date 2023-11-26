<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="user"> Pilih user          :</label>
        <select name="user" id="user">
            <option value="mahasiswa">Mahasiswa</option>
            <option value="dosen">Dosen</option>
            <option value="admin">Admin</option>
            <option value="kajur">Kajur</option>
        </select><br>

        <label for="username">Username  :</label>
        <input type="text" name="username" required><br>

        <label for="password">Password  :</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
    
</body>
</html>
