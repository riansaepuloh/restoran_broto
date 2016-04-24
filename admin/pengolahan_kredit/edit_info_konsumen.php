<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
    $nf = $_GET['id'];
} else {
    die ("Error, Tidak ada kode terpilih");
}
// tampilkan data
$query =  "SELECT *FROM `faktur` JOIN `konsumen` USING(`id_konsumen`) JOIN `barang` USING(`nf`) WHERE `nf`='$nf' AND `konsumen`.`id_konsumen`=`faktur`.`id_konsumen`;";

$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);
$id_konsumen = $hasil['id_konsumen'];
$nama = $hasil['nama'];
$tgl_lahir = $hasil['tgl_lahir'];
$spa = $hasil['spa'];
$jalan = $hasil['jalan'];
$dp = $hasil['dp'];
$kelurahan = $hasil['kelurahan'];
$rt = $hasil['rt'];
$rw = $hasil['rw'];
$tlp = $hasil['tlp'];
$kota = $hasil['kota'];
$kantor = $hasil['kantor'];
$alamatkantor = $hasil['alamatkantor'];
$jabatan = $hasil['jabatan'];
$telp_kantor = $hasil['telp_kantor'];
$agama = $hasil['agama'];
$wilayah = $hasil['wilayah'];

$tahun = $hasil['tahun'];
$jt = $hasil['jt'];
$no_faktur = $hasil['no_faktur'];
$sumber = $hasil['sumber'];
$tgl_faktur = $hasil['tgl_faktur'];
$tpb = $hasil['tpb'];
$tglangsur1 = $hasil['tglangsur1'];
$tglangsur2 = $hasil['tglangsur2'];
$sales = $hasil['sales'];
$supervisor = $hasil['supervisor'];
$penjamin = $hasil['penjamin'];
$surveyor = $hasil['surveyor'];
$banyakangsuran1 = $hasil['banyakangsuran1'];
$nominalangsuran1 = $hasil['nominalangsuran1'];
$saldo1 = $hasil['saldo1'];
$banyakangsuran2 = $hasil['banyakangsuran2'];
$nominalangsuran2 = $hasil['nominalangsuran2'];
$saldo2 = $hasil['saldo2'];
$total = $hasil['total'];

$kd_barang = $hasil['kd_barang'];
$namabarang1 = $hasil['namabarang1'];
$merkbarang1 = $hasil['merkbarang1'];
$typebarang1 = $hasil['typebarang1'];
$unitbarang1 = $hasil['unitbarang1'];
$noseribarang1 = $hasil['noseribarang1'];

$namabarang2 = $hasil['namabarang2'];
$merkbarang2 = $hasil['merkbarang2'];
$typebarang2 = $hasil['typebarang2'];
$unitbarang2 = $hasil['unitbarang2'];
$noseribarang2 = $hasil['noseribarang2'];

$namabarang3 = $hasil['namabarang3'];
$merkbarang3 = $hasil['merkbarang3'];
$typebarang3 = $hasil['typebarang3'];
$unitbarang3 = $hasil['unitbarang3'];
$noseribarang3 = $hasil['noseribarang3'];

// proses edit
if(isset($_POST['edit'])){
$id_konsumen = $_POST['id_konsumen'];
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

$nf = $_POST['nf'];
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

$kd_barang = $_POST['kd_barang'];
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

// update data
$query1 = "UPDATE `kredit`.`konsumen` SET `nama` = '$nama' , 
                `tgl_lahir` = '$tgl_lahir' , 
                `jalan` = '$jalan' , 
                `dp` = '$dp' , 
                `kelurahan` = '$kelurahan' , 
                `rt` = '$rt' , 
                `rw` = '$rw' , 
                `kota` = '$kota' , 
                `tlp` = '$tlp' , 
                `kantor` = '$kantor' , 
                `alamatkantor` = '$alamatkantor' , 
                `jabatan` = '$jabatan' , 
                `telp_kantor` = '$telp_kantor' , 
                `agama` = '$agama' , 
                `wilayah` = '$wilayah' , 
                `spa` = '$spa' WHERE `id_konsumen` = '$id_konsumen';";
$sql1 = mysql_query($query1);
if ($sql1) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?page=detail_kredit&id=$nf'>";
} else {
    echo "Data gagal di edit konsumen";
}

