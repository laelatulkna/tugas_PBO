<h2>Input Kelas</h2>

<form action="<?php echo URL; ?>/kelas/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama_kelas" required></td>
        </tr>
        <tr>
            <td>WARNA</td>
            <td><input type="text" name="warna_kelas" required></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="text" name="jumlah_kelas" required></td>
        </tr>
        <tr>
            <td>ANGKATAN</td>
            <td><input type="text" name="angkatan_kelas" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>