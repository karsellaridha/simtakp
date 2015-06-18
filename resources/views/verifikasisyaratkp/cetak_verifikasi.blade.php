<script>
window.print();
</script>

<?php
  $tanggal=date_default_timezone_get();
 ?>
<html>
<head>
<title>Cetak Hasil Verifikasi Syarat KP</title>
</head>

<body>
<p align="center"><u><strong>Kartu Kendali Kerja Praktek Lapangan</strong></u></p>
<table border="0">
  <thead>
  <tr>
  	<th width="257"></th>
    <th width="76"><div align="left">NIM</div></th>
    <th width="19">:</th>
    <th width="263"><div align="left">{!! $pskp->mahasiswa->nim !!}</div></th>
  </tr>
  <tr>
  	<th width="257"></th>
    <th><div align="left">Nama</div></th>
    <th width="19">:</th>
    <th><div align="left">{!! $pskp->mahasiswa->nama !!}</div></th>
  </tr>
  <tr>
  	<th width="257"></th>
    <th><div align="left">No.Hp</div></th>
    <th width="19">:</th>
    <th><div align="left">{!! $pskp->no_hp!!}</div></th>
  </tr>
  </thead>
  <tbody>
  
  <tr>
    
  </tr>
  
  </tbody>
</table>
<div align="center">
  <p align="center"><u>Syarat Kerja Praktek</u></p>
  <table width="723" border="1">
    <tr>
      <td width="544"><div align="center">Uraian Kegiatan</div></td>
      <td width="163"><div align="center">Paraf Petugas</div></td>
    </tr>
    <tr>
      <td><div align="left">1. Fotocopy Transkip Nilai</div></td>
      <td><div align="center">{!!$pskp->jumlah_sks!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">2. Salinan bukti Pembayaran sumbangan Pembinaan Pendidikan (SPP) semester berjalan</div></td>
      <td><div align="center">{!!$pskp->id_transaksispp!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">3. Salinan bukti pembayaran dana pengembangan Laboratorium (DPL) semester berjalan</div></td>
      <td><div align="center">{!!$pskp->id_transaksidpl!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">4. Fotocopi Kartu Studi Mahasiswa (KSM)</div></td>
      <td><div align="center">{!!$pskp->jumlah_sks!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">5. Proposal kerja praktek yang telah disetujui oleh dosen pembimbing</div></td>
      <td><div align="center">{!!$pskp->proposal_kp!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">6. Mengisi form permohonan kerja praktek</div></td>
      <td><div align="center">{!!$pskp->permohonan_kp!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">7. Surat kesediaan dosen untuk membimbing yang telah ditanda tangani oleh pembimbing</div></td>
      <td><div align="center">{!!$pskp->kesediaan_membimbing!!}</div></td>
    </tr>
      
  </table>
  <p>Indralaya,{!! date('d-m-Y',strtotime($tanggal)) !!}  Diperiksa Oleh Adm. :………………………….<br />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>	 Tanda tangan :……………………………………..<br />
    Indralaya,……………………………… Direkap Oleh Sekjur. :…………….…….…….<br />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>Tanda tangan :………………………………..…..</p>
  <p align="left">&nbsp;</p>
</div>
</body>
</html>