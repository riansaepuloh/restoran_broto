<?php
include "../koneksi.php";
include "../cetak/fpdf.php";
// require("../cetak/fpdf.php");
$nf = $_POST['nf'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$spa = $_POST['spa'];
$jalan = $_POST['jalan'];
$dp = $_POST['dp'];
$kelurahan = $_POST['kelurahan'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$tlp = $_POST['tlp'];
$kota = $_POST['kota'];
$kantor = $_POST['kantor'];
$alamatkantor = $_POST['alamatkantor'];
$jabatan = $_POST['jabatan'];
$telp_kantor = $_POST['telp_kantor'];
$agama = $_POST['agama'];
$wilayah = $_POST['wilayah'];

$tahun = $_POST['tahun'];
$jt = $_POST['jt'];
$no_faktur = $_POST['no_faktur'];
$sumber = $_POST['sumber'];
$tgl_faktur = $_POST['tgl_faktur'];
$tpb = $_POST['tpb'];
$tglangsur1 = $_POST['tglangsur1'];
$tglangsur2 = $_POST['tglangsur2'];
$sales = $_POST['sales'];
$supervisor = $_POST['supervisor'];
$penjamin = $_POST['penjamin'];
$surveyor = $_POST['surveyor'];
$banyakangsuran1 = $_POST['banyakangsuran1'];
$nominalangsuran1 = $_POST['nominalangsuran1'];
$saldo1 = $_POST['saldo1'];
$banyakangsuran2 = $_POST['banyakangsuran2'];
$nominalangsuran2 = $_POST['nominalangsuran2'];
$saldo2 = $_POST['saldo2'];
$total = $_POST['total'];

$namabarang1 = $_POST['namabarang1'];
$merkbarang1 = $_POST['merkbarang1'];
$typebarang1 = $_POST['typebarang1'];
$unitbarang1 = $_POST['unitbarang1'];
$noseribarang1 = $_POST['noseribarang1'];

$namabarang2 = $_POST['namabarang2'];
$merkbarang2 = $_POST['merkbarang2'];
$typebarang2 = $_POST['typebarang2'];
$unitbarang2 = $_POST['unitbarang2'];
$noseribarang2 = $_POST['noseribarang2'];

$namabarang3 = $_POST['namabarang3'];
$merkbarang3 = $_POST['merkbarang3'];
$typebarang3 = $_POST['typebarang3'];
$unitbarang3 = $_POST['unitbarang3'];
$noseribarang3 = $_POST['noseribarang3'];


// session_start();
// $nf = $_SESSION['nf'];
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'SEPAKAT','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,5,'Alamat : Karawang','0','1','C',false);
$pdf->Cell(0,2,'deskripsi lain','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',7);
$pdf->Cell(190,87,'',1,0,'C');
$pdf->Ln(0);
$pdf->Cell(20,6,'NF',1,0,'C');
$pdf->Cell(18,6,'THN',1,0,'C');
$pdf->Cell(15,6,'JT',1,0,'C');
$pdf->Cell(20,6,'NO.FAKTUR',1,0,'C');
$pdf->Cell(17,6,'SUMBER',1,0,'C');
$pdf->Cell(25,6,'TGL.FAKTUR',1,0,'C');
$pdf->Cell(25,6,'TPB',1,0,'C');
$pdf->Cell(50,6,'PERIODE ANGSURAN',1,0,'C');
$pdf->Ln(6);
$pdf->Cell(20,6,$nf,1,0,'C');
$pdf->Cell(18,6,$tahun,1,0,'C');
$pdf->Cell(15,6,$jt,1,0,'C');
$pdf->Cell(20,6,$no_faktur,1,0,'C');
$pdf->Cell(17,6,$sumber,1,0,'C');
$pdf->Cell(25,6,$tgl_faktur,1,0,'C');
$pdf->Cell(25,6,$tpb,1,0,'C');
$pdf->Cell(50,6,'',1,0,'C');
$pdf->Ln(0);
$pdf->Cell(140,6,'',0,0,'C');
$pdf->Cell(23,6,$tglangsur1,0,0,'C');
$pdf->Cell(4,6,'SD',0,0,'C');
$pdf->Cell(23,6,$tglangsur2,0,0,'C');
$pdf->Ln(7);
$pdf->Cell(32,6,'NAMA',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(35,6,$nama,0,0,'L');
$pdf->Cell(17,6,'TGL.LAHIR',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(27,6,$tgl_lahir,0,0,'L');
$pdf->Cell(8,6,'SPA',0,0,'L');
$pdf->Cell(25,6,$spa,0,0,'L');
$pdf->Cell(25,6,'KALI',0,0,'L');
$pdf->Ln(6);
$pdf->Cell(32,6,'ALAMAT                  JL',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(80,6,$jalan,0,0,'L');
$pdf->Cell(8,6,'DP',0,0,'L');
$pdf->Cell(35,6,'',0,0,'L');
$pdf->Cell(3,6,'',0,0,'L');
$pdf->Cell(5,6,'Rp.',0,0,'L');
$pdf->Cell(21,6,$dp,0,0,'R');
$pdf->Cell(4,6,'',0,0,'R');
$pdf->Ln(6);  
$pdf->Cell(32,6,'                                 KEL',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(39,6,$kelurahan,0,0,'L');
$pdf->Cell(18,6,'TELP.RUMAH',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(21,6,$tlp,0,0,'L');
$pdf->Cell(8,6,'ANG.',0,0,'L');
$pdf->Cell(11,6,$banyakangsuran1,0,0,'C');
$pdf->Cell(4,6,'X',0,0,'L');
$pdf->Cell(20,6,$nominalangsuran1,0,0,'R');
$pdf->Cell(3,6,'',0,0,'L');
$pdf->Cell(5,6,'Rp.',0,0,'L');
$pdf->Cell(21,6,$saldo1,0,0,'R');
$pdf->Cell(4,6,'',0,0,'R');
$pdf->Ln(6);  
$pdf->Cell(32,6,'                                 RT',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(13,6,$rt,0,0,'L');
$pdf->Cell(8,6,'RW',0,0,'L');
$pdf->Cell(19,6,$rw,0,0,'L');
$pdf->Cell(19,6,'KOTA',0,0,'L');
$pdf->Cell(21,6,$kota,0,0,'L');
$pdf->Cell(8,6,'ANG.',0,0,'L');
$pdf->Cell(11,6,$banyakangsuran2,0,0,'C');
$pdf->Cell(4,6,'X',0,0,'L');
$pdf->Cell(20,6,$nominalangsuran2,0,0,'R');
$pdf->Cell(3,6,'',0,0,'L');
$pdf->Cell(5,6,'Rp.',0,0,'L');
$pdf->Cell(21,6,$saldo2,0,0,'R');
$pdf->Cell(4,6,'',0,0,'R');
$pdf->Ln(6);
$pdf->Cell(114,6,'',0,0,'L');
$pdf->Cell(20,6,'TOTAL',0,0,'L');
$pdf->Cell(26,6,'',0,0,'L');
$pdf->Cell(5,6,'Rp.',0,0,'L');
$pdf->Cell(21,6,$total,0,0,'R');
$pdf->Cell(4,6,'',0,0,'R');
$pdf->Ln(6);
$pdf->Cell(32,6,'NAMA KANTOR',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(80,6,$kantor,0,0,'L');
$pdf->Cell(20,6,'SURVEYOR',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(23,6,$surveyor,0,0,'L');
$pdf->Ln(6);
$pdf->Cell(32,6,'ALAMAT KANTOR',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(80,6,$alamatkantor,0,0,'L');
$pdf->Cell(20,6,'SALES',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(23,6,$sales,0,0,'L');
$pdf->Ln(6);
$pdf->Cell(32,6,'JABATAN',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(35,6,$jabatan,0,0,'L');
$pdf->Cell(20,6,'TELP.KANTOR',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(23,6,$telp_kantor,0,0,'L');
$pdf->Cell(20,6,'SUPERVISOR',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(23,6,$supervisor,0,0,'L');
$pdf->Ln(6);
$pdf->Cell(114,6,'',0,0,'L');
$pdf->Cell(20,6,'PENJAMIN',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(23,6,$penjamin,0,0,'L');
$pdf->Ln(6);
$pdf->Cell(114,6,'',0,0,'L');
$pdf->Cell(20,6,'AGAMA',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(23,6,$agama,0,0,'L');
$pdf->Ln(6);
$pdf->Cell(114,6,'',0,0,'L');
$pdf->Cell(20,6,'WILAYAH',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(23,6,$wilayah,0,0,'L');
// TABEL BARANG
$pdf->Ln(-11);
$pdf->Cell(1,6,'',0,0,'C');
$pdf->Cell(34,6,'NAMA BARANG',1,0,'C');
$pdf->Cell(20,6,'MERK',1,0,'C');
$pdf->Cell(20,6,'TYPE',1,0,'C');
$pdf->Cell(18,6,'UNIT',1,0,'C');
$pdf->Cell(20,6,'NO.SERI',1,0,'C');
$pdf->Ln(6);
$pdf->Cell(1,6,'',0,0,'C');
$pdf->Cell(34,6,'1 '.$namabarang1,1,0,'L');
$pdf->Cell(20,6,$merkbarang1,1,0,'L');
$pdf->Cell(20,6,$typebarang1,1,0,'L');
$pdf->Cell(18,6,$unitbarang1,1,0,'C');
$pdf->Cell(20,6,$noseribarang1,1,0,'L');
$pdf->Ln(6);
$pdf->Cell(1,6,'',0,0,'C');
$pdf->Cell(34,6,'2 '.$namabarang2,1,0,'L');
$pdf->Cell(20,6,$merkbarang2,1,0,'L');
$pdf->Cell(20,6,$typebarang2,1,0,'L');
$pdf->Cell(18,6,$unitbarang2,1,0,'C');
$pdf->Cell(20,6,$noseribarang2,1,0,'L');
$pdf->Ln(6);
$pdf->Cell(1,6,'',0,0,'C');
$pdf->Cell(34,6,'3 '.$namabarang3,1,0,'L');
$pdf->Cell(20,6,$merkbarang3,1,0,'L');
$pdf->Cell(20,6,$typebarang3,1,0,'L');
$pdf->Cell(18,6,$unitbarang3,1,0,'C');
$pdf->Cell(20,6,$noseribarang3,1,0,'L');
$pdf->Cell(15,6,'',0,0,'L');
$pdf->Cell(6,6,'HP',0,0,'L');
$pdf->Cell(2,6,':',0,0,'C');
$pdf->Cell(23,6,'',0,0,'L');

// TABEL PENYETORAN
$pdf->Ln(8);
$pdf->Cell(15,9,'URUT',1,0,'C');
$pdf->Cell(20,9,'TGL.KAS',1,0,'C');
$pdf->Cell(20,9,'NO. BUKTI',1,0,'C');
$pdf->Cell(23,9,'NO. KWITANSI',1,0,'C');
$pdf->Cell(10,9,'IN',1,0,'C');
$pdf->Cell(10,9,'OUT',1,0,'C');
$pdf->Cell(25,9,'NILAI',1,0,'C');
$pdf->Cell(25,9,'SALDO',1,0,'C');
$pdf->Cell(42,9,'KETERANGAN',1,0,'C');
$pdf->Ln(4);
$pdf->Cell(15,6,'',0,0,'C');
$pdf->Cell(20,6,'',0,0,'C');
$pdf->Cell(20,6,'KAS',0,0,'C');
$pdf->Cell(23,6,'',0,0,'C');
$pdf->Cell(10,6,'',0,0,'C');
$pdf->Cell(10,6,'',0,0,'C');
$pdf->Cell(25,6,'ANGSURAN K',0,0,'C');
$pdf->Cell(25,6,'PIUTANG D',0,0,'C');
$pdf->Cell(43,6,'',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(99,6,'',0,0,'L');
$pdf->Cell(25,6,'',0,0,'L');
$pdf->Cell(30,6,'Rp.',0,0,'L');
$pdf->Ln(0);
$pdf->Cell(15,6,'S.A',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C');
$pdf->Cell(23,6,'',1,0,'C');
$pdf->Cell(10,6,'',1,0,'C');
$pdf->Cell(10,6,'',1,0,'C');
$pdf->Cell(25,6,'',1,0,'C');
$pdf->Cell(25,6,$total.',00',1,0,'R');
$pdf->Cell(42,6,'',1,0,'C');
$pdf->Ln(6);
$pdf->Cell(15,6,'U.M',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C');
$pdf->Cell(20,6,'',1,0,'C');
$pdf->Cell(23,6,'',1,0,'C');
$pdf->Cell(10,6,'',1,0,'C');
$pdf->Cell(10,6,'',1,0,'C');
$pdf->Cell(25,6,'',1,0,'C');
$pdf->Cell(25,6,'',1,0,'C');
$pdf->Cell(42,6,'',1,0,'C');
$stor=mysql_query("SELECT *FROM `transaksi` WHERE `nf`='$nf';");
$a = 1;
if($stor != null){
while($kolom=mysql_fetch_array($stor)){
$pdf->Ln(6);
$pdf->Cell(99,6,'',0,0,'L');
$pdf->Cell(25,6,'Rp.',0,0,'L');
$pdf->Cell(30,6,'Rp.',0,0,'L');
$pdf->Ln(0);
$pdf->Cell(15,6,$kolom['angsuranke'],1,0,'C');
$pdf->Cell(20,6,$kolom['tgl_transaksi'],1,0,'C');
$pdf->Cell(20,6,$kolom['no_bukti_kwitansi'],1,0,'C');
$pdf->Cell(23,6,$kolom['no_bukti_kwitansi'],1,0,'C');
$pdf->Cell(10,6,$kolom['in'],1,0,'C');
$pdf->Cell(10,6,$kolom['out'],1,0,'C');
$pdf->Cell(25,6,number_format($kolom['nilai_angsuran'],'2',',','.'),1,0,'R');
$pdf->Cell(25,6,number_format($kolom['saldo_piutang'],'2',',','.'),1,0,'R');
$pdf->Cell(42,6,$kolom['keterangan'],1,0,'C');
$a = $a + 1;
}
if ($a != 12) {
	for ($i=$a; $i < $banyakangsuran1+1; $i++) { 
		$pdf->Ln(6);
		$pdf->Cell(15,6,$i,1,0,'C');
		$pdf->Cell(20,6,'',1,0,'C');
		$pdf->Cell(20,6,'',1,0,'C');
		$pdf->Cell(23,6,'',1,0,'C');
		$pdf->Cell(10,6,'',1,0,'C');
		$pdf->Cell(10,6,'',1,0,'C');
		$pdf->Cell(25,6,'',1,0,'R');
		$pdf->Cell(25,6,'',1,0,'R');
		$pdf->Cell(42,6,'',1,0,'C');
	}		
}
}

$pdf->Output();

 ?>