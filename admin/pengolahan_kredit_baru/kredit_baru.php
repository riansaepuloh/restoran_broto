<?php 
include "koneksi.php";

?>
<div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">FORMULIR INFORMASI KONSUMEN</div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                       <form method="post" action="pengolahan_kredit_baru/simpan_kredit.php">
                       <style type="text/css">
                       th{
                        text-align: center;
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
                            <?php
                            $query=mysql_query("select max(nf) as nf from faktur");
                            $hasil_id=mysql_fetch_array($query);
                            $id_baru=substr($hasil_id['nf'],1,4);
                            $tambah=$id_baru+1;
                            if($tambah<10) {
                              $id="000".$tambah;
                            } else {
                              $id="00".$tambah;
                            }

                            $thnskarang = date("Y");
                            ?>


                           <td width="100px"> <input type="text" class="form-control" id="contract-name" name="nf" size="1px" value="<?php echo "$id"; ?>"></td>
                           <td> <input type="text" class="form-control" id="contract-name" name="tahun" size="1px" value="<?php echo "$thnskarang"; ?>"></td>
                           <td><input type="text" class="form-control" id="contract-name" name="jt" size="1px" placeholder="Jatuh Tempo"></td>
                           <td><input type="text" class="form-control" id="contract-name" name="no_faktur" size="1px" placeholder="no faktur"></td>
                           <td><input type="text" class="form-control" id="contract-name" name="sumber" size="1px" placeholder="Sumber"></td>
                           <td><input type="text" class="form-control" id="contract-name" name="tgl_faktur" size="1px" placeholder="Tanggal Faktur"></td>
                           <td><input type="text" class="form-control" id="contract-name" name="tpb" size="1px" placeholder="tpb"></td>
                           <td><input type="text" class="form-control" id="contract-name" name="tglangsur1" size="1px" placeholder="Tanggal Awal"><td align="center">S/D</td><td><input type="text" class="form-control" id="contract-name" name="tglangsur2" size="1px" placeholder="Tanggal Akhir"></td>
                         
                       </tr>
                           
                       </table>
                        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                        <table border="0">
                            <tr>
                                <td width="100px"><label for="contact-name" class="control-label"> NAMA</label></td>
                                <td>:</td>
                                <td width="300px" colspan="4"> <input type="text" class="form-control" id="contract-name" name="nama" placeholder="Masukan Nama Petugas"></td>
                                <td width="25px"></td>
                                <td width="100px"><label for="contact-name" class="control-label"> TGL. LAHIR</label></td>
                                <td>:</td>
                                <td width="150px"><input type="text" class="form-control" id="contract-name" name="tgl_lahir" placeholder="Tanggal/Bulan/Tahun"></td>
                                <td width="35px"></td>
                                <td width="100px"><label for="contact-name" class="control-label"> SPA</label></td>
                                <td>:</td>
                                <td width="150px" colspan="4"><input type="text" class="form-control" id="contract-name" name="spa" placeholder="Masukan SPA"></td><td width="35px"><label for="contact-name" class="control-label">  KALI</label></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td width="100px"><label for="contact-name" class="control-label"> ALAMAT JL.</label></td>
                                <td>:</td>
                                <td colspan="8" width="300px"><input type="text" class="form-control" id="contract-name" name="jalan" placeholder="Masukan Jalan"></td>
                                 <td width="35px"></td>
                                <td colspan="5"><label for="contact-name" class="control-label"> DP</label></td>
                                <td width="35px" align="center"><label for="contact-name" class="control-label"> Rp. </label></td>
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="dp"></td>
                            </tr>

                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td width="100px" align="right"><label for="contact-name" class="control-label"> KEL.</label></td>
                                <td>:</td>
                                <td width="300px" colspan="4"><input type="text" class="form-control" id="contract-name" name="kelurahan" placeholder="Masukan Keluran"></td>
                                 <td width="35px"></td>
                                 <td><label for="contact-name" class="control-label">TELP. RUMAH</label></td>
                                 <td>:</td>
                                 <td><input type="text" class="form-control" id="contract-name" name="tlp" placeholder="Masukan No Tlp"></td>
                                 <td></td>
                                <td><label for="contact-name" class="control-label"> ANGSURAN</label></td>
                                <td>:</td>
                                <td width="50px"><input type="text" class="form-control" id="contract-name" name="banyakangsuran1" placeholder="Angsuran"></td>
                                <td width="30px" align="center"> X </td>
                                <td><input type="text" class="form-control" id="contract-name" name="nominalangsuran1" placeholder="Angsuran"></td>
                                <td width="35px" align="center"><label for="contact-name" class="control-label"> Rp. </label></td>
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="saldo1" ></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td width="100px" align="right"><label for="contact-name" class="control-label"> RT.</label></td>
                                <td>:</td>
                                <td width="60px"><input type="text" class="form-control" id="contract-name" name="rt" placeholder="RT"></td>
                                 <td width="35px" align="center" style="font-weight: bold;">RW</td>
                                 <td width="60px"><input type="text" class="form-control" id="contract-name" name="rw" placeholder="RW"></td>
                                 <td></td>
                                 <td></td>
                                 <td><label for="contact-name" class="control-label">KOTA</label></td>
                                 <td>:</td>
                                 <td><input type="text" class="form-control" id="contract-name" name="kota" placeholder="Masukan Kota"></td>
                                 <td></td>
                                <td><label for="contact-name" class="control-label"> ANGSURAN</label></td>
                                <td>:</td>
                                <td width="50px"><input type="text" class="form-control" id="contract-name" name="banyakangsuran2" placeholder="Angsuran"></td>
                                <td width="30px" align="center"> X </td>
                                <td><input type="text" class="form-control" id="contract-name" name="nominalangsuran2" placeholder="Angsuran"></td>
                                <td width="35px" align="center"><label for="contact-name" class="control-label"> Rp. </label></td>
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="saldo2" ></label></td>
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
                                <td width="200px"><input type="text" class="form-control" id="contract-name" name="total" ></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td><label for="contact-name" class="control-label">NAMA KANTOR</label></td>
                                <td>:</td>
                                <td colspan="8" width="300px"><input type="text" class="form-control" id="contract-name" name="kantor" placeholder="Masukan Kantor"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> SURVEYOR</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="surveyor" placeholder="Masukan Surveyor"></td>
                                <td></td>
                                <td></td>
                            </tr>
                             <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td><label for="contact-name" class="control-label">ALAMAT KANTOR</label></td>
                                <td>:</td>
                                <td colspan="8" width="300px"><input type="text" class="form-control" id="contract-name" name="alamatkantor" placeholder="Masukan Kantor"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> SALES</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="sales" placeholder="Masukan Seles"></td>
                                <td></td>
                                <td></td>
                            </tr>   
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td><label for="contact-name" class="control-label">JABATAN</label></td>
                                <td>:</td>
                                <td colspan="5" width="300px"><input type="text" class="form-control" id="contract-name" name="jabatan" placeholder="Masukan Jabatan"></td>
                                <td><label for="contact-name" class="control-label">TELP. KANTOR</label></td>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="contract-name" name="telp_kantor" placeholder="Masukan No Telp"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label">SUPERVISOR</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="supervisor" placeholder="Masukan Supervisor"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="8" width="300px"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> PENJAMIN</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="penjamin" placeholder="Masukan Penjamin"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="8" width="300px"></td>
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
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td height="10px"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="8" width="300px"></td>
                                 <td width="35px"></td>
                                <td><label for="contact-name" class="control-label"> WILAYAH</label></td>
                                <td></td>
                                <td width="200px" colspan="3"><input type="text" class="form-control" id="contract-name" name="wilayah" placeholder="Masukan Wilayah"></td>
                                <td></td>
                                <td></td>
                            </tr>   
                        </table>
                        <br>
                        <table class="table table-bordered">
                            <th>No</th>
                            <th>NAMA BARANG</th>
                            <th>MERK</th>
                            <th>TYPE</th>
                            <th>UNIT</th>
                            <th>NO. SERI</th>
                            <tr>
                                <td>1</td>
                                <td><input type="text" class="form-control" id="contract-name" name="namabarang1" placeholder="Masukan Nama Barang" required></td>
                                <td><input type="text" class="form-control" id="contract-name" name="merkbarang1" placeholder="Masukan Merek" required></td>
                                <td><input type="text" class="form-control" id="contract-name" name="typebarang1" placeholder="Masukan Type"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="unitbarang1" placeholder="Masukan Unit"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="noseribarang1" placeholder="Masukan No Seri"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="text" class="form-control" id="contract-name" name="namabarang2" placeholder="Masukan Nama Barang"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="merkbarang2" placeholder="Masukan Merek"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="typebarang2" placeholder="Masukan Type"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="unitbarang2" placeholder="Masukan Unit"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="noseribarang2" placeholder="Masukan No Seri"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><input type="text" class="form-control" id="contract-name" name="namabarang3" placeholder="Masukan Nama Barang"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="merkbarang3" placeholder="Masukan Merek"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="typebarang3" placeholder="Masukan Type"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="unitbarang3" placeholder="Masukan Unit"></td>
                                <td><input type="text" class="form-control" id="contract-name" name="noseribarang3" placeholder="Masukan No Seri"></td>
                            </tr>
                        </table>
                        <center><input type="Submit" value="Tambah Keredit" class="btn btn-success"></input> <input type="reset" class="btn btn-success"></input></center>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>