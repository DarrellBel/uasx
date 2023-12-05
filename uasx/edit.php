<?php
    include 'koneksi.php';

    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $tanggallahir = $_POST['tanggallahir'];
        $umur = $_POST['umur'];
        $alamat = $_POST['alamat'];
    


    $query=($conn->query "update mahasiswa set nama='$nama',jurusan='$jurusan',email='$email',password='$password',email='$email',jeniskelamin='$jeniskelamin',tanggallahir='$tanggallahir,'umur='$umur','alamat='$alamat'");
    
    header("location:read.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
   
    <h2>Data Mahasiswa</h2>
    <?php
            
            $data=mysqli_query($conn,"select * from mahasiswa where id='$id'");

            while($d=mysqli_fetch_array($data)){
        ?>

                <form action="read.php" method="post">
                    <table width="25%" border="0">
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name=nama value="<?php echo $d['nama'] ?>" ></td>
                        </tr>
                        <tr> 
                            <td>Jurusan</td>
                            <td><input type="text" name="jurusan" value="<?php echo $d['jurusan'] ?>"></td>
                        </tr>

                        <tr> 
                            <td>Email</td>
                            <td><input type="email" name="email" value="<?php echo $d['email'] ?>"></td>
                        </tr>

                        <tr> 
                            <td>Password</td>
                            <td><input type="text" name="password" value="<?php echo $d['password'] ?>"></td>
                        </tr>

                        <tr> 
                            <td>Jenis Kelamin</td>
                            <td><input type="text" name="jeniskelamin" value="<?php echo $d['jeniskelamin'] ?>"></td>
                        </tr>
                        <tr> 
                            <td>Tanggal Lahir</td>
                            <td><input type="date" name="tanggallahir" value="<?php echo $d['tanggallahir'] ?>"></td>
                        </tr>
                        <tr> 
                            <td>Umur</td>
                            <td><input type="number" name="umur" value="<?php echo $d['umur'] ?>"></td>
                        </tr>
                        <tr> 
                            <td>Alamat</td>
                            <td><input type="textarea" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
                        </tr>
                        <tr> 
                            <td></td>
                            <td><input type="submit" name="submit" value="Edit"></td>
                        </tr>
                    </table>
                </form>
                <?php
            }
        ?>

    <style>
    button.edit-button {
        background-color: #4CAF50; /* Green color for Edit button */
        color: white;
    }

    button.delete-button {
        background-color: #f44336; /* Red color for Delete button */
        color: white;
    }
</style>

   
</body>
</html>
