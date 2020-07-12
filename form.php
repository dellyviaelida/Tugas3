<!DOCTYPE html>
<html>
<head>
  <title>FORM VALIDATION</title>
  <style type="text/css">
    body{
      background-color: aliceblue;
    }
    h2{
      font-family: candara;
      letter-spacing: 10px;
    }
    .badan{
      position: relative;
      max-width: 80%;
      margin-left: 10%;
      margin-right: 10%;
      margin-top: 60px;
      border-radius: 6px;
      background-color: ghostwhite;
      box-shadow: 0 0 7px 0px rgba(136, 146, 146, 0.2);
      padding: 30px;
      font-family: 'Helvetica', sans-serif;
      font-size: 16px;
    }
    .button{
      font-family: 'Helvetica', sans-serif;
      position: relative;
      text-decoration: none;
      border-radius: 3px;
      margin-top: 20PX;
      box-shadow: 0 0 7px 0px skyblue;
      border: 1px solid skyblue;
      color: black;
      padding: 5px 10px;
      background-color: white;
      cursor: pointer;
    }
  </style>
</head>
<script type="text/javascript">
  function tombol(){
    window.location.href="tabel.php";  
  }
</script>
<body>
  <h2 align="center">Form Validation</h2>
  <div class="badan">
    <?php 
    if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['kls']) && isset($_POST['telp']) && isset($_POST['email']) && isset($_POST['matkul']) && isset($_POST['jfile'])){
       $nim=$_POST['nim'];
       $nama=$_POST['nama'];
       $kls=$_POST['kls'];
       $telp=$_POST['telp'];
       $email=$_POST['email'];
       $matkul=$_POST['matkul'];
       $jfile=$_POST['jfile'];
    }
    echo "<br><table border=0>";
    if (empty($nim)){
        echo "<tr><td><b>WARNING</b> NIM harus di isi</td></tr>";
    }
    else {
      if(strlen($nim) != 10){
          echo "<tr><td><b>WARNING</b> NIM harus 10 digit</td></tr>";
      }else{
        echo "<tr><td>NIM</td><td>$nim</td></tr>";
      } 
    }
    if(empty($nama))
    {
       echo "<tr><td><b>WARNING</b> Nama harus di isi</td></tr>";
    }
    else
    {
       if (is_numeric($nama))
       {
          echo "<tr><td><b>WARNING</b> Nama harus berupa huruf</td></tr>";
       }
       else
       {
          echo "<tr><td>Nama</td><td>$nama </td></tr>";
       }
    }

    if (empty($kls)){
        echo "<tr><td><b>WARNING</b> Kelas harus di isi</td></tr>";
    }
    else {
      echo "<tr><td>Kelas</td><td>$kls </td></tr>";
    }
    if (empty($telp)){
        echo "<tr><td><b>WARNING</b> No Handphone harus di isi</td></tr>";
    }
    else {
      if(strlen($telp) < 10){
          echo "<tr><td><b>WARNING</b> No Handphone harus lebih dari 9 digit</td></tr>";
        }else{
          echo "<tr><td>No Handphone</td><td>$telp </td></tr>";
        }
    }
    if (empty($email)){
        echo "<tr><td><b>WARNING</b> E-mail harus di isi</td></tr>";
    }
    else {
        echo "<tr><td>E-mail</td><td>$email </td></tr>";
    }
    if (empty($matkul)){
      echo "<tr><td><b>WARNING</b> Mata Kuliah harus di isi</td></tr>";
    }
    else {
        echo "<tr><td>Mata Kuliah</td><td>$matkul </td></tr>";
    }
    if ($jfile==""){
        echo "<tr><td><b>WARNING</b> Jenis File harus di isi</td></tr>";  
    }
    else {
      echo "<tr><td>Jenis File</td><td>$jfile</td></tr>";
    }
    $lokasi = $_FILES['upfile']['tmp_name'];
    $nama_file = $_FILES['upfile']['name'];
    $direktori = "C:xampp/htdocs/ta/$nama_file";
    if (move_uploaded_file($lokasi, $direktori)) {
      echo "<tr><td>Nama File</td><td>$nama_file</td></tr>";
    }
    else{
      echo "<tr><td><b>WARNING</b> File gagal terupload</td></tr>";
    }
    echo "</table>";

    if (!empty($nim) && !empty($nama) && !empty($kls) && !empty($telp) && !empty($email) && !empty($matkul) && !empty($jfile) && !empty($nama_file)){
        $fp = fopen("file.txt", "a+");
        fputs($fp,"$nim|$nama|$kls|$telp|$email|$matkul|$jfile|$nama_file\n");
        fclose($fp);
        echo "<button class=button onclick=tombol()>Lihat Tabel</a></button><br>";
    }
    else{
      echo "<br>Anda harus mengisi form sesuai dengan aturan <a href=form.html> Klik Disini</a> Untuk isi form kembali";
    }

     ?>
  </div>

</body>
</html>