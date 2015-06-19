<script>
window.print();
</script>

<?php
  $tanggal=date_default_timezone_get();
 ?>
 
<html>
<head>
<title>Cetak Verifikasi Syarat SK TA</title>
</head>

<body>
<div align="center">
<table border="0">
  <thead>
  <tr>
  	<th width="257"></th>
    <th width="76"><div align="left">NIM</div></th>
    <th width="19">:</th>
    <th width="263"><div align="left">{!! $psta->mahasiswa->nim !!}</div></th>
  </tr>
  <tr>
  	<th width="257"></th>
    <th><div align="left">Nama</div></th>
    <th width="19">:</th>
    <th><div align="left">{!! $psta->mahasiswa->nama !!}</div></th>
  </tr>
  <tr>
  	<th width="257"></th>
    <th><div align="left">No.Hp</div></th>
    <th width="19">:</th>
    <th><div align="left">{!! $psta->no_hp!!}</div></th>
  </tr>
  </thead>
</table>
  <p align="center"><u>Syarat permintaan SK TA</u></p>
  <table width="723" border="1">
    <tr>
      <td width="544"><div align="center">Uraian Kegiatan</div></td>
      <td width="163"><div align="center">Paraf Petugas</div></td>
    </tr>
    <tr>
      <td><div align="left">1. Fotocopy Transkip Nilai dan Fotokopi KSM (Kartu Studi Mahasiswa)</div></td>
      <td><div align="center">{!!$verifikasi->jumlah_sks!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">2. Fotokopi Pembayaran sumbangan Pembinaan Pendidikan (SPP) semester berjalan</div></td>
      <td><div align="center">{!!$verifikasi->id_transaksispp!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">3. Fotokopi pembayaran dana pengembangan Laboratorium (DPL) semester berjalan</div></td>
      <td><div align="center">{!!$verifikasi->id_transaksidpl!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">4. Fotocopi Kartu Tanda Mahasiswa (KTM) yang Berlaku</div></td>
      <td><div align="center">{!!$verifikasi->ktm!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">5. Proposal Tugas AKhir</div></td>
      <td><div align="center">{!!$verifikasi->proposal_ta!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">6. Tanda Terima Laporan Kerja Praktek</div></td>
      <td><div align="center">{!!$verifikasi->tanda_kp!!}</div></td>
    </tr>
    <tr>
      <td>7. Form Kesediaan untuk membimbing dari calon pembimbing TA</td>
      <td><div align="center">{!!$verifikasi->kesediaan_membimbing!!}</div></td>
    </tr>
    <tr>
      <td>8. Halaman Peresetujuan Proyek TA</td>
      <td><div align="center">{!!$verifikasi->persetujuan_ta!!}</div></td>
    </tr>
    <tr>
      <td>9. Permohonan Penerbitan Surat Keputusan Pembimbing</td>
      <td><div align="center">{!!$verifikasi->sk_pemb!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">10. Permohonan Surat Pengantar pengambilan Data/Pelaksanaan Tugas Akhir</div></td>
      <td><div align="center">{!!$verifikasi->permohonan_ambildata!!}</div></td>
    </tr>
  </table>
  <p>Indralaya,{!! date('d-M-Y',strtotime($tanggal)) !!} Diperiksa Oleh Adm. :………………………….<br />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>	 Tanda tangan :……………………………………..</p>
<p align="left">&nbsp;</p>
</div>
</body>
</html>