$query2 = "UPDATE `kredit`.`faktur` SET `no_faktur` = '$no_faktur' , 
                `tahun` = '$tahun' , 
                `jt` = '$jt' , 
                `tgl_faktur` = '$tgl_faktur' , 
                `surveyor` = '$surveyor' , 
                `sales` = '$sales' , 
                `supervisor` = '$supervisor' , 
                `penjamin` = '$penjamin' , 
                `sumber` = '$sumber' , 
                `tpb` = '$tpb' , 
                `tglangsur1` = '$tglangsur1' , 
                `tglangsur2` = '$tglangsur2' , 
                `banyakangsuran1` = '$banyakangsuran1' , 
                `nominalangsuran1` = '$nominalangsuran1' , 
                `saldo1` = '$saldo1' , 
                `banyakangsuran2` = '$banyakangsuran2' , 
                `nominalangsuran2` = '$nominalangsuran2' , 
                `saldo2` = '$saldo2' , 
                `total` = '$total' WHERE `nf` = '$nf'; ";
$sql2 = mysql_query($query2);
if ($sql2) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?page=detail_kredit&id=$nf'>";
} else {
    echo "Data gagal di edit faktur";
}

$query3 = "UPDATE `kredit`.`barang` SET `namabarang1` = '$namabarang1' , 
                `merkbarang1` = '$merkbarang1' , 
                `typebarang1` = '$typebarang1' , 
                `unitbarang1` = '$unitbarang1' , 
                `noseribarang1` = '$noseribarang1' , 
                `namabarang2` = '$namabarang2' , 
                `merkbarang2` = '$merkbarang2' , 
                `typebarang2` = '$typebarang2' , 
                `unitbarang2` = '$unitbarang2' , 
                `noseribarang2` = '$noseribarang2' , 
                `namabarang3` = '$namabarang3' , 
                `merkbarang3` = '$merkbarang3' , 
                `typebarang3` = '$typebarang3' , 
                `unitbarang3` = '$unitbarang3' , 
                `noseribarang3` = '$noseribarang3' 
                WHERE `kd_barang` = '$kd_barang'; ";
