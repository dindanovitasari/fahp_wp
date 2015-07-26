<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>University Ranks</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo"></div>
			<span class="logo"><a href="index.html"><img src="images/logooo.png"  height="100" width="370"></a></span>
			<ul class="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="active">
					<a href="perhitungan_manual.php">Perhitungan Manual</a>
				</li>
				<li>
					<a href="news.html">Pengujian</a>
					<div>
						<a href="singlepost.html">News Single Post</a>
						<a href="singlepost.html">News Single Post</a>
					</div>
				</li>
				<li>
					<a href="contact.html">Tentang</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6"><center><h3>Perhitungan Manual</h3></center></div>
		<div class="col-md-3"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<center>
			<table class="table table-bordered">
				<tr>
					<td>No</td>
					<td>Nama Universitas</td>
					<td>Academic Reputation</td>
					<td>Employer Reputation</td>
					<td>Faculty/Student Ratio</td>
					<td>Citations per Faculty</td>
					<td>International Student Ratio</td>
					<td>International Staff Ratio</td>
				</tr>
				<tr>
					<td>1.</td>
					<td>Universitas Gadjah Mada</td>
					<td>74.9</td>
					<td>58.1</td>
					<td>26.7</td>
					<td>27.8</td>
					<td>8.5</td>
					<td>6.7</td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Universitas Indonesia</td>
					<td>80.9</td>
					<td>88.6</td>
					<td>73.8</td>
					<td>27.1</td>
					<td>12.4</td>
					<td>75.7</td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Airlangga University</td>
					<td>50.7</td>
					<td>42.9</td>
					<td>37.1</td>
					<td>100.0</td>
					<td>3.1</td>
					<td>9.4</td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Universiti Malaya (UM)</td>
					<td>90.1</td>
					<td>88.3</td>
					<td>98.2</td>
					<td>30.7</td>
					<td>99.8</td>
					<td>97.7</td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Universiti Kebangsaan Malaysia (UKM)</td>
					<td>81.8</td>
					<td>62.9</td>
					<td>78.5</td>
					<td>14.6</td>
					<td>90.0</td>
					<td>100.0</td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Universiti Sains Malaysia (USM)</td>
					<td>81.7</td>
					<td>72.1</td>
					<td>56.0</td>
					<td>37.0</td>
					<td>81.8</td>
					<td>52.2</td>
				</tr>
				<tr>
					<td>7.</td>
					<td>Univesiti Putra Malaysia (UPM)</td>
					<td>74.2</td>
					<td>63.2</td>
					<td>59.4</td>
					<td>20.7</td>
					<td>89.4</td>
					<td>63.5</td>
				</tr>
				<tr>
					<td>8.</td>
					<td>Universiti Teknologi Malaysia (UTM)</td>
					<td>65.3</td>
					<td>64.5</td>
					<td>87.3</td>
					<td>8.6</td>
					<td>99.9</td>
					<td>95.2</td>
				</tr>
				<tr>
					<td>9.</td>
					<td>International Islamic University Malaysia (IIUM)</td>
					<td>50.9</td>
					<td>52.3</td>
					<td>53.4</td>
					<td>8.1</td>
					<td>99.9</td>
					<td>88.8</td>
				</tr>
				<tr>
					<td>10.</td>
					<td>Nanyang Technological University (NTU)</td>
					<td>99.9</td>
					<td>100.0</td>
					<td>95.4</td>
					<td>94.4</td>
					<td>100.0</td>
					<td>100.0</td>
				</tr>
			</table>
			</center>
		</div>
		<div class="col-md-1"></div>
	</div>
	<?php
		$jumlah_universitas = 10;
		$jumlah_kategori = 6;
		$data = array(
			array(74.9,58.1,26.7,27.8,8.5,6.7),
			array(80.9,88.6,73.8,27.1,12.4,75.7),
			array(50.7,42.9,37.1,100.0,3.1,9.4),
			array(90.1,88.3,98.2,30.7,99.8,97.7),
			array(81.8,62.9,78.5,14.6,90.0,100.0),
			array(81.7,72.1,56.0,37.0,81.8,52.2),
			array(74.2,63.2,59.4,20.7,89.4,63.5),
			array(65.3,64.5,87.3,8.6,99.9,95.2),
			array(50.9,52.3,53.4,8.1,99.9,88.8),
			array(99.9,100.0,95.4,94.4,100.0,100.0)
		);
		$kategori = array("Academic Reputation", "Employer Reputation", "Faculty/Student Ratio", "Citations per faculty", "International Student Ratio",
							"International Staff Ratio");
		$matrik = array(
					//academic reputation
					array(
						array(1,1,1),
						array(0.333,0.4,0.5),
						array(0.286,0.333,0.4),
						array(2.5,3,3.5),
						array(0.333,0.4,0.5),
						array(0.286,0.333,0.4)
					),
					//employer reputation
					array(
						array(2,2.5,3),
						array(1,1,1),
						array(0.5,0.667,1),
						array(1,1.5,2),
						array(0.4,0.5,0.667),
						array(0.5,0.667,1)
					),
					//faculty / student ratio
					array(
						array(2.5,3,3.5),
						array(1,1.5,2),
						array(1,1,1),
						array(0.4,0.5,0.667),
						array(0.333,0.4,0.5),
						array(0.4,0.5,0.667)
					),
					//citations per faculty
					array(
						array(0.286,0.333,0.4),
						array(0.5,0.667,1),
						array(1.5,2,2.5),
						array(1,1,1),
						array(0.4,0.5,0.667),
						array(2,2.5,3)
					),
					//international student ratio
					array(
						array(2,2.5,3),
						array(1.5,2,2.5),
						array(2,2.5,3),
						array(1.5,2,2.5),
						array(1,1,1),						
						array(0.667,1,2)
					),
					//international staff ratio
					array(
						array(2.5,3,3.5),
						array(1,1.5,2),
						array(1.5,2,2.5),
						array(0.333,0.4,0.5),
						array(0.5,1,1.5),
						array(1,1,1)											
					)
				);
		//menghitung sum
		$sum = array();
		for($i=0;$i<6;$i++){
			echo '<tr>';
			for($j=0;$j<3;$j++){
				$sum[$i][$j]=0;
				for($k=0;$k<6;$k++){					
					$sum[$i][$j] += $matrik[$k][$i][$j];
				}
			}
			echo '</tr>';
		}
		//menghitung total
		$total = array();
		for($i=0;$i<6;$i++){
			for($j=0;$j<3;$j++){
				$total[$i][$j]=0;
				for($k=0;$k<6;$k++){
					$total[$i][$j] += $matrik[$i][$k][$j];
				}
			}
		}
	?>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<center>
			<table class="table table-bordered">
	<?php
		//menampilkan matrik fuzzy triangular
		for($m=0;$m<8;$m++){ //baris
			echo '<tr>';
			for($i=0;$i<8;$i++){ //kategori
				if($m==0){
					if($i==0) echo '<td colspan = 3 align="center"></td>';
					else if($i==7) echo '<td colspan = 3 align="center">SUM</td>';
					else echo '<td colspan = 3 align="center">'.$kategori[$i-1].'</td>';
				}
				else if($m==7){
					if($i==0) echo '<td colspan = 3 align="center">SUM</td>';
					else{
						if($i==7) echo '<td colspan = 3 align="center"></td>';
						else{
							for($j=0;$j<3;$j++){
								echo '<td>'.$total[$i-1][$j].'</td>';
							}
						}
					}
				}
				else{
					if($i==0){
						if($m==0) echo '<td colspan = 3 align="center"></td>';
						else echo '<td colspan = 3 align="center">'.$kategori[$m-1].'</td>';
					}
					else{
						for($j=0;$j<3;$j++){
							if($i==7) echo '<td>'.$sum[$m-1][$j].'</td>';
							else echo '<td>'.$matrik[$i-1][$m-1][$j].'</td>';
						}
					}
				}
			}
			echo '</tr>';
		}
	?>
			</table>
			</center>
		</div>
		<div class="col-md-1"></div>
	</div>
	<?php
		//menghitung sum parameter
		$sum_parameter = array();
		for($i=0;$i<6;$i++){
			$sum_parameter[$i] = 0;
			for($j=0;$j<3;$j++){
				$sum_parameter[$i] += $total[$i][$j];
			}
		}
		//menghitung sum urutan
		$sum_urutan = array();
		for($i=0;$i<3;$i++){
			$sum_urutan[$i] = 0;
			for($j=0;$j<6;$j++){
				$sum_urutan[$i] += $total[$j][$i];
			}
		}
	?>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<center>
			<table class="table table-bordered">
	<?php
		for($i=0;$i<7;$i++){
			echo '<tr>';
			for($j=0;$j<4;$j++){
				if($i==6){
					if($j==0) echo '<td>SUM</td>';
					//else if($j==4) echo '<td></td>';
					else echo '<td>'.$sum_urutan[$j-1].'</td>';
				}
				else{
					if($j==0) echo '<td>'.$kategori[$i].'</td>';
					//else if($j==4) echo '<td>'.$sum_parameter[$i].'</td>';
					else echo '<td>'.$total[$i][$j-1].'</td>';
				}
			}
			echo '</tr>';
		}
	?>
			</table>
			</center>
		</div>
		<div class="col-md-1"></div>
	</div>
	<?php
		//normalisasi
		$normalisasi = array();
		for($i=0;$i<6;$i++){
			for($j=0;$j<3;$j++){
				$normalisasi[$i][$j] = $sum[$i][$j]*1/$sum_urutan[$j];
			}
		}
		//menghitung s
		$s = array();
		for($i=0;$i<6;$i++){
			$s[$i] = 0;
			for($j=0;$j<3;$j++){
				$s[$i] += $normalisasi[$i][$j];
			}
			$s[$i] = $s[$i]/3;
		}
	?>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<center>
			<table class="table table-bordered">
	<?php
		for($i=0;$i<7;$i++){
			echo '<tr>';
			if($i==0) echo '<td></td><td colspan = 3 align = "center">Normalisasi</td><td align = "center">X</td>';
			else{
				for($j=0;$j<5;$j++){
					if($j==0) echo '<td>'.$kategori[$i-1].'</td>';
					else if($j==4) echo '<td>'.$s[$i-1].'</td>';
					else echo '<td>'.$normalisasi[$i-1][$j-1].'</td>';
				}
			}
			echo '</tr>';
		}
	?>
			</table>
			</center>
		</div>
		<div class="col-md-1"></div>
	</div>
	<?php
		//WP
		$univ = array('Universitas Gadjah Mada','Universitas Indonesia','Airlangga university',
						'Universiti Malaya (UM)','Universiti Kebangsaan Malaysia (UKM)','Universiti Sains Malaysia (USM)',
						'Univesiti Putra Malaysia (UPM)','Universiti Teknologi Malaysia (UTM)',
						'International Islamic University Malaysia (IIUM)','Nanyang Technological University (NTU)');
		$hasil = array();
		$hasil2 = array();
		$total = 0;
		for($i=0;$i<$jumlah_universitas;$i++){
			$hasil2[$i]=1;
			for($j=0;$j<$jumlah_kategori;$j++){
				$hasil[$i][$j] = pow($data[$i][$j],$s[$j]);
				$hasil2[$i] *= $hasil[$i][$j];
			}
			$total += $hasil2[$i]; 
		}
		for($i=0;$i<$jumlah_universitas;$i++){
			$ranking[$i] = $hasil2[$i]/$total;
			$sorting[$i] = $ranking[$i];
		}
		rsort($ranking);
	?>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<center>
			<table class="table table-bordered">
			<tr>
				<td></td>
				<td colspan = 6 align = "center">S</td>
				<td>Hasil</td>
				<td>Ranking</td>
			</tr>
	<?php
		for($i=0;$i<$jumlah_universitas;$i++){ 
			echo '<tr>';
			for($j=0;$j<$jumlah_kategori+3;$j++){
				if($j==0) echo '<td>'.$univ[$i].'</td>';
				else if($j==$jumlah_kategori+1) echo '<td>'.$hasil2[$i].'</td>';
				else if($j==$jumlah_kategori+2) echo '<td>'.$sorting[$i].'</td>';
				else echo '<td>'.$hasil[$i][$j-1].'</td>';
				
			}
			echo '</tr>';
		}
	?>
			<tr>
				<td></td>
				<td colspan = 6 align = "right">Total</td>
				<td><?php echo $total; ?></td>
				<td></td>
			</tr>
			</table>
			</center>
		</div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<center>
			<table class="table table-bordered">
				<tr>
					<td>Urutan</td>
					<td>Nama Universitas</td>
					<td>Hasil Perankingan</td>
				</tr>
	<?php
		//menampilkan hasil ranking
		for($i=0;$i<$jumlah_universitas;$i++){
			for($j=0;$j<$jumlah_universitas;$j++){
				if($ranking[$i]==$sorting[$j]) $index = $j+1;
			}
			$nomer = $i + 1;
			echo '<tr><td>'.$nomer.'</td><td>'.$univ[$index-1].'</td><td>'.$ranking[$i].'</td></tr>';
		}
	?>
			</table>
			</center>
		</div>
		<div class="col-md-1"></div>
	</div>
  </body>
</html>