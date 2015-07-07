<script>
window.print();
</script>

<?php
  $tanggal=date_default_timezone_get();
 ?>

<center>
  <p>{!! Html::image('kop copy.png','a picture', array('style'=>'width:902px; height:159px')) !!}
  </p></center>

<h3><b><center>
  <p>FORM PENILAIAN UJIAN KOMPREHENSIF </p>
</center></h3>
<center><table width="100%" border="0">
  <tr>
    <td width="28%">Nama Mahasiswa<td width="3%">:</td>
    <td width="69%">{!! $ujianta2->mahasiswa->nama !!}</td>
  </tr>
  <tr>
    <td>NIM</th>
    <td>:</td>
    <td>{!! $ujianta2->mahasiswa->nim !!}</td>
  </tr>
  <tr>
    <td>Program Studi</th>
    <td>:</td>
    <td>{!! $ujianta2->mahasiswa->prodi->nama !!}</td>
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
    <td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pembimbing I</td>
    <td>:</td>
    <td>{!! $pengajuan->ppta->data_pembimbing_1->nama!!}</td>
  </tr>
  <tr>
    <td>Pembimbing II</th>
    <td>:</td>
    <td>{!! @$pengajuan->ppta->data_pembimbing_2->nama!!}</td>
  </tr>
   <tr>
    <td>&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  <br>
<table width="100%" border="1">
  <tr>
    <td><div align="center"><strong>No</strong></div></td>
    <td width="43%"><div align="center"><strong>Komponen Penilaian</strong></div></td>
    <td width="25%"><div align="center"><strong>Bobot (B)</strong></div></td>
    <td width="25%"><div align="center"><strong>Nilai (N)</strong></div></td>
    <td width="25%"><div align="center"><strong>B X N</strong></div></td>
  </tr>
  <tr>
    <td>1.</td>
    <td>Penyajian/Presentasi</td>
    <td>5 %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="5">2.</td>
    <td>Laporan Tugas Akhir</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
     <td>&nbsp;</td>
  </tr>
  <tr>
    <td>a.Kesesuaian Format penulisan dengan pedoman tugas akhir</td>
    <td>5 %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>b. Penggunaan bahasa Indonesia yang baik dan benar</td>
    <td>5 %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>c. Kesesuaian antara analisis,desain,implementasi dan pengujian</td>
    <td>5 %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>d. Kelengkapan dokumen pendukung/lampiran</td>
    <td>5 %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td rowspan="4">3</td>
    <td>Penguasaan Materi TA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>a.Analisa, Perancangan dan Pengujian/Dokumentasi Portofolio</td>
    <td>20 %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>b. Pemrograman/ Kesesuaian Metedologi dengan Pembahasan Kasus</td>
    <td>20%</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>c. Basisdata/ Hasil Akhir pembahasan kasus</td>
    <td>10%</td>
    <td>&nbsp;</td>
      <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="4">4</td>
    <td>Penguasaan Pengetahuan Komputer Lainnya</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>a.Paket Perkantoran</td>
    <td>5 %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>b. Perangkat Keras Komputer dan Sistem Operasi</td>
    <td>5%</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>c. Jaringan Komputer</td>
    <td>10%</td>
    <td>&nbsp;</td>
      <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5.</td>
    <td>Sikap dan etika</td>
    <td>10 %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td colspan="4" align="center">JUMLAH</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>6.</td>
    <td>Penilaian Proses *)</td>
    <td>15 %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0">
  <tr>
    <td><strong>Catatan</strong></td>
  </tr>
  <tr>
    <th width="6%" scope="row">1.</th>
    <td width="94%">Nilai harus diisi dengan tiap sub komponen oleh penguji dengan angka 0-100</td>
  </tr>
  <tr>
    <th scope="row">2.</th>
    <td>(*) hanya diberikan oleh pembimbing tugas akhir</td>
  </tr>
  <tr>
    <th scope="row">3.</th>
    <td>Selisih nilai antara masing-masing pembimbing tidak boleh lebih dari 10</td>
  </tr>
  <tr>
    <th scope="row">4.</th>
    <td>Untuk topik Tugas Akhir yang tidak membahas pengembangan produk sistem informasi, indikator penilaian pada bagian penguasaan materi TA disesuaikan.</td>{!! date('d-M-Y',strtotime($tanggal)) !!}
  </tr>
</table>
<br />
<table width="100%" border="0">
  <tr>
    <td width="13%"><B>Keterangan Nilai:</B></td>
    <td width="2%">&nbsp;</td>
    <td width="51%">&nbsp;</td>
    <td width="34%">Palembang, {!! date('d-M-Y',strtotime($tanggal)) !!}</td>
  </tr>
  <tr>
    <td>86-100</td>
    <td>A</td>
    <td>&nbsp;</td>
    <td>Penguji,</td>
  </tr>
  <tr>
     <td>71-85</td>
    <td>B</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
     <td>56-70</td>
    <td>C</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>41-55</td>
    <td>D</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
     <td>  &lt;41</td>
    <td>E</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table></center>



