<h3> Form Input Data Mahasiswa</h3>
<hr>
<form method="post" action="">
    <table>
        <tr>
            <td>NPM</td>
            <td><input type="text" name="txtNpm"></td>
        </tr>
         <tr>
            <td>Nama Mahasiswa</td>
            <td><input type="text" name="txtNama"></td>
        </tr>
         <tr>
            <td>Jenjang</td>
            <td><Input type="text" name="txtJenjang"></td>
        </tr>
        <tr>
             <td></td>
            <td><Input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php
include "Konek.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $simpan = mysqli_query($konek, "INSERT INTO mahasiswa (npm,nama,jenjang)
        VALUES('$_POST[txtNpm]','$_POST[txtNama]','$_POST[txtJenjang]')");

    if($simpan){
        header('location:data.php');
    }else{
        echo "Gagal menyimpan data..."; 
    }
}

?>