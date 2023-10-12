<?php
include_once 'db/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
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
    <script src="js/sweetalert2.all.min.js"></script>

    <style>
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
            font-size: 20px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            text-align: center;
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
    </style>

</head>

<body>
    <?php
    $nama =  trim(mysqli_real_escape_string($conn, $_POST['nama']));
    $npm =  trim(mysqli_real_escape_string($conn, $_POST['npm']));
    $kelas =  trim(mysqli_real_escape_string($conn, $_POST['kelas']));
    $suku =  trim(mysqli_real_escape_string($conn, $_POST['suku']));
    $anak_ke =  trim(mysqli_real_escape_string($conn, $_POST['anak_ke']));
    $jumlah_anak =  trim(mysqli_real_escape_string($conn, $_POST['jumlah_anak']));
    $jenis_kelamin =  trim(mysqli_real_escape_string($conn, $_POST['jenis_kelamin']));
    $usia =  trim(mysqli_real_escape_string($conn, $_POST['usia']));
    $pendidikan_terakhir =  trim(mysqli_real_escape_string($conn, $_POST['pendidikan_terakhir']));
    $tingkat = "";
    $sS1 = $_POST['1'];
    $sA2 = $_POST['2'];
    $sS3 = $_POST['3'];
    $sA4 = $_POST['4'];
    $sS5 = $_POST['5'];
    $sA6 = $_POST['6'];
    $sS7 = $_POST['7'];
    $sA8 = $_POST['8'];
    $sS9 = $_POST['9'];
    $sA10 = $_POST['10'];
    $sS11 = $_POST['11'];
    $sA12 = $_POST['12'];
    $sS13 = $_POST['13'];
    $sA14 = $_POST['14'];
    $sS15 = $_POST['15'];
    $sA16 = $_POST['16'];
    $sS17 = $_POST['17'];
    $sA18 = $_POST['18'];
    $sS19 = $_POST['19'];
    $sA20 = $_POST['20'];
    $sS21 = $_POST['21'];
    $sA22 = $_POST['22'];
    $sS23 = $_POST['23'];
    $sA24 = $_POST['24'];
    $sS25 = $_POST['25'];
    $sA26 = $_POST['26'];
    $sS27 = $_POST['27'];
    $sA28 = $_POST['28'];
    $sS29 = $_POST['29'];
    $sA30 = $_POST['30'];
    $sS31 = $_POST['31'];
    $sA32 = $_POST['32'];
    $sS33 = $_POST['33'];
    $sA34 = $_POST['34'];
    $sS35 = $_POST['35'];
    $sA36 = $_POST['36'];
    $sS37 = $_POST['37'];
    $sA38 = $_POST['38'];
    $sS39 = $_POST['39'];
    $sA40 = $_POST['40'];
    $sS41 = $_POST['41'];
    $sA42 = $_POST['42'];
    $sS43 = $_POST['43'];
    $sA44 = $_POST['44'];
    $sS45 = $_POST['45'];
    $sA46 = $_POST['46'];
    $sS47 = $_POST['47'];
    $sA48 = $_POST['48'];
    $sS49 = $_POST['49'];
    $sA50 = $_POST['50'];
    $sS51 = $_POST['51'];
    $sA52 = $_POST['52'];
    $sS53 = $_POST['53'];
    $sA54 = $_POST['54'];
    $sS55 = $_POST['55'];
    $sA56 = $_POST['56'];
    $sS57 = $_POST['57'];
    $sA58 = $_POST['58'];
    $sS59 = $_POST['59'];
    $sA60 = $_POST['60'];

    // Sociotropy
    $cAWOT = $sS1 + $sS7 + $sS13 + $sS19 + $sS25 + $sS31 + $sA36 + $sS43 + $sS49 + $sS55;
    $d = $sS3 + $sS9 + $sS15 + $sS21 + $sS27 + $sS33 + $sS39 + $sS45 + $sS51 + $sS57;
    $pO = $sS5 + $sS11 + $sS17 + $sS23 + $sS29 + $sS35 + $sS41 + $sS47 + $sS53 + $sS59;

    // AUTONOMY
    $pC = $sA2 + $sA8 + $sA14 + $sA20 + $sA26 + $sA32 + $sA38 + $sA44 + $sA50 + $sA56;
    $nFC_FFO = $sA4 + $sA10 + $sA16 + $sA22 + $sA28 + $sA34 + $sA44 + $sA46 + $sA52 + $sA58;
    $dS = $sA6 + $sA12 + $sA18 + $sA24 + $sA30 + $sA36 + $sA42 + $sA48 + $sA54 + $sA60;

    $sociotropy = $cAWOT + $d + $pO;
    $autonomy = $pC + $nFC_FFO + $dS;

    // $host   = "localhost"; //host server
    // $user   = "root"; //user login phpMyAdmin
    // $pass   = ""; //pass login phpMyAdmin
    // $db     = "psi"; //nama database
    // $conn   = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

    // $date = date('Y-m-d');

    // $sql = "INSERT INTO data2(tanggal,
    //                         no1, no2, no3, no4, no5, no6, no7, no8, no9, no10,
    //                         no11, no12, no13, no14, no15, no16, no17, no18, no19, no20,
    //                         no21, no22, no23, no24, no25, no26, no27, no28, no29, no30,
    //                         no31, no32, no33, no34, no35, no36, no37, no38, no39, no40,
    //                         no41, no42, no43, no44, no45, no46, no47, no48, no49, no50,
    //                         no51, no52, no53, no54, no55, no56, no57, no58, no59, no60)
    //                 VALUES ('$date', $sS1, $sA2, $sS3, $sA4, $sS5, $sA6, $sS7, $sA8, $sS9, $sA10,
    //                         $sS11, $sA12, $sS13, $sA14, $sS15, $sA16, $sS17, $sA18, $sS19, $sA20,
    //                         $sS21, $sA22, $sS23, $sA24, $sS25, $sA26, $sS27, $sA28, $sS29, $sA30,
    //                         $sS31, $sA32, $sS33, $sA34, $sS35, $sA36, $sS37, $sA38, $sS39, $sA40,
    //                         $sS41, $sA42, $sS43, $sA44, $sS45, $sA46, $sS47, $sA48, $sS49, $sA50,
    //                         $sS51, $sA52, $sS53, $sA54, $sS55, $sA56, $sS57, $sA58, $sS59, $sA60)
    //         ";
    // mysqli_query($conn, $sql);
    // var_dump($sql);
    ?>
