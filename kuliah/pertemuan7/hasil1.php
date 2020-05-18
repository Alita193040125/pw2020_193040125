<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>No 2</title>
</head>
<body>
    <h3>Form Pendaftaran Peserta Workshop</h3>
    <form action="uts3.php" method="POST">
        <table>
            <tr>
                <td><label>No. Ktp</label></td>
                <td> : </td>
                <td><input type="number" name="ktp"></td>
            </tr>
            <tr>
                <td><label>Nama</label></td>
                <td> : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : </td>
                <td><textarea name="alamat" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><button type="submit">Daftar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>