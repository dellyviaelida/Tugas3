<!DOCTYPE html>
<html>
<head>
  <title>TABEL</title>
  <style type="text/css">
  	body{
		background-color: aliceblue;
    }
    h2{
    	font-family: candara;
    	text-align: center;
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
	}
  </style>
</head>
<body>
	<h2>Tabel Data Mahasiswa Yang Mengumpulkan Tugas</h2>
	<div class="badan">
		<table width="200" border="1" cellspacing="0" cellpadding="10" align="center">
		    <tr style="background-color: gainsboro">
		    	<th width="150">NIM</th>
		        <th width="150">Nama</th>
		        <th width="50">Kelas</th>
		        <th width="150">No. Handphone</th>
		        <th width="150">E-mail</th>
		        <th width="100">Mata Kuliah</th>
		        <th width="50">Jenis File</th>
		        <th width="150">Nama File</th>
		    </tr>
			<?php
			$file_handle = fopen("file.txt", "r");

			while (!feof($file_handle) ) {
			    $line_of_text = fgets($file_handle);
			    $parts = explode('|', $line_of_text);
				echo "<tr><td>$parts[0]</td>";
			    if (isset($parts[1])) {
						echo "<td>$parts[1]</td>";
					}
					if (isset($parts[2])) {
						echo "<td>$parts[2]</td>";
					}
					if (isset($parts[3])) {
						echo "<td>$parts[3]</td>";
					}
					if (isset($parts[4])) {
						echo "<td>$parts[4]</td>";
					}
					if (isset($parts[5])) {
						echo "<td>$parts[5]</td>";
					}
					if (isset($parts[6])) {
						echo "<td>$parts[6]</td>";
					}
					if (isset($parts[7])) {
						echo "<td>$parts[7]</td></tr><tr>&nbsp;</tr>";
					}
			}
			fclose($file_handle);
			?>
		</table>
	</div>
</body>
</html>