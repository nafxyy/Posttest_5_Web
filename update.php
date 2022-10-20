<?php
    require "koneksi.php";

    $id = $_GET['id'];
    // $mem = $_GET['mem'];
    // $result = mysqli_query($conn, "SELECT * FROM datamember WHERE id=$id");

    // $member = [];

    // while ($row = mysqli_fetch_assoc($result)){
    //     $member[] = $row;
    // }

    // $member = $mem;

    if (isset($_POST['update'])){
        $nama = $_POST['nama'];
        $nomor = $_POST['nomor'];
        $umur = $_POST['umur'];
        $alamat = $_POST['Alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tier = $_POST['member'];

        $sql = "UPDATE datamember SET nama ='$nama', nomor ='$nomor', umur = '$umur', alamat ='$alamat', kelamin = '$jenis_kelamin', tier = '$tier' WHERE id=$id";

        $result = mysqli_query($conn, $sql);

        if ($result){
            echo "
            <script> 
                alert ('Data Member Berhasil Diperbarui!');
                document.location.href = 'tampilan.php';
            </script>";
        } else {
            echo "
            <script> 
                alert ('gagal diupdate');
                document.location.href = 'update.php';
            </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Thrift Memberships</title>
        <link rel="stylesheet" href="./dist/css/style.css"?v=<?php echo time(); ?>">
        <script src="js.js"></script>
        
    </head>

    <body class="member">
    <header1>
        <section class="navigation">
            <div id="container">
                <div id="box-navigation">
                    <div class="box">
                        <h1><a href="index.php" style = "color: black;">NAF STORE</a></h1>
                    </div>
                    <div id="boxes">
                        <ul>
                            <h1>MEMBERSHIP PROGRAM</h1>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
</header1>

        <b id = "titleform">EDIT DATA MEMBERSHIP</b>
        <div class = "containerform">
            <form action = <?php echo "update.php?id=$id"?> method = "POST" name = "form1">
                <table id = "formtable">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type = "text" name = "nama" id = 'nama' size = "25" required></td>
                    </tr>

                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td><input type = "text" name = "nomor" id = 'nomor' size = "25" required></td>
                    </tr>

                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input type = "number" name = "umur" id = 'umur' size = "25" required></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type = "text" name = "Alamat" id = 'alamat' size = "25" required></td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name = "jenis_kelamin" id = 'jeniskelamin' required value = "Laki-Laki" checked = "">Laki-Laki</input>
                            <input type="radio" name = "jenis_kelamin" id = 'jeniskelamin' required value = "Perempuan" checked = "">Perempuan</input>
                        </td>
                    </tr>

                    <tr>
                        <td>Jenis Membership</td>
                        <td>:</td>
                        <td>
                            <select name="member">
                                <option id = 'tier' required value = "Bronze">Bronze</option>
                                <option id = 'tier' required value = "Silver">Silver</option>
                                <option id = 'tier' required value = "Gold">Gold</option>
                                <option id = 'tier' required value = "Platinum">Platinum</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan = 1 class="butonsub" id = "butonlihat"><div class="tombol"><a href="tampilan.php">Lihat Data</a></td>
                        <td colspan = 8 class="butonsub"><input type="submit" name="update" style="height:1cm; width:4cm; margin: 0; background-color:white; padding-left 10px;"></input></td>
                    </tr>

                    
                </table>
            </form>
        </div>

            
        <h1 id="judulmem">Membership Benefits</h1>
        <div>
            <div class="boxmem">
                <div class="box1">
                    <img src="./logo/logo1.png" alt="">
                    <h1>Extra Discount</h1>
                    <p>Dapatkan Tambahan Diskop Tiap Hari</p>
                </div>

                <div class="box1">
                    <img src="./logo/logo2.png" alt="">
                    <h1>Priority Service</h1>
                    <p>Pelayanan Prioritas Spesial Member</p>
                </div>

                <div class="box1">
                    <img src="./logo/logo3.png" alt="">
                    <h1>Delivery Discount</h1>
                    <p>Tambahan Diskon Pengiriman Khusus Member</p>
                </div>

                <div class="box1">
                    <img src="./logo/logo4.png" alt="">
                    <h1>New Catalog Everyday</h1>
                    <p>Info Terkait Katalog Baru Setiap Harinya</p>
                </div>
            </div>
        </div>
    </section>

        <footer>
            <section class="foot">
                <div id="footer">
                    <p>&copy; Owned by Naf-Store 2022</p>
                </div>
            </section>
        </footer>
    </body>
</html>