<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="register_process.php" method="post">
        <label for="user">Pilih User:</label>
        <select name="user" id="user" onchange="changeuser()">
            <option value="mahasiswa">Mahasiswa</option>
            <option value="dosen">Dosen</option>
        </select><br>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <div id="mahasiswaFields">
            <label for="nim">NIM:</label>
            <input type="text" name="nim" required><br>
        </div>

        <div id="dosenFields" style="display:none;">
            <label for="nip">NIP:</label>
            <input type="text" name="nip" required><br>
        </div>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" name="jenis_kelamin" required><br>

        <label for="no_tlp">No Telpon:</label>
        <input type="text" name="no_tlp" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Daftar</button>
    </form>

    <script>
        function changeuser() {
            var user = document.getElementById("user").value;
            var mahasiswaFields = document.getElementById("mahasiswaFields");
            var dosenFields = document.getElementById("dosenFields");

            if (user === "mahasiswa") {
                mahasiswaFields.style.display = "block";
                dosenFields.style.display = "none";

            } else if (user === "dosen") {
                mahasiswaFields.style.display = "none";
                dosenFields.style.display = "block";
            }
        }
    </script>
</body>
</html>
