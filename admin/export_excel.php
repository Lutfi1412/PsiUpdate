<?php 
 
// Load the database configuration file 
include_once '../db/config.php'; 
 
// Include XLSX generator library 
require_once 'PhpXlsxGenerator.php'; 
 
// Excel file name for download 
$fileName = "data_praktikum_psi_" . date('Y-m-d') . ".xlsx"; 
 
// Define column names 
$excelData[] = array('ID', 'NPM', 'Nama', 'Kelas', 'Suku', 'Anak_ke', 'Jumlah_Anak', 'Gender', 'Usia', 'Pendidikan_Terakhir', 'Skor', 'Kategori', 'Tingkat'); 
 
// Fetch records from database and store in an array 
$query = $conn->query("SELECT * FROM hasil_praktikum_psi ORDER BY id ASC"); 
if($query->num_rows > 0){ 
    while($row = $query->fetch_assoc()){ 
        $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array($row['id'], $row['npm'], $row['nama'], $row['kelas'], $row['suku'], $row['anak_ke'], $row['jumlah_anak'], $row['jenis_kelamin'], $row['usia'], $row['pendidikan_terakhir'], $row['skor'], $row['kategori'], $row['tingkat']);  
        $excelData[] = $lineData; 
    } 
} 
 
// Export data to excel and download as xlsx file 
$xlsx = CodexWorld\PhpXlsxGenerator::fromArray( $excelData ); 
$xlsx->downloadAs($fileName); 
 
exit; 
 
?>