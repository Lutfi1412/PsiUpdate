<?php
include_once 'db/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Web PSI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/logo.jpeg">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<style type="text/css">
		/* Mark input boxes that gets an error on validation: */
		input.invalid {
			background-color: #ffdddd;
		}

		/* Hide all steps by default: */
		.tab {
			display: none;
		}

		/* Make circles that indicate the steps of the form: */
		.step {
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbbbbb;
			border: none;
			border-radius: 50%;
			display: inline-block;
			opacity: 0.5;
		}

		/* Mark the active step: */
		.step.active {
			opacity: 1;
		}

		/* Mark the steps that are finished and valid: */
		.step.finish {
			background-color: #4CAF50;
		}

		/* style css */
		.soal {
			font-family: Poppins-Bold;
			font-size: 25px;
			color: #666666;
			text-transform: uppercase;
			line-height: 1.2;
			text-align: center;
		}

		.tab p {
			font-family: Poppins-Regular;
			font-size: 15px;
			line-height: 1.7;
			color: #666666;
			margin: 0px;
			text-align: justify;
		}

		.selectOne {
			font-family: Poppins-Regular;
			font-size: 16px !important;
			line-height: 1.7;
			color: #666666;
			margin: 0px;
			margin-left: -118px !important;
			text-align: left !important;
		}

		.tab .form-check-label {
			font-family: Poppins-Regular;
			font-size: 16px;
			line-height: 1.7;
			color: #666666;
			margin: 0px;
		}

		.tab input[type="radio"] {
			margin-right: 10px;
		}

		#sizeOptions {
			border-collapse: collapse;
			padding: 10px;
		}

		#sizeOptions td {
			padding: 10px;
		}

		#sizeOptions tr {
			border-bottom: solid 1px #40E0D0;
		}

		.hover {
			background-color: #40E0D0;
		}

		.active {
			background-color: #40E0D0;
		}

		.image-title {
			display: none;
		}

		.btn-success-custom {
			color: #fff;
			background-color: #3498db;
			border-color: #3498db;
		}

		.tulisan {
			margin-left: -30px !important;
		}

		@media (max-width: 768px) {
			.handphone {
				font-size: 12px;
			}

			.background {
				background-size: contain;
			}

			.tulisan {

				margin-left: 0 !important;
			}

			.tulisan p {
				font-size: 12px !important;
			}

			.selectOne {
				font-size: 17px !important;
				margin-left: 15px !important;
			}

			pre {
				white-space: pre-wrap;
				word-wrap: break-word;
				text-align: left;
				padding: 10px;
				line-height: 1;
				margin-left: 120px !important;
			}

			.soalmobile {
				white-space: pre-wrap;
				word-wrap: break-word;
				text-align: center;
				padding: 10px;
				line-height: 1;
				padding-right: 100px !important;
				margin-left: -10px !important;
			}

			.anakke {
				margin-left: -15px !important;
			}

			.dari {
				margin-left: 0 !important;
			}

			.laki {
				margin-left: -16px !important;
			}

			.inputmobile {
				margin-left: 85px !important;
			}
		}
	</style>
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 shadow">
				<div class="login100-form-title background" style="background-image: url(images/bg-gundar.png);">
					<span class="login100-form-title-1 handphone">
						Personal Style Inventory
					</span>
				</div>

				<form id="regForm" class="login100-form validate-form" action="alert.php" method="post">
					<!-- Panduan Pengerjaan 1 -->
					<div class="tab">
						<!-- <p class="selectOne mb-1">Panduan Pengerjaan :</p><br> -->
						<div style="margin-left: -105px" class="tulisan">
							<p style="text-align: center;" class="tulisan">
								<!-- 1. Berdo'alah sebelum memulai mengerjakan<br> -->
								Isikan Data Diri Anda <b>Dengan Benar</b>, Klik Next
							</p>
							<hr>
						</div>
						<br>
						<div class="wrap-input100 validate-input m-b-18" data-validate="Nama Lengkap is required">
							<span class="label-input100">Nama </span>
							<input class="input100" type="text" name="nama" placeholder="Input Nama Lengkap">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-18" data-validate="NPM is required">
							<span class="label-input100">NPM</span>
							<input class="input100" type="number" name="npm" placeholder="Input NPM">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-18" data-validate="Kelas is required">
							<span class="label-input100">Kelas</span>
							<input class="input100" type="text" name="kelas" placeholder="Input Kelas">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-18" data-validate="Suku is required">
							<span class="label-input100">Suku</span>
							<input class="input100" type="text" name="suku" placeholder="Input Suku">
							<span class="focus-input100"></span>
						</div>
						<div class="d-flex justify-content-between row">
							<div class="wrap-input100 validate-input m-b-18 col-sm-4 mx-3" data-validate="Anak ke is required">
								<span class="label-input100 anakke">Anak ke</span>
								<input class="input100 anakke" type="text" name="anak_ke" placeholder="Input Anak ke">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 validate-input m-b-18 col-sm-4" data-validate="Dari is required">
								<span class="label-input100">Dari</span>
								<input class="input100 dari" type="text" name="jumlah_anak" placeholder="Input Dari">
								<span class="focus-input100"></span>
							</div>
						</div>
						<div class=" validate-input m-b-5 d-flex " data-validate="Suku is required">
							<span class="label-input100">Gender</span>
						</div>
						<div class="row m-b-5">
							<label class="form-check-label mx-3 my-2 col">
								<input type="radio" class="laki form-check-input" name="jenis_kelamin" value="L">Laki - laki
							</label>
							<label class="form-check-label mx-3 my-2 col">
								<input type="radio" class="form-check-input" name="jenis_kelamin" value="P">Perempuan
							</label>
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-18" data-validate="Umur is required">
							<span class="label-input100">Umur</span>
							<input class="input100" type="number" name="usia" placeholder="Input Umur">
							<span class="focus-input100"></span>
						</div>
						<div class="validate-input m-b-18" data-validate="Penidikan terakhir is required">
							<span class="label-input100">Pendidikan terakhir</span>
							<select class="custom-select col-md-12 mt-3" name="pendidikan_terakhir" id="" data-validate="Pendidikan terakhir is required">
								<option selected disabled>Pilih pendidikan terakhir</option>
								<option value="sd">SD</option>
								<option value="smp">SMP</option>
								<option value="sma">SMA</option>
								<option value="d3">D3</option>
								<option value="s1">Sarjana</option>
							</select>

							<span class="focus-input100"></span>
						</div>
					</div>

					<!-- Panduan Pengerjaan 2 -->
					<div class="tab">
						<p class="selectOne mb-1">Panduan Pengerjaan :</p><br>
						<div style="margin-left: -615px">
							<p class="panduan">
							<pre style="font-size:16px">
							1. Anda diminta untuk memilih salah satu dari enam respon
							   jawaban tersebut. Setelah selesai mengerjakan satu pernyataan, 
							   klik <b>next</b> untuk melanjutkan ke pernyataan selanjutnya.
							</pre>
							<pre style="font-size:16px">
							2. Jawablah pernyataan-pernyataan tersebut sejujur - jujurnya 
							   sesuai dengan kondisi Anda saat ini, tidak ada jawaban yang
							   salah atau benar dalam test ini.
							</pre>
							</p>
						</div>
					</div>

					<!-- Next -->
					<div class="tab">
						<p class="selectOne mb-1"><b>Klik NEXT untuk memulai mengerjakan soal</b></p>
					</div>

					<!-- Soal 1 -->
					<?php
					$no = 1;
					$query = "SELECT * from soal_psi";
					$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
					while ($value = mysqli_fetch_array($sql)) { ?>
						<div class="tab">
							<div class="judulsoal">
								<p class="mb-2" style=" text-align: center; margin-left: -118px; font-weight:bold font-size:16px !important">Soal No. <?= $no++ ?></p>
								<h6 class="soalmobile" style="text-align: center; margin-left: -118px;"><?= $value['soal'] ?></h6><br>
							</div>
							<!-- <p class="selectOne mb-1">Select One:</p> -->
							<div style="margin-left: -105px !important; width: 500px">
								<table id="sizeOptions" width="100%">
									<tr class="active">
										<td>
											<label class="form-check-label">
												<input type="radio" class="form-check-input inputmobile" name="<?= $value['id'] ?>" value="1" checked>Sangat Tidak Setuju
											</label>
										</td>
									</tr>
									<tr>
										<td>
											<label class="form-check-label">
												<input type="radio" class="form-check-input inputmobile" name="<?= $value['id'] ?>" value="2">Tidak Setuju
											</label>
										</td>
									</tr>
									<tr>
										<td>
											<label class="form-check-label">
												<input type="radio" class="form-check-input inputmobile" name="<?= $value['id'] ?>" value="3">Agak Tidak Setuju
											</label>
										</td>
									</tr>
									<tr>
										<td>
											<label class="form-check-label">
												<input type="radio" class="form-check-input inputmobile" name="<?= $value['id'] ?>" value="4">Agak Setuju
											</label>
										</td>
									</tr>
									<tr>
										<td>
											<label class="form-check-label">
												<input type="radio" class="form-check-input inputmobile" name="<?= $value['id'] ?>" value="5">Setuju
											</label>
										</td>
									</tr>
									<tr>
										<td>
											<label class="form-check-label">
												<input type="radio" class="form-check-input inputmobile" name="<?= $value['id'] ?>" value="6">Sangat Setuju
											</label>
										</td>
									</tr>
								</table>
							</div>
						</div>
					<?php
					}
					?>


					<div class="container">
						<div class="row mb-5 mt-5">
							<div class="col d-flex justify-content-end">
								<button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-success-custom mr-3">Previous</button>
								<button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-success-custom">Next</button>
							</div>
						</div>
						<div class="row" style="margin-left: -110px !important;">
							<div class="col">
								<div style="text-align:center;">
									<span class="step" hidden></span>
									<span class="step" hidden></span>
									<span class="step" hidden></span>
									<?php
									$no = 1;
									$query = "SELECT * from soal_psi";
									$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
									while ($value = mysqli_fetch_array($sql)) { ?>
										<span class="step" hidden></span>
									<?php
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="js/index.js"></script>

</body>

</html>