$sql3 = mysql_query($query3);
if ($sql3) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?page=detail_kredit&id=$nf'>";
} else {
    echo "Data gagal di edit barang";
}

}
?>
<div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">INFORMASI KONSUMEN</div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                       <style type="text/css">
                       th{
                        text-align:center;
                       }
                       </style>
                       <form class="form-horizontal" action="" method="post" enctype="multypart/form-data" name="edit" id="edit">
                       <input type="hidden" name="id_konsumen" value="<?php echo "$id_konsumen"; ?>">
                       <input type="hidden" name="nf" value="<?php echo "$nf"; ?>">
                       <input type="hidden" name="kd_barang" value="<?php echo "$kd_barang"; ?>">
                       <table class="table table-bordered">
                       <th>NF</th>
                       <th>TAHUN</th>
                       <th>JT</th>
                       <th>NO.FAKTUR</th>
                       <th>SUMBER</th>
                       <th>TGL.FAKTUR</th>
                       <th>TPB</th>
                       <th colspan="3">PERIODE ANGSURAN</th>
                       <tr>
                           
                           <td width="100px"> <input type="text" class="form-control" id="contract-name" name="nf" size="1px" value="<?php echo "$nf"; ?>" disabled></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="tahun" size="1px"   value="<?php echo "$tahun"; ?>"></td>
                           <td><input type="text" class="form-control" id="contract-name" name="jt" size="1px"  value="<?php  echo "$jt"; ?>"></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="no_faktur" size="1px"  value="<?php  echo "$no_faktur"; ?>"></td>
                           <td><input type="text" class="form-control" id="contract-name" name="sumber" size="1px"  value="<?php  echo "$sumber"; ?>"></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="tgl_faktur" size="1px"  value="<?php  echo "$tgl_faktur"; ?>"></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="tpb" size="1px"  value="<?php  echo "$tpb"; ?>"></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="tglangsur1" size="1px"  value="<?php  echo "$tglangsur1"; ?>"></td><td align="center">S/D</td> <td> <input type="text" class="form-control" id="contract-name" name="tglangsur2" size="1px"  value="<?php  echo "$tglangsur2"; ?>"></td>
                         
                       </tr>
                           
                       </table>
                        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                        <table border="0">
                            <tr>
                                <td width="100px"><label for="contact-name" class="control-label"> NAMA</label></td>
                                <td>:</td>
                                <td width="300px" colspan="4"> <input type="text" class="form-control" id="contract-name" name="nama" placeholder="Masukan Nama Petugas"  value="<?php  echo "$nama"; ?>"></td>
                                <td width="25px"></td>
                                <td width="100px"><label for="contact-name" class="control-label"> TGL. LAHIR</label></td>
                                <td>:</td>
                                <td width="150px"><input type="text" class="form-control" id="contract-name" name="tgl_lahir" placeholder="Tanggal/Bulan/Tahun"  value="<?php  echo "$tgl_lahir"; ?>"></td>
                                <td width="35px"></td>
                                <td width="100px"><label for="contact-name" class="control-label"> SPA</label></td>
                                <td>:</td>
                                <td width="150px" colspan="4"><input type="text" class="form-control" id="contract-name" name="spa" placeholder="Masukan SPA"  value="<?php  echo "$spa"; ?>"></td><td width="35px"><label for="contact-name" class="control-label">  KALI</label></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td width="100px"><label for="contact-name" class="control-label"> ALAMAT JL.</label></td>
                                <td>:</td>
                                <td colspan="8" width="300px"><input type="text" class="form-control" id="contract-name" name="jalan" placeholder="Masukan Jalan"  value="<?php  echo "$jalan"; ?>"></td>
                                 <td width="35px"></td>
                                <td colspan="5"><label for="contact-name" class="control-label"> DP</label></td>
                                <td width="35px" align="center"><label for="contact-name" class="control-label"> Rp. </label></td>
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="dp"  value="<?php  echo number_format($dp,'0',',','.'); ?>"></td>
                            </tr>

                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td width="100px" align="right"><label for="contact-name" class="control-label"> KEL.</label></td>
                                <td>:</td>
                                <td width="300px" colspan="4"><input type="text" class="form-control" id="contract-name" name="kelurahan" placeholder="Masukan Keluran"  value="<?php  echo "$kelurahan"; ?>"></td>
                                 <td width="35px"></td>
                                 <td><label for="contact-name" class="control-label">TELP. RUMAH</label></td>
                                 <td>:</td>
                                 <td><input type="text" class="form-control" id="contract-name" name="tlp" placeholder="Masukan No Tlp"  value="<?php  echo "$tlp"; ?>"></td>
                                 <td></td>
                                <td><label for="contact-name" class="control-label"> ANGSURAN</label></td>
                                <td>:</td>
                                <td width="50px"><input type="text" class="form-control" id="contract-name" name="banyakangsuran1" placeholder="Angsuran"  value="<?php  echo "$banyakangsuran1"; ?>"></td>
                                <td width="30px" align="center"> X </td>
                                <td><input type="text" class="form-control" id="contract-name" name="nominalangsuran1" placeholder="Angsuran"  value="<?php  echo number_format($nominalangsuran1,'0',',','.'); ?>"></td>
                                <td width="35px" align="center"><label for="contact-name" class="control-label"> Rp. </label></td>
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="saldo1"  value="<?php  echo number_format($saldo1,'0',',','.'); ?>"></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td width="100px" align="right"><label for="contact-name" class="control-label"> RT.</label></td>
                                <td>:</td>
                                <td width="60px"><input type="text" class="form-control" id="contract-name" name="rt" placeholder="RT"  value="<?php  echo "$rt"; ?>"></td>
                                 <td width="35px" align="center" style="font-weight: bold;">RW</td>
                                 <td width="60px"><input type="text" class="form-control" id="contract-name" name="rw" placeholder="RW"  value="<?php  echo "$rw"; ?>"></td>
                                 <td></td>
                                 <td></td>
                                 <td><label for="contact-name" class="control-label">KOTA</label></td>
                                 <td>:</td>
                                 <td><input type="text" class="form-control" id="contract-name" name="kota" placeholder="Masukan Kota"  value="<?php  echo "$kota"; ?>"></td>
                                 <td></td>
                                <td><label for="contact-name" class="control-label"> ANGSURAN</label></td>
                                <td>:</td>
                                <td width="50px"><input type="text" class="form-control" id="contract-name" name="banyakangsuran2" placeholder="Angsuran"  value="<?php  echo "$banyakangsuran2"; ?>"></td>
                                <td width="30px" align="center"> X </td>
                                <td><input type="text" class="form-control" id="contract-name" name="nominalangsuran2" placeholder="Angsuran"  value="<?php  echo number_format($nominalangsuran2,'0',',','.'); ?>"></td>
                                <td width="35px" align="center"><label for="contact-name" class="control-label"> Rp. </label></td>
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="saldo2"  value="<?php  echo number_format($saldo2,'0',',','.'); ?>"></label></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="8" width="300px"></td>
                                 <td width="35px"></td>
                                <td colspan="5"><label for="contact-name" class="control-label"> TOTAL</label></td>
                                <td width="35px" align="center"><label for="contact-name" class="control-label"> Rp. </label></td>
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="total"  value="<?php  echo number_format($total,'0',',','.'); ?>"></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td><label for="contact-name" class="control-label">NAMA KANTOR</label></td>
                                <td>:</td>
                                <td colspan="8" width="300px"><input type="text" class="form-control" id="contract-name" name="kantor" placeholder="Masukan Kantor"  value="<?php  echo "$kantor"; ?>"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> SURVEYOR</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="surveyor" placeholder="Masukan Surveyor"  value="<?php  echo "$surveyor"; ?>"></td>
                                <td></td>
                                <td></td>
                            </tr>
                             <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td><label for="contact-name" class="control-label">ALAMAT KANTOR</label></td>
                                <td>:</td>
                                <td colspan="8" width="300px"><input type="text" class="form-control" id="contract-name" name="alamatkantor" placeholder="Masukan Kantor"  value="<?php  echo "$alamatkantor"; ?>"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> SALES</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="sales" placeholder="Masukan Seles"  value="<?php  echo "$sales"; ?>"></td>
                                <td></td>
                                <td></td>
                            </tr>   
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td><label for="contact-name" class="control-label">JABATAN</label></td>
                                <td>:</td>
                                <td colspan="5" width="300px"><input type="text" class="form-control" id="contract-name" name="jabatan" placeholder="Masukan Jabatan"  value="<?php  echo "$jabatan"; ?>"></td>
                                <td><label for="contact-name" class="control-label">TELP. KANTOR</label></td>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="contract-name" name="telp_kantor" placeholder="Masukan No Telp"  value="<?php  echo "$telp_kantor"; ?>"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label">SUPERVISOR</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="supervisor" placeholder="Masukan Supervisor"  value="<?php  echo "$supervisor"; ?>"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                
                                <td colspan="10" rowspan="5" width="300px">
                                    <style type="text/css">
                        th{
                            background:#28A5EC;
                        }
                        </style>
                        <table class="table table-bordered">
                            <th>No</th>
                            <th>NAMA BARANG</th>
                            <th>MERK</th>
                            <th>TYPE</th>
                            <th>UNIT</th>
                            <th>NO. SERI</th>
                            <tr>
                                <td>1</td>
                                <td><input type="text" class="form-control" id="contract-name" name="namabarang1" placeholder="Masukan Nama Barang" required value="<?php  echo "$namabarang1"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="merkbarang1" placeholder="Masukan Merek" required value="<?php  echo "$merkbarang1"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="typebarang1" placeholder="Masukan Type" value="<?php  echo "$typebarang1"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="unitbarang1" placeholder="Masukan Unit" value="<?php  echo "$unitbarang1"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="noseribarang1" placeholder="Masukan No Seri" value="<?php  echo "$unitbarang1"; ?>"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="text" class="form-control" id="contract-name" name="namabarang2" placeholder="Masukan Nama Barang" value="<?php  echo "$namabarang2"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="merkbarang2" placeholder="Masukan Merek" value="<?php  echo "$merkbarang2"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="typebarang2" placeholder="Masukan Type" value="<?php  echo "$typebarang2"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="unitbarang2" placeholder="Masukan Unit" value="<?php  echo "$unitbarang2"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="noseribarang2" placeholder="Masukan No Seri" value="<?php  echo "$noseribarang2"; ?>"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><input type="text" class="form-control" id="contract-name" name="namabarang3" placeholder="Masukan Nama Barang" value="<?php  echo "$namabarang3"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="merkbarang3" placeholder="Masukan Merek" value="<?php  echo "$merkbarang3"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="typebarang3" placeholder="Masukan Type" value="<?php  echo "$typebarang3"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="unitbarang3" placeholder="Masukan Unit" value="<?php  echo "$unitbarang3"; ?>"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="noseribarang3" placeholder="Masukan No Seri" value="<?php  echo "$noseribarang3"; ?>"></td>
                            </tr>
                        </table>

                                </td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> PENJAMIN</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="penjamin" placeholder="Masukan Penjamin"  value="<?php  echo "$penjamin"; ?>"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> AGAMA</label></td>
                                <td></td>
                                <td width="200px" colspan="3">
                                    <select name="agama">
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="KRISTEN">KRISTEN</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="BUDDHA">BUDDHA</option>
                                        <option value="KONG HU CU">KONG HU CU</option>
                                    </select>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> WILAYAH</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="wilayah" placeholder="Masukan Wilayah"  value="<?php  echo "$wilayah"; ?>"></td>
                                <td></td>
                                <td></td>
                            </tr>   
                        </table>
                        <br>
                        <div class="form-action no-margin-bottom" style="margin-left:40%">
                            <input class="btn btn-primary" type="submit" name="edit" id="edit" value="EDIT DATA KONSUMEN">
                            <a href="index.php?page=detail_kredit&id=<?php echo "$nf"; ?>" class="btn btn-primary">BATAL EDIT</a>
                        </div>
                        <br>
                        </form>

                        <?php 
                            $stor=mysql_query("SELECT *FROM `transaksi` WHERE `nf`='$nf';");
                         ?>



                       

                        <table class="table table-bordered">
                        <th>URUT</th>
                        <th>TGL.KAS</th>
                        <th width="120px">NO. BUKTI KAS</th>
                        <th width="120px">NO. KWITANSI</th>
                        <th>IN</th>
                        <th>OUT</th>
                        <th width="130px">NILAI ANGSURAN K</th>
                        <th width="120px">SALDO PIUTANG D</th>
                        <th>KETERANGAN</th>
                        <tbody>
                        <tr>
                            <td>S.A</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="right"><?php echo "Rp. ".number_format($total,'2',',','.') ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>U.M</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                            <?php
                            
                            if($stor != null){
                                while($kolom=mysql_fetch_array($stor)){
                                ?>
                                <tr>
                                    <td><?php echo $kolom['angsuranke']; ?></td>
                                    <td><?php echo $kolom['tgl_transaksi']?></td>
                                    <td><?php echo $kolom['no_bukti_kas']?></td>
                                    <td><?php echo $kolom['no_bukti_kwitansi']?></td>
                                    <td><?php echo $kolom['in']?></td>
                                    <td><?php echo $kolom['out']?></td>
                                    <td><?php echo "Rp. ".number_format($kolom['nilai_angsuran'],'2',',','.')?></td>
                                    <td><?php echo "Rp. ".number_format($kolom['saldo_piutang'],'2',',','.')?></td>
                                    <td><?php echo $kolom['keterangan']?></td>
                                    
                                </tr>
                                <?php 
                                }
                            }
                            else {
                                echo "data kosong";
                            }
                            ?>
                        
                            </tbody>
                        </table>
                         <!-- modal -->
                         <?php 
                            $angsuranterakhir = "SELECT * FROM `transaksi` WHERE `nf`='$nf' ORDER BY `angsuranke` DESC LIMIT 1;";
                            $sql1 = mysql_query($angsuranterakhir);
                            $hasil1 = mysql_fetch_array($sql1);
                            $angsuranke = $hasil1['angsuranke'];
                            $saldopiutang = $hasil1['saldo_piutang'];
                            $angsuranbaru = $angsuranke+1;
                            $na = $nominalangsuran1 + $nominalangsuran2;
                            if ($saldopiutang=="") {
                                $saldopiutang = $total;
                            }

                          ?>
                        
                        <div class="modal fade modal-success" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Bayar Angsuran</h4>
                                </div>
                                <form class="form-horizontal" action="pengolahan_kredit/simpan_penyetoran.php" method="post">
                                
                                <div class="modal-body">
                                    <input type="hidden" name="nf" value="<?php echo "$nf"; ?>">
                                    <input type="hidden" name="angsuranbaru" value="<?php echo "$angsuranbaru"; ?>">
                                    <div class="form-group">
                                        <label for="contact-name" class="col-lg-4 control-label">Saldo Piutang : </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Saldo Piutang" name="saldo_piutang" value="<?php echo $saldopiutang;?>">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="contact-name" class="col-lg-4 control-label">Angsuran Ke : </label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" id="contract-name"  placeholder="Masukan Setoran Ke" name="angsuran" value="<?php echo "$angsuranbaru"; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-name" class="col-lg-4 control-label">Tanggal : </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kode Meja" name="tgl_transaksi" value="<?php echo date("d/m/Y") ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-name" class="col-lg-4 control-label">No Bukti Kas : </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan No Bukti Kas" name="no_bukti_kas" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-name" class="col-lg-4 control-label">No Bukti Kwitansi : </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan No Bukti Kwitansi" name="no_bukti_kwitansi" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-name" class="col-lg-4 control-label">IN : </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan IN" name="in" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-name" class="col-lg-4 control-label">OUT : </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan OUT" name="out" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-name" class="col-lg-4 control-label">Nilai Angsuran : </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Nilai Angsuran" name="nilai_angsuran" value="<?php echo $na; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-name" class="col-lg-4 control-label">Keterangan : </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Nilai Angsuran" name="keterangan" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                    <button type="submit" class="btn btn-success" ><span class="icon fa fa-user-plus"></span> Tambah</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        </div>
                        <!-- end modal -->
                        <center><button a href="#daftar" data-toggle="modal" class="btn btn-success">BAYAR ANGSURAN</button></center>
                    </div>
                </div>
            </div>
        </div>
    </div>