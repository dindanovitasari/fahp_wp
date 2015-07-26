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
		<div class="col-md-6"><center><h3>Pengujian 1</h3></center></div>
		<div class="col-md-3"></div>
	</div>
	<br>
	<?php
		$jumlah_universitas = 5;
		$jumlah_kategori = 6;
		$jumlah_pengujian = 5;
		$pengujian_univ = array(
							array('Universitas Gadjah Mada','Universiti Malaya (UM)','Universiti Teknologi Malaysia (UTM)','Airlangga university','Nanyang Technological University (NTU)'),
							array('Universitas Indonesia','Nanyang Technological University (NTU)','Universiti Malaya (UM)','Universiti Sains Malaysia (USM)','Universitas Gadjah Mada'),
							array('Universitas Gadjah Mada','Universitas Indonesia','Airlangga university','Universiti Malaya (UM)','Universiti Kebangsaan Malaysia (UKM)'),
							array('Universiti Sains Malaysia (USM)','Univesiti Putra Malaysia (UPM)','Universiti Teknologi Malaysia (UTM)','International Islamic University Malaysia (IIUM)','Nanyang Technological University (NTU)'),
							array('Airlangga university','Universiti Malaya (UM)','Universiti Kebangsaan Malaysia (UKM)','Universiti Sains Malaysia (USM)','Univesiti Putra Malaysia (UPM)')
						);
		$pengujian_data = array(
							array(
								array(74.9,58.1,26.7,27.8,8.5,6.7),
								array(90.1,88.3,98.2,30.7,99.8,97.7),
								array(65.3,64.5,87.3,8.6,99.9,95.2),
								array(50.7,42.9,37.1,100.0,3.1,9.4),
								array(99.9,100.0,95.4,94.4,100.0,100.0)
							),
							array(
								array(80.9,88.6,73.8,27.1,12.4,75.7),
								array(99.9,100.0,95.4,94.4,100.0,100.0),
								array(90.1,88.3,98.2,30.7,99.8,97.7),
								array(81.7,72.1,56.0,37.0,81.8,52.2),
								array(74.9,58.1,26.7,27.8,8.5,6.7)
							),
							array(
								array(74.9,58.1,26.7,27.8,8.5,6.7),
								array(80.9,88.6,73.8,27.1,12.4,75.7),	
								array(50.7,42.9,37.1,100.0,3.1,9.4),
								array(90.1,88.3,98.2,30.7,99.8,97.7),
								array(81.8,62.9,78.5,14.6,90.0,100.0)	
							),
							array(
								array(81.7,72.1,56.0,37.0,81.8,52.2),	
								array(74.2,63.2,59.4,20.7,89.4,63.5),	
								array(65.3,64.5,87.3,8.6,99.9,95.2),	
								array(50.9,52.3,53.4,8.1,99.9,88.8),	
								array(99.9,100.0,95.4,94.4,100.0,100.0)	
							),
							array(
								array(50.7,42.9,37.1,100.0,3.1,9.4),	
								array(90.1,88.3,98.2,30.7,99.8,97.7),	
								array(81.8,62.9,78.5,14.6,90.0,100.0),	
								array(81.7,72.1,56.0,37.0,81.8,52.2),	
								array(74.2,63.2,59.4,20.7,89.4,63.5)
							)
						);
		$kategori = array("Academic Reputation", "Employer Reputation", "Faculty/Student Ratio", "Citations per faculty", "International Student Ratio",
							"International Staff Ratio");
		$matrik = array(
					//academic reputation
					array(
						array(1,1,1),
						array(0.222,0.167,0.133),
						array(0.167,0.133,0.111),
						array(6,7.5,9),
						array(0.222,0.167,0.133),
						array(0.167,0.133,0.111)
					),
					//employer reputation
					array(
						array(4.5,6,7.5),
						array(1,1,1),
						array(0.667,0.333,0.222),
						array(1.5,3,4.5),
						array(0.333,0.222,0.167),
						array(0.667,0.333,0.222)
					),
					//faculty / student ratio
					array(
						array(6,7.5,9),
						array(1.5,3,4.5),
						array(1,1,1),
						array(0.333,0.222,0.167),
						array(0.222,0.17,0.133),
						array(0.333,0.222,0.167)
					),
					//citations per faculty
					array(
						array(0.167,0.13,0.111),
						array(0.667,0.333,0.222),
						array(3,4.5,6),
						array(1,1,1),
						array(0.333,0.222,0.167),
						array(4.5,6,7.5)
					),
					//international student ratio
					array(
						array(4.5,6,7.5),
						array(3,4.5,6),
						array(4.5,6,7.5),
						array(3,4.5,6),
						array(1,1,1),						
						array(0,0.667,0.333)
					),
					//international staff ratio
					array(
						array(6,7.5,9),
						array(1.5,3,4.5),
						array(3,4.5,6),
						array(0.222,0.17,0.1333),
						array(0,1.5,3),
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
	for($ulang=0;$ulang<$jumlah_pengujian;$ulang++){
		$hasil = array();
		$hasil2 = array();
		$total1 = 0;
		for($i=0;$i<$jumlah_universitas;$i++){
			$hasil2[$i]=1;
			for($j=0;$j<$jumlah_kategori;$j++){
				$hasil[$i][$j] = pow($pengujian_data[$ulang][$i][$j],$s[$j]);
				$hasil2[$i] *= $hasil[$i][$j];
			}
			$total1 += $hasil2[$i]; 
		}
		for($i=0;$i<$jumlah_universitas;$i++){
			$ranking[$i] = $hasil2[$i]/$total1;
			$sorting[$i] = $ranking[$i];
		}
		rsort($ranking);
	?>
	<p><strong>Versi <?php echo $ulang+1; ?></strong></p>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<center>
			<table class="table table-bordered">
	<?php
		for($i=0;$i<$jumlah_universitas+1;$i++){
			if($i==0) echo '<tr bgcolor="#BB2004">';
			else echo '<tr>';
			for($j=0;$j<$jumlah_kategori+2;$j++){
				if($i==0){
					if($j==0) echo '<td><center><strong><font color="#ECEDE9">No</font></strong></center></td>';
					else if($j==1) echo '<td><center><strong><font color="#ECEDE9">Nama Universitas</font></strong></center></td>';
					else echo '<td><center><strong><font color="#ECEDE9">'.$kategori[$j-2].'</font></strong></center></td>';
				}
				else{
					if($j==0) echo '<td><center>'.$i.'.</center></td>';
					else if($j==1) echo '<td>'.$pengujian_univ[$ulang][$i-1].'</td>';
					else echo '<td><center>'.$pengujian_data[$ulang][$i-1][$j-2].'</center></td>';
				}
			}
			echo '</tr>';
		}
	?>
			</table>
			</center>
		</div>
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
		for($i=0;$i<$jumlah_universitas;$i++){
			for($j=0;$j<$jumlah_universitas;$j++){
				if($ranking[$i]==$sorting[$j]) $index = $j+1;
			}
			$nomer = $i + 1;
			echo '<tr><td><center>'.$nomer.'</center></td><td>'.$pengujian_univ[$ulang][$index-1].'</td><td>'.$ranking[$i].'</td></tr>';
		}
	?>
			</table>
			</center>
		</div>
		<div class="col-md-1"></div>
	</div>
	<?php
		}
	?>
			</div>
		</div>
		<!--<div class="featured">
			<h2>Why Choose Us?</h2>
			<ul class="clearfix">
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/meeting.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Our lawyers</b> Our website templates are created with inspiration, checked for quality and originality.
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/handshake.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>get to know us more</b> Just browse through all our Free Website Templates and ﬁnd what you’re looking for.
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/smile.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>what we offer</b> Join the discussion on our forum and meet other people in the community.
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/family-small.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>get in touch with us</b> And we love the challenge of doing something diferent and something special.
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Latest News</h4>
				<p>
					This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link.
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> the address city, state 1111
				</p>
				<p>
					<span>Phone:</span> (+20) 000 222 999
				</p>
				<p>
					<span>Email:</span> info@freewebsitetemplates.com
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
				</p>
				<a href="http://www.freewebsitetemplates.com/misc/contact/" class="subscribe">Click to send us an email</a>
			</div>
		</div>-->
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