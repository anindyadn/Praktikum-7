<!DOCTYPE html>
<html>
    <head>
        <title> Form Tambah Kontak </title>
    </head>
    <body>
        <form method="POST" action="simpankontak.php">
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jenis_kelamin"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Kota</td>
                    <td><input type="text" name="kota"></td>
                </tr>
                <tr>
                    <td>Pesan</td>
                    <td><input type="text" name="pesan"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>