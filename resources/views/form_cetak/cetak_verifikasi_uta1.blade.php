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
    <th width="263"><div align="left">{!! $pengajuanUjian->mahasiswa->nim !!}</div></th>
  </tr>
  <tr>
  	<th width="257"></th>
    <th><div align="left">Nama</div></th>
    <th width="19">:</th>
    <th><div align="left">{!! $pengajuanUjian->mahasiswa->nama !!}</div></th>
  </tr>
  <tr>
  	<th width="257"></th>
    <th><div align="left">No.Hp</div></th>
    <th width="19">:</th>
    <th><div align="left">{!! $pengajuanUjian->no_hp!!}</div></th>
  </tr>
  </thead>
</table>
  <p align="center"><u><strong>Syarat-syarat Proposal Tugas Akhir</strong></u></p>
  <table width="723" border="1">
    <tr>
      <td width="544"><div align="center">Uraian Kegiatan</div></td>
      <td width="163"><div align="center">Paraf Petugas</div></td>
    </tr>
    <tr>
      <td><div align="left">1. Fotocopy Kartu Studi Mahasiswa (KSM) atau Kartu rencana Studi<br>
        (KRS) dan Kartu Tanda Mahasiswa (KTM)</div></td>
      <td><div align="center">{!!$pengajuanUjian->ksm!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">2. Fotocopy bukti pembayaran SPP dan DPL berjalan</div></td>
      <td><div align="center">{!!$pengajuanUjian->spp!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">3. Fotocopy Kartu Hasil Studi (KHS) dari semester 1 sampai dengan<br>
        semester terakhir / Daftar Kumpulan Nilai (DKN)</div></td>
      <td><div align="center">{!!$pengajuanUjian->dkn!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">4. Fotocopy form konsultasi TA1 yang telah ditanda tangani oleh ketua<br>
        jurusan</div></td>
      <td><div align="center">{!!$pengajuanUjian->form_konsultasi!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">5. Mendapat rekomendasi dari pembimbing untuk mengikuti ujian<br>
        proposal tugas akhir</div></td>
      <td><div align="center">{!!$pengajuanUjian->rekomendasi_sidang!!}</div></td>
    </tr>
    <tr>
      <td><div align="left">6. Fotocopy Surat Keputusan pembimbing Tugas Akhir</div></td>
      <td><div align="center">{!!$pengajuanUjian->sk_pembimbing_ta!!}</div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="723" border="0">
    <tr>
      <td width="486">&nbsp;</td>
      <td width="227">Indralaya,{!! date('d-M-Y',strtotime($tanggal)) !!}</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Pemeriksa,</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>(......................................................)</td>
    </tr>
  </table>
  <p align="left">&nbsp;</p>
</div>
</body>
</html>