<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />

<body>
    <div class="pendaftaran">
        <!-- <div class="contein"> -->
            <img class="contein" src="juantika.png" alt="">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <?php
            $nama = "";
            $telp = "";
            $jurusan = "";
            $alasan = "";
            $motto = "";
            $foto = "";


            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = test_input($_POST["nama"]);
                $telp = test_input($_POST["telp"]);
                $jurusan = test_input($_POST["jurusan"]);
                $motto = test_input($_POST["motto"]);
                $foto = test_input($_POST["foto"]);
            }

            $namaErr = "";
            $telpErr = "";
            $jurusanErr = "";
            $alasanErr = "";
            $mottoErr = "";
            $fotoErr = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["nama"])) {
                    $namaErr = "Harus Mengisi Nama";
                } else {
                    $nama = test_input($_POST["nama"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/", $nama)) {
                        $namaErr = "Hanya Boleh Mengisi Nama dengan Huruf!";
                    }
                }

                if (empty($_POST["telp"])) {
                    $telpErr = "Harus Mengisi Nomor Telepon";
                } else {
                    $telp = test_input($_POST["telp"]);
                    if (!preg_match('/^[0-9]+$/', $telp)) {
                        $telpErr = "Tolong Isi Nomor Telepon Dengan Benar!";
                    }
                }

                if (empty($_POST["jurusan"])) {
                    $jurusanErr = "Harus Mengisi Asal Jurusan";
                } else {
                    $jurusan = test_input($_POST["jurusan"]);
                }

                if (empty($_POST["alasan"])) {
                    $alasanErr = "Harus Mengisi Alasan";
                } else {
                    $alasan = test_input($_POST["alasan"]);
                }

                if (empty($_POST["motto"])) {
                    $mottoErr = "Harus Mengisi Motto";
                } else {
                    $motto = test_input($_POST["motto"]);
                }

                if (empty($_POST["foto"])) {
                    $fotoErr = "Harus melampirkan Foto";
                } else {
                    $foto = test_input($_POST["foto"]);
                }
            }
            ?>
            <div class="title">Pendaftaran</div>
            <div class="detil">
                <div class="input-box">
                    <span class="details">Nama</span>  
                    <input type="text" name="nama" placeholder="Masukan nama lengkap...." required>
                    <span class="error"><?php echo $namaErr; ?></span>
                    <br>
                    <br>
                </div>
                <div class="input-box">
                <span class="details">Nomor Telepon</span> 
                    <input type="text" name="telp" placeholder="Masukan nomor telepon aktif...." required>
                    <span class="error"><?php echo $telpErr; ?></span>
                    <br>
                    <br>
                </div>
                <div class="select-option">
                <span>Jurusan</span>  
                    <select  class="select" type="text" name="jurusan" required>
                        <option value="0">PILIH JURUSAN</option>
                        <option value="1">ELEKTRONIKA</option>
                        <option value="2">MEKATRONIKA</option>
                        <option value="3">MESIN</option>
                        <option value="4">DGM</option> 
                        <option value="5">TEKSTIL</option>
                        <option value="6">OTOMOTIF</option>
                        <option value="7">TJKT</option>
                        <option value="8">PPLG</option>
                        <option value="9">BP</option>
                    <span class="error"><?php echo $jurusanErr; ?></span>
                    </select>
                    <br>
                    <br>
                </div>
                <div class="input-box">
                    <span class="details">Alasan</span> 
                    <input type="text" name="alasan" id="alasan" placeholder="Masukan alasan anda...." required>
                    <span class="error"><?php echo $alasanErr; ?></span>
                    <br>
                    <br>
                </div>
                <div class="input-box">
                    <span class="details">Motto</span>  
                    <input type="text" name="motto" id="motto" placeholder="Masukan motto anda...." required>
                    <span class="error"><?php echo $mottoErr; ?></span>
                    <br>
                    <br>
                </div>
                <div class="input-boxs">
                    <span class="details">Foto</span> 
                    <input type="file" name="foto" >
                    <span class="error"><?php echo $fotoErr; ?></span>
                    <br>
                    <br>
                </div>
                <div class="kirim">
                    <button>Kirim</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</body>
</html>