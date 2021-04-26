<h2> List Kontak </h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>Id</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Pesan</th>
    </tr>
    <?php
    //membuat koneksi
    include 'conn.php';

    //mengambil data pada tabel kontak
    $kontak = mysqli_query($koneksi, "SELECT * FROM kontak");
    $no=1;
    //menampilkan data kontak
    foreach ($kontak as $row){
        echo "<tr>
                <td>$no</td>
                <td>".$row['id']."</td>
                <td>".$row['nama']."</td>
                <td>".$row['jenis_kelamin']."</td>
                <td>".$row['email']."</td>
                <td>".$row['alamat']."</td>
                <td>".$row['kota']."</td>
                <td>".$row['pesan']."</td>
            </tr>";
        //no bertambah otomatis (looping)
        $no++;
    }
    ?>
</table>