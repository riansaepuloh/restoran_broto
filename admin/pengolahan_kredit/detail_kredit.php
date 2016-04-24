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
?>
<div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">

                    <div class="card-title">
                        <div class="title">INFORMASI KONSUMEN</div>
                    </div>
                    <table border="0" align="right">
                           <tr>
                               <td align="right">
                               <a href="index.php?page=edit_info_konsumen&id=<?php echo $nf; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> EDIT INFO KONSUMEN </button></a>
                               <a href="index.php?page=edit_info_konsumen&id=<?php echo $kolom['nf']; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> CETAK FAKTUR </button></a>
                               </td>
                           </tr>
                       </table>
                </div>
                <div class="card-body">
                    <div>
                       <style type="text/css">
                       th{
                        text-align:center;
                       }
                       </style>
                       
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
                           
                           <td width="100px"> <input type="text" class="form-control" id="contract-name" name="nf" size="1px" value="<?php echo "$nf"; ?>"  disabled></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="tahun" size="1px"  disabled value="<?php echo "$tahun"; ?>"></td>
                           <td><input type="text" class="form-control" id="contract-name" name="jt" size="1px" disabled value="<?php  echo "$jt"; ?>"></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="no_faktur" size="1px" disabled value="<?php  echo "$no_faktur"; ?>"></td>
                           <td><input type="text" class="form-control" id="contract-name" name="sumber" size="1px" disabled value="<?php  echo "$sumber"; ?>"></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="tgl_faktur" size="1px" disabled value="<?php  echo "$tgl_faktur"; ?>"></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="tpb" size="1px" disabled value="<?php  echo "$tpb"; ?>"></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="tglangsur1" size="1px" disabled value="<?php  echo "$tglangsur1"; ?>"></td><td align="center">S/D</td> <td> <input type="text" class="form-control" id="contract-name" name="tglangsur2" size="1px" disabled value="<?php  echo "$tglangsur2"; ?>"></td>
                         
                       </tr>
                           
                       </table>
                        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                        <table border="0">
                            <tr>
                                <td width="100px"><label for="contact-name" class="control-label"> NAMA</label></td>
                                <td>:</td>
                                <td width="300px" colspan="4"> <input type="text" class="form-control" id="contract-name" name="nama" placeholder="Masukan Nama Petugas" disabled value="<?php  echo "$nama"; ?>"></td>
                                <td width="25px"></td>
                                <td width="100px"><label for="contact-name" class="control-label"> TGL. LAHIR</label></td>
                                <td>:</td>
                                <td width="150px"><input type="text" class="form-control" id="contract-name" name="tgl_lahir" placeholder="Tanggal/Bulan/Tahun" disabled value="<?php  echo "$tgl_lahir"; ?>"></td>
                                <td width="35px"></td>
                                <td width="100px"><label for="contact-name" class="control-label"> SPA</label></td>
                                <td>:</td>
                                <td width="150px" colspan="4"><input type="text" class="form-control" id="contract-name" name="spa" placeholder="Masukan SPA" disabled value="<?php  echo "$spa"; ?>"></td><td width="35px"><label for="contact-name" class="control-label">  KALI</label></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td width="100px"><label for="contact-name" class="control-label"> ALAMAT JL.</label></td>
                                <td>:</td>
                                <td colspan="8" width="300px"><input type="text" class="form-control" id="contract-name" name="jalan" placeholder="Masukan Jalan" disabled value="<?php  echo "$jalan"; ?>"></td>
                                 <td width="35px"></td>
                                <td colspan="5"><label for="contact-name" class="control-label"> DP</label></td>
                                <td width="35px" align="center"><label for="contact-name" class="control-label"> Rp. </label></td>
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="dp" disabled value="<?php  echo number_format($dp,'0',',','.'); ?>"></td>
                            </tr>

                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td width="100px" align="right"><label for="contact-name" class="control-label"> KEL.</label></td>
                                <td>:</td>
                                <td width="300px" colspan="4"><input type="text" class="form-control" id="contract-name" name="kelurahan" placeholder="Masukan Keluran" disabled value="<?php  echo "$kelurahan"; ?>"></td>
                                 <td width="35px"></td>
                                 <td><label for="contact-name" class="control-label">TELP. RUMAH</label></td>
                                 <td>:</td>
                                 <td><input type="text" class="form-control" id="contract-name" name="tlp" placeholder="Masukan No Tlp" disabled value="<?php  echo "$tlp"; ?>"></td>
                                 <td></td>
                                <td><label for="contact-name" class="control-label"> ANGSURAN</label></td>
                                <td>:</td>
                                <td width="50px"><input type="text" class="form-control" id="contract-name" name="banyakangsuran1" placeholder="Angsuran" disabled value="<?php  echo "$banyakangsuran1"; ?>"></td>
                                <td width="30px" align="center"> X </td>
                                <td><input type="text" class="form-control" id="contract-name" name="nominalangsuran1" placeholder="Angsuran" disabled value="<?php  echo number_format($nominalangsuran1,'0',',','.'); ?>"></td>
                                <td width="35px" align="center"><label for="contact-name" class="control-label"> Rp. </label></td>
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="saldo1" disabled value="<?php  echo number_format($saldo1,'0',',','.'); ?>"></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td width="100px" align="right"><label for="contact-name" class="control-label"> RT.</label></td>
                                <td>:</td>
                                <td width="60px"><input type="text" class="form-control" id="contract-name" name="rt" placeholder="RT" disabled value="<?php  echo "$rt"; ?>"></td>
                                 <td width="35px" align="center" style="font-weight: bold;">RW</td>
                                 <td width="60px"><input type="text" class="form-control" id="contract-name" name="rw" placeholder="RW" disabled value="<?php  echo "$rw"; ?>"></td>
                                 <td></td>
                                 <td></td>
                                 <td><label for="contact-name" class="control-label">KOTA</label></td>
                                 <td>:</td>
                                 <td><input type="text" class="form-control" id="contract-name" name="kota" placeholder="Masukan Kota" disabled value="<?php  echo "$kota"; ?>"></td>
                                 <td></td>
                                <td><label for="contact-name" class="control-label"> ANGSURAN</label></td>
                                <td>:</td>
                                <td width="50px"><input type="text" class="form-control" id="contract-name" name="banyakangsuran2" placeholder="Angsuran" disabled value="<?php  echo "$banyakangsuran2"; ?>"></td>
                                <td width="30px" align="center"> X </td>
                                <td><input type="text" class="form-control" id="contract-name" name="nominalangsuran2" placeholder="Angsuran" disabled value="<?php  echo number_format($nominalangsuran2,'0',',','.'); ?>"></td>
                                <td width="35px" align="center"><label for="contact-name" class="control-label"> Rp. </label></td>
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="saldo2" disabled value="<?php  echo number_format($saldo2,'0',',','.'); ?>"></label></td>
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
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="total" disabled value="<?php  echo number_format($total,'0',',','.'); ?>"></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td><label for="contact-name" class="control-label">NAMA KANTOR</label></td>
                                <td>:</td>
                                <td colspan="8" width="300px"><input type="text" class="form-control" id="contract-name" name="kantor" placeholder="Masukan Kantor" disabled value="<?php  echo "$kantor"; ?>"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> SURVEYOR</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="surveyor" placeholder="Masukan Surveyor" disabled value="<?php  echo "$surveyor"; ?>"></td>
                                <td></td>
                                <td></td>
                            </tr>
                             <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td><label for="contact-name" class="control-label">ALAMAT KANTOR</label></td>
                                <td>:</td>
                                <td colspan="8" width="300px"><input type="text" class="form-control" id="contract-name" name="alamatkantor" placeholder="Masukan Kantor" disabled value="<?php  echo "$alamatkantor"; ?>"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> SALES</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="sales" placeholder="Masukan Seles" disabled value="<?php  echo "$sales"; ?>"></td>
                                <td></td>
                                <td></td>
                            </tr>   
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td><label for="contact-name" class="control-label">JABATAN</label></td>
                                <td>:</td>
                                <td colspan="5" width="300px"><input type="text" class="form-control" id="contract-name" name="jabatan" placeholder="Masukan Jabatan" disabled value="<?php  echo "$jabatan"; ?>"></td>
                                <td><label for="contact-name" class="control-label">TELP. KANTOR</label></td>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="contract-name" name="telp_kantor" placeholder="Masukan No Telp" disabled value="<?php  echo "$telp_kantor"; ?>"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label">SUPERVISOR</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="supervisor" placeholder="Masukan Supervisor" disabled value="<?php  echo "$supervisor"; ?>"></td>
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
                            <tr class="warning">
                                <td>1</td>
                                <td><?php  echo "$namabarang1"; ?></td>
                                <td><?php  echo "$merkbarang1"; ?></td>
                                <td><?php  echo "$typebarang1"; ?></td>
                                <td><?php  echo "$unitbarang1"; ?></td>
                                <td><?php  echo "$noseribarang1"; ?></td>
                            </tr>
                            <tr class="warning">
                                <td>2</td>
                                <td><?php  echo "$namabarang2"; ?></td>
                                <td><?php  echo "$merkbarang2"; ?></td>
                                <td><?php  echo "$typebarang2"; ?></td>
                                <td><?php  echo "$unitbarang2"; ?></td>
                                <td><?php  echo "$noseribarang2"; ?></td>
                            </tr>
                            <tr class="warning">
                                <td>3</td>
                                <td><?php  echo "$namabarang3"; ?></td>
                                <td><?php  echo "$merkbarang3"; ?></td>
                                <td><?php  echo "$typebarang3"; ?></td>
                                <td><?php  echo "$unitbarang3"; ?></td>
                                <td><?php  echo "$noseribarang3"; ?></td>
                            </tr>
                        </table>

                                </td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> PENJAMIN</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="penjamin" placeholder="Masukan Penjamin" disabled value="<?php  echo "$penjamin"; ?>"></td>
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
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" disabled value="<?php  echo "$agama"; ?>"></td>
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
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="wilayah" placeholder="Masukan Wilayah" disabled value="<?php  echo "$wilayah"; ?>"></td>
                                <td></td>
                                <td></td>
                            </tr>   
                        </table>
                        <br>

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
                                            <input type="text" class="form-control" id="contract-name" disabled placeholder="Masukan Setoran Ke" name="angsuran" value="<?php echo "$angsuranbaru"; ?>">
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