<script>
function socio(){
    var something = <?php echo json_encode($sociotropy); ?> 
    Swal.fire({
        title: '<p style="color:black; font-size:20px;">Anda telah menyelesaikan kuis ini',
        html: '<span style="color:black; font-size:20px;">Lihat Nilai ?</span>',
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.value) {
                if (something >= 30 && something <= 55) {
                    Swal.fire({
                    title: '<p style="color:black; font-size:20px;">Anda Memiliki Kecenderungan Sociotropy dengan Tingkat Sangat Rendah!</p>',
                    imageUrl: 'images/logo1.png',
                    imageWidth: 200,
                    confirmButtonText: 'Selesai!'}
                    ).then((result) => {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    })
                } else if (something >= 56 && something <= 80) {
                    Swal.fire({
                    title: '<p style="color:black; font-size:20px;">Anda Memiliki Kecenderungan Sociotropy dengan Tingkat Rendah!',
                    imageUrl: 'images/logo1.png',
                    imageWidth: 200,
                    confirmButtonText: 'Selesai!'}
                    ).then((result) => {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    })
                } else if (something >= 81 && something <= 130) {
                    Swal.fire({
                    title: '<p style="color:black; font-size:20px;">Anda Memiliki Kecenderungan Sociotropy dengan Tingkat Sedang!!',
                    imageUrl: 'images/logo1.png',
                    imageWidth: 200,
                    confirmButtonText: 'Selesai!'}
                    ).then((result) => {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    })
                } else if (something >= 131 && something <= 155) {
                    Swal.fire({
                    title: '<p style="color:black; font-size:20px;">Anda Memiliki Kecenderungan Sociotropy dengan Tingkat Tinggi!',
                    imageUrl: 'images/logo1.png',
                    imageWidth: 200,
                    confirmButtonText: 'Selesai!'}
                    ).then((result) => {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    })
                } else if (something >= 156 && something <= 180) {
                    Swal.fire({
                    title: '<p style="color:black; font-size:20px;">Anda Memiliki Kecenderungan Sociotropy dengan Tingkat Sangat Tinggi!',
                    imageUrl: 'images/logo1.png',
                    imageWidth: 200,
                    // background: '#BF00FF',
                    confirmButtonText: 'Selesai!'}
                    ).then((result) => {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    })
                }
            }
        });
    }

