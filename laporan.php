
<?php
include "fpdf.php";

$pdf = new FPDF('l','mm','A5');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'SEKOLAH MENENGAH ATAS CAKEP DUNIA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA SMA CAKEP DUNIA',0,1,'C');
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NOMOR',1,0);
$pdf->Cell(85,6,'NAMA SISWA',1,0);
$pdf->Cell(35,6,'JENIS KELAMIN',1,0);
$pdf->Cell(25,6,'ALAMAT',1,1);
 
$pdf->SetFont('Arial','',10);
 
$mysqli = new mysqli("localhost","root","","latihan_pdf");
$no = 1;
$tampil = mysqli_query($mysqli, "select * from siswa");
while ($hasil = mysqli_fetch_array($tampil)){
    $pdf->Cell(20,6,$no++,1,0);
    $pdf->Cell(85,6,$hasil['nama'],1,0);
    $pdf->Cell(35,6,$hasil['jenis_kelamin'],1,0);
    $pdf->Cell(25,6,$hasil['alamat'],1,1); 
}
 
$pdf->Output();


?>
