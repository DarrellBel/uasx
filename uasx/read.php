<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Mahasiswa</title>
  <link rel="stylesheet" href="read.css">
</head>
<body>
<header>
  <!--Navbar-->
  <div class="navbar">
    <header class="logo">
      <img src="https://openclipart.org/image/2400px/svg_to_png/8051/ryanlerch-Book-and-Pen.png" alt="MAHASISWA Logo">
      <span>MAHASISWA</span>
    </header>
  <!--Sidebar-->
 
  <div class="sidebar">
    <header class="logo">
      <img src="9269766.png" alt="MAHASISWA Logo">
      <span>MAHASISWA</span>
    </header>
    <ul>
      <span></span>
      <li><a href="register.php"><i class="fas fa-qrcode"></i>Pendaftaran</a></li>
      <li><a href="read.php"><i class="fas fa-link"></i>Daftar Mahasiswa</a></li>
      <li><a href="about.html"><i class="fas fa-stream"></i>Tentang Kami</a></li>
    </ul>
  </div>

    <div class="main-content">
  <h2>Data Mahasiswa</h2>
    
    <table id="userTable">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Email</th>
          <th>Password</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>
          <th>Umur</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
        
      </thead>
      <tbody> 
        <?php  
          $result = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY 'id' ASC");

          while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['jurusan']."</td>";
            echo "<td>".$user_data['email']."</td>";  
            echo "<td>".$user_data['password']."</td>";  
            echo "<td>".$user_data['jeniskelamin']."</td>"; 
            echo "<td>".$user_data['tanggallahir']."</td>";
            echo "<td>".$user_data['umur']."</td>";
            echo "<td>".$user_data['alamat']."</td>"; 
            echo "<td>";
            echo "<a class='edit-btn' href='#?id=$user_data[id]'>Edit</a>";
            echo "<a class='delete-btn' href='delete.php?id=$user_data[id]'>Delete</a>";
            echo "</td></tr>";        
        }
        ?>
      </tbody>
    </table>
  </div>

    <br>
    <br>
    <br>
    <br>
 <footer>
    <p>&copy; 2023 MAHASISWA. All rights reserved.</p>
  </footer>

</body>
</html>
