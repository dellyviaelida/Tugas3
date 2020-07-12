<?php 
echo '<h2>Form Validation</h2>';
echo '<pre>';
if (isset($_POST['nama']) && isset($_POST['nik']) && isset($_POST['alamat']) && isset($_POST['telp']) && isset($_POST['gender']) && isset($_POST['agama']) && isset($_POST['hobi']) && isset($_POST['moto']))
{
   $nama=$_POST['nama'];
   $nik=$_POST['nik'];
   $alamat=$_POST['alamat'];
   $telp=$_POST['telp'];
   $gender=$_POST['gender'];
   $agama=$_POST['agama'];
   $hobi=$_POST['hobi'];
   $moto=$_POST['moto'];
}
if(empty($nama))
{
   echo "Nama harus di isi<br>";
}
else
{
   if (is_numeric($nama))
   {
   		echo "Nama harus berupa huruf<br>";
   }
   else
   {
      echo "Nama 		: $nama <br>";
   }
}
if (empty($nik)){
    echo "NIK harus di isi<br>";
}
else {
	if(strlen($nik) != 16){
    	echo "NIK harus 16 digit<br>";
    }else{
		echo "NIK 		: $nik <br>";
    } 
}
if (empty($alamat)){
    echo "Alamat harus di isi<br>";
}
else {
	echo "Alamat 		: $alamat <br>";
}
if (empty($telp)){
    echo "No Telepon harus di isi<br>";
}
else {
	if(strlen($telp) < 10){
    	echo "No Telepon harus lebih dari 9 digit<br>";
    }else{
    	echo "No Telepon 	: $telp <br>";
    }
}
if (empty($gender)){
    echo "Gender harus di isi<br>";
}
else {
    echo "Gender 		: $gender <br>";
}
if (empty($agama)){
	echo "Agama harus di isi<br>";
}
else {
    echo "Agama 		: $agama <br>";
}
if (empty($hobi)){
    echo "Hobby harus di isi<br>";	
}
else {
	echo "Hobby 		: $hobi <br>";
}
if (empty($moto)){
    echo "Moto hidup harus di isi<br>";
}
else {
    echo "Moto hidup 	: $moto <br>";
}
echo '</pre>';
 ?>