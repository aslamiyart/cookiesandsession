<?php
require 'functions.php';

$id = $_GET["id"];

$dataMhs = query_getData("SELECT * FROM mahasiswa WHERE idMahasiswa = $id");
if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "<script>
        alert('Data berhasil diubah! ☺');
        document.location.href='dataMhs.php';
        </script>";
    }else {
        echo "<script>
        alert('Data Gagal Diubah!');
        </script>";
        var_dump($connect);
    }
}
if (isset($_POST["batal"])) {
    header("Location: dataMhs.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Ubah</title>
    <style>
    body,html {
        background-image: url("bghome.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        height: 100%;
        margin: 0;
    }
    </style>
</head>

<body>
    <div class="container" style="height: 100%;" align="center">
        <table border="0" style="width: 50%;">
            <thead style="height: 5%" align="center">
                <tr style="height: 10%">
                    <td>
                        <h2 style="font-family: 'Lucida Sans'">Ubah data</h2>
                    </td>
                </tr>
            </thead>
            <tbody align="center">
                <tr style="height: 70%">
                    <td>
                        <form method="post" action="" align="left" style="width: 80%; padding: 20px; border: 0px solid #f1f1f1; background-color: rgba(0, 0, 51, 0.2);">
                            <input class="form-control" type="hidden" name="id" value="<?= $dataMhs[0]["idMahasiswa"] ?>">
                            <div class="form-group">
                                <input type="number" class="form-control" id="nim" name="nim" placeholder="NIM" required 
                                value="<?= $dataMhs[0]["nim"] ?>">
                                <small id="nimHelp" class="form-text">Masukan NIM.</small>
                            </div>
                            <div class="form-group">
                                <input type="namespace" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required
                                value="<?= $dataMhs[0]["nama"] ?>">
                                <small id="nameHelp" class="form-text">Nama lengkap mahasiswa.</small>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                value="<?= $dataMhs[0]["email"] ?>">
                                <small id="emailHelp" class="form-text">Masukan email Mahasiswa.</small>
                            </div>
                            <div class="form-group">
                                <select id="jurusan" class="form-control" name="jurusan" required value="<?= $dataMhs[0]["jurusan"] ?>">
                                    <option>Jurusan</option>
                                    <option value="TI" <?php if($dataMhs[0]["jurusan"]=="TI"){echo "selected";}?>>TEKNIK INFORMATIKA</option>
                                    <option value="SI" <?php if($dataMhs[0]["jurusan"]=="SI"){echo "selected";}?>>SISTEM INFORMASI</option>
                                    <option value="DP" <?php if($dataMhs[0]["jurusan"]=="DP"){echo "selected";}?>>DESAIN PRODUK</option>
                                    <option value="DKV" <?php if($dataMhs[0]["jurusan"]=="DKV"){echo "selected";}?>>DESAIN KOMUNIKASI VISUAL</option>
                                </select>
                                <small id="GenderHelp" class="form-text">Pilih Jurusan.</small>
                            </div>
                            <div class="form-group">
                                <select id="jenjang" class="form-control" name="jenjang" required>
                                    <option>Jenjang</option>
                                    <option value="D3" <?php if($dataMhs[0]["jenjang"]=="D3"){echo "selected";}?>>D3</option>
                                    <option value="S1" <?php if($dataMhs[0]["jenjang"]=="S1"){echo "selected";}?>>S1</option>
                                    <option value="S2" <?php if($dataMhs[0]["jenjang"]=="S2"){echo "selected";}?>>S2</option>
                                </select>
                                <small id="GenderHelp" class="form-text">Pilih Jenjang.</small>
                            </div>
                            <input type="text" class="form-control" id="kota_asal" name="kota_asal" placeholder="Kota Asal" required
                            value="<?= $dataMhs[0]["kota_asal"] ?>">
                            <small id="kota_asalHelp" class="form-text">Masukan asal kota kelahiran.</small>
                            <br />
                            </div>
                            <div align="right">
                                <button type="submit" class="btn btn-dark" name="batal">Batalkan</button>
                                <button type="submit" class="btn btn-dark" name="submit">Ubah Data</button>
                            </div>
                        </form>
                    </td>
                </tr>
            <tr>
                <td></td>
            </tr>
            </tbody>
            <tfoot style="height: 5%;" align="center">
                <tr>
                    <td style="font-family: 'Courier New', Courier, monospace; font-size: 8pt; padding-top: 10px">Trilogi 2024</td>
                </tr>
            </tfoot>
        </table>
    </div>
 </body>

</html>