<!--<script>
window.print();
</script>-->

<?php
  $tanggal=date_default_timezone_get();
 ?>

<center>
  <p>{!! Html::image('kop copy.png','a picture', array('style'=>'width:902px; height:159px')) !!}
  </p></center>

<h3><b><center>FORM PERBAIKAN UJIAN PROPOSAL TUGAS AKHIR *)</center><b></h3>
<br>
<br>
<center><table width="72%" border="0">
  <tr>
    <td width="28%">Nama</th>
    <td width="3%">:</td>
    <td width="69%">{!! $ujianta1->mahasiswa->nama !!}</td>
  </tr>
  <tr>
    <td>NIM</th>
    <td>:</td>
    <td>{!! $ujianta1->mahasiswa->nim !!}</td>
  </tr>
  <tr>
    <td>Program Studi</th>
    <td>:</td>
    <td>{!! $ujianta1->mahasiswa->prodi->nama !!}</td>
  </tr>
  <tr>
    <td>Hari/Tanggal</th>
    <td>:</td>
    <td>{!! date('d-M-Y',strtotime($tanggal)) !!}</td>
  </tr>
  <tr>
    <td>Waktu</th>
    <td>:</td>
    <td>{!! date('d-M-Y',strtotime($tanggal)) !!}</td>
  </tr>
  <tr>
    <td>Judul Tugas Akhir</th>
    <td>:</td>
    <td>{!! $pengajuan->judul !!}</td>
  </tr>
  <tr>
    <td>Pembimbing I</th>
    <td>:</td>
    <td>{!! $pengajuan->ppta->data_pembimbing_1->nama!!}</td>
  </tr>
  <tr>
    <td>Pembimbing II</th>
    <td>:</td>
    <td>{!! @$pengajuan->ppta->data_pembimbing_2->nama!!}</td>
  </tr>
  <tr>
    <td>Perbaikan</th>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>Jangka Waktu Perbaikan</th>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td></td>    
  </tr>
   <tr>
    <td>&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table></center>

<div align="center">Telah diperbaiki sesuai dengan saran dan koreksi tim penguji ujian proposal</div>
<center><table width="76%" border="1">
  <tr>
    <td><div align="center">No</div></td>
    <td width="43%"><div align="center">Nama Penguji</div></td>
    <td width="25%"><div align="center">Status Penguji</div></td>
    <td width="25%"><div align="center">Tanda Tangan</div></td>
  </tr>
  <tr>
    <th height="53" scope="row">1.</th>
    <td>{!! $pengajuan->ppta->data_pembimbing_1->nama!!}</td>
    <td><div align="center">Ketua</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="56" scope="row">2.</th>
    <td>{!! @$pengajuan->ppta->data_pembimbing_2->nama!!}</td>
    <td><div align="center">Sekretaris</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="57" scope="row">3.</th>
    <td>{!! $penguji->data_penguji_1->nama !!}</td>
    <td><div align="center">Anggota</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="57" scope="row">4.</th>
    <td>{!! $penguji->data_penguji_2->nama !!}</td>
    <td><div align="center">Anggota</div></td>
    <td>&nbsp;</td>
  </tr>
</table></center>
<br>
<br>
<table width="200" border="0" align="right">
  <tr>
    <td>Inderalaya,</td>
  </tr>
  <tr>
    <td><strong>Mengetahui</strong></td>
  </tr>
  <tr>
    <td><strong>Ketua Jurusan,</strong></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
  <tr>
    <td><strong>Fathoni,MMSI</strong></td>
  </tr>
   <tr>
    <td><strong>NIP. 197210182008121001</strong></td>
  </tr>
</table>
<p><br>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br>
</p>
<table width="100%" border="0">
  <tr>
    <td><div align="center">*) Lembar untuk mahasiswa : Digunakan sebagai syarat untuk mengikuti Tugas Akhir II, sitanda tangani oleh penguji setelah ada perbaikan dari mahasiswa</div></td>
  </tr>
</table>


