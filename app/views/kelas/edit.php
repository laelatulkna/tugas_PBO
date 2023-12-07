<h2>Edit Kelas</h2>

<form action="<?php echo URL; ?>/kelas/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_kelas']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama_kelas" value="<?php echo $data['row']['nama_kelas']; ?>" required></td>
        </tr>
        <tr>
            <td>WARNA</td>
            <td><input type="text" name="warna_kelas" value="<?php echo $data['row']['warna_kelas']; ?>" required></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="text" name="jumlah_kelas" value="<?php echo $data['row']['jumlah_kelas']; ?>" required></td>
        </tr>
        <tr>
            <td>ANGKATAN</td>
            <td><input type="text" name="angkatan_kelas" value="<?php echo $data['row']['angkatan_kelas']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>