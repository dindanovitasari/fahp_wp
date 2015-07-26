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
				<li>
					<a href="perhitungan_manual.php">Perhitungan Manual</a>
				</li>
				<li class="active">
					<a>Pengujian</a>
					<div>
						<a href="pengujian1.php">Pengujian 1</a>
						<a href="pengujian2.php">Pengujian 2</a>
					</div>
				</li>
				<li>
					<a href="tentang.php">Tentang</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="highlight">
			<div class="clearfix">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6"><center><h3>Pengujian 2 Versi 1</h3></center></div>
					<div class="col-md-3"></div>
				</div>
	<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<center>
			<table class="table table-bordered">
				<tr bgcolor="#BB2004">
					<td><center>
					  <strong><font color="#ECEDE9">No</font></strong>
					</center></td>
					<td><center>
					  <strong><font color="#ECEDE9">Nama Universitas</font></strong>
					</center></td>
					<td><center>
					  <strong><font color="#ECEDE9">Academic Reputation</font></strong>
					</center></td>
					<td><center>
					  <strong><font color="#ECEDE9">Employer Reputation</font></strong>
					</center></td>
					<td><center>
					  <strong><font color="#ECEDE9">Faculty/Student Ratio</font></strong>
					</center></td>
					<td><center>
					  <strong><font color="#ECEDE9">Citations per Faculty</font></strong>
					</center></td>
					<td><center>
					  <strong><font color="#ECEDE9">International Student Ratio</font></strong>
					</center></td>
					<td><center>
					  <strong><font color="#ECEDE9">International Staff Ratio</font></strong>
					</center></td></font>
				</tr>
				<tr>
					<td>1.</td>
					<td>Universitas Gadjah Mada</td>
					<td><div align="center">74.9</div></td>
					<td><div align="center">58.1</div></td>
					<td><div align="center">26.7</div></td>
					<td><div align="center">27.8</div></td>
					<td><div align="center">8.5</div></td>
					<td><div align="center">6.7</div></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Universiti Malaya (UM)</td>
					<td><div align="center">90.1</div></td>
					<td><div align="center">88.3</div></td>
					<td><div align="center">98.2</div></td>
					<td><div align="center">30.7</div></td>
					<td><div align="center">99.8</div></td>
					<td><div align="center">97.7</div></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Universiti Teknologi Malaysia (UTM)</td>
					<td><div align="center">65.3</div></td>
					<td><div align="center">64.5</div></td>
					<td><div align="center">87.3</div></td>
					<td><div align="center">8.6</div></td>
					<td><div align="center">99.9</div></td>
					<td><div align="center">95.2</div></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Airlangga University</td>
					<td><div align="center">50.7</div></td>
					<td><div align="center">42.9</div></td>
					<td><div align="center">37.1</div></td>
					<td><div align="center">100.0</div></td>
					<td><div align="center">3.1</div></td>
					<td><div align="center">9.4</div></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Nanyang Technological University (NTU)</td>
					<td><div align="center">99.9</div></td>
					<td><div align="center">100.0</div></td>
					<td><div align="center">95.4</div></td>
					<td><div align="center">94.4</div></td>
					<td><div align="center">100.0</div></td>
					<td><div align="center">100.0</div></td>
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
				<tr bgcolor="#BB2004">
					<td><center><strong><font color="#ECEDE9">Urutan</font></strong></center></td>
                    <td><center><strong><font color="#ECEDE9">Nama Universitas</font></strong></center></td>
                    <td><center><strong><font color="#ECEDE9">Hasil WP</font></strong></center></td>
				</tr>
	<?php
		$jumlah_universitas = 5;
		$jumlah_kategori = 6;
		$data = array(
			array(74.9,58.1,26.7,27.8,8.5,6.7),
			array(90.1,88.3,98.2,30.7,99.8,97.7),
			array(65.3,64.5,87.3,8.6,99.9,95.2),
			array(50.7,42.9,37.1,100.0,3.1,9.4),
			array(99.9,100.0,95.4,94.4,100.0,100.0)
		);
		$matrik = array(
					//academic reputation
					array(
						array(1,1,1),
						array(0.5,0.667,1),
						array(0.333,0.4,0.5),
						array(2,2.5,3),
						array(0.4,0.5,0.667),
						array(2,2.5,3)
					),
					//employer reputation
					array(
						array(1,1.5,2),
						array(1,1,1),
						array(1,1.5,2),
						array(2,2.5,3),
						array(0.4,0.5,0.667),
						array(0.667,1,2)
					),
					//faculty / student ratio
					array(
						array(2,2.5,3),
						array(0.5,0.667,1),
						array(1,1,1),
						array(2,1.5,3),
						array(0.4,0.5,0.667),
						array(0.4,0.5,0.667)
					),
					//citations per faculty
					array(
						array(0.333,0.4,0.5),
						array(0.333,0.4,0.5),
						array(0.333,0.4,0.5),
						array(1,1,1),
						array(0.286,0.333,0.4),
						array(0.286,0.333,0.4)
					),
					//international student ratio
					array(
						array(1.5,2,2.5),
						array(1.5,2,2.5),
						array(1.5,2,2.5),
						array(2.5,3,3.5),
						array(1,1,1),						
						array(0.5,1,1.5)
					),
					//international staff ratio
					array(
						array(0.333,0.4,0.5),
						array(0.5,1,1.5),
						array(1.5,2,2.5),
						array(2.5,3,3.5),
						array(0.667,1,2),
						array(1,1,1)											
					)
				);
		//menghitung sum
		$sum = array();
		for($i=0;$i<6;$i++){
			for($j=0;$j<3;$j++){
				$sum[$i][$j]=0;
				for($k=0;$k<6;$k++){					
					$sum[$i][$j] += $matrik[$k][$i][$j];
				}
			}
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
		//WP
		$univ = array('Universitas Gadjah Mada','Universiti Malaya (UM)',
			'Universiti Teknologi Malaysia (UTM)','Airlangga university','Nanyang Technological University (NTU)');
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
		for($i=0;$i<$jumlah_universitas;$i++){
			for($j=0;$j<$jumlah_universitas;$j++){
				if($ranking[$i]==$sorting[$j]) $index = $j+1;
			}
			$nomer = $i + 1;
			echo '<tr><td><center>'.$nomer.'.</center></td><td>'.$univ[$index-1].'</td><td><center>'.$ranking[$i].'</center></td></tr>';
		}
	?>
			</table>
			</center>
		</div>
		<div class="col-md-1"></div>
	</div>
	</div>
	</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2015 Sistem Pendukung Keputusan Kelas A Kelompok 2 <br> Perankingan Universitas Dengan Fuzzy AHP dan WP
				</p>
			</div>
		</div>
		</div>
  </body>
</html>