function auton(){
    var something = <?php echo json_encode($autonomy); ?> 
    Swal.fire({
        title: '<p style="color:black; font-size:20px;">Anda telah menyelesaikan kuis ini',
        // text: '',
        icon: 'success',
        html: '<span style="color:black; font-size:20px;">Lihat Nilai ?</span>',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.value) {
                if (something >= 30 && something <= 55) {
                    Swal.fire({
                    title: '<p style="color:black; font-size:20px;">Anda Memiliki Kecenderungan Autonomy dengan Tingkat Sangat Rendah!',
                    imageUrl: 'images/logo1.png',
                    imageWidth: 200,
                    // background: '#BF00FF',
                    confirmButtonText: 'Selesai!'}
                    ).then((result) => {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    })
                } else if (something >= 56 && something <= 80) {
                    Swal.fire({
                    title: '<p style="color:black; font-size:20px;">Anda Memiliki Kecenderungan Autonomy dengan Tingkat Rendah!',
                    imageUrl: 'images/logo1.png',
                    imageWidth: 200,
                    // background: '#BF00FF',
                    confirmButtonText: 'Selesai!'}
                    ).then((result) => {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    })
                } else if (something >= 81 && something <= 130) {
                    Swal.fire({
                    title: '<p style="color:black; font-size:20px;">Anda Memiliki Kecenderungan Autonomy dengan Tingkat Sedang!!',
                    imageUrl: 'images/logo1.png',
                    imageWidth: 200,
                    // background: '#BF00FF',
                    confirmButtonText: 'Selesai!'}
                    ).then((result) => {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    })
                } else if (something >= 131 && something <= 155) {
                    Swal.fire({
                    title: '<p style="color:black; font-size:20px;">Anda Memiliki Kecenderungan Autonomy dengan Tingkat Tinggi!',
                    imageUrl: 'images/logo1.png',
                    imageWidth: 200,
                    // background: '#BF00FF',
                    confirmButtonText: 'Selesai!'}
                    ).then((result) => {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    })
                } else if (something >= 156 && something <= 180) {
                    Swal.fire({
                    title: '<p style="color:black; font-size:20px;">Anda Memiliki Kecenderungan Autonomy dengan Tingkat Sangat Tinggi!',
                    imageUrl: 'images/logo1.png',
                    imageWidth: 200,
                    // background: '#BF00FF',
                    confirmButtonText: 'Selesai!'}
                    ).then((result) => {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    })
                }
            }
        });
    }

</script>


    <?php
    if ($sociotropy > $autonomy) {
        // variavel hasil
        $skor = $sociotropy;
        $kategori = "sociotropy";

        // kondisi
        if ($skor >= 30 && $skor <= 55) {
            $tingkat = "sangat rendah";
        } elseif ($skor >= 56 && $skor <= 80) {
            $tingkat = "rendah";
        } elseif ($skor >= 81 && $skor <= 130) {
            $tingkat = "sedang";
        } elseif ($skor >= 131 && $skor <= 155) {
            $tingkat = "tinggi";
        } elseif ($skor >= 156 && $skor <= 180) {
            $tingkat = "sangat tinggi";
        }
        
        // render fungsi
        echo "<script type='text/javascript'>socio()</script>";

    } else {
        // variabel hasil
        $skor = $autonomy;
        $kategori = "autonomy";

        // kondisi
        if ($skor >= 30 && $skor <= 55) {
            $tingkat = "sangat rendah";
        } elseif ($skor >= 56 && $skor <= 80) {
            $tingkat = "rendah";
        } elseif ($skor >= 81 && $skor <= 130) {
            $tingkat = "sedang";
        } elseif ($skor >= 131 && $skor <= 155) {
            $tingkat = "tinggi";
        } elseif ($skor >= 156 && $skor <= 180) {
            $tingkat = "sangat tinggi";
        }

        // render fungsi
        echo "<script type='text/javascript'>auton()</script>";
    }

    ?>

    <!-- POST DATA -->
    <?php
    mysqli_query($conn, "INSERT INTO hasil_praktikum_psi(npm, nama, kelas, suku, anak_ke, jumlah_anak, jenis_kelamin, usia, pendidikan_terakhir, skor, kategori, tingkat) VALUES ('$npm','$nama', '$kelas', '$suku', '$anak_ke', '$jumlah_anak', '$jenis_kelamin', '$usia', '$pendidikan_terakhir', '$skor', '$kategori', '$tingkat')") or die(mysqli_error($conn));
    ?>


</body>