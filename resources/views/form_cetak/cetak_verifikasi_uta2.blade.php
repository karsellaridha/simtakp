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
  <p align="center"><u><strong>Syarat-syarat Proposal Tugas Akhir</strong></u></p>
  <table width="768" border="1">
    <tr>
      <td width="22"><div align="center">No.</div></td>
      <td width="494"><div align="center">Uraian Kegiatan</div></td>
      <td width="230"><div align="center">Paraf Petugas</div></td>
    </tr>
    <tr>
      <td><div align="center">1. </div></td>
      <td><div align="justify">Fotocopy Kartu Studi Mahasiswa (KSM) atau Kartu rencana Studi (KRS) dan Kartu Tanda Mahasiswa (KTM)</div></td>
      <td><div align="center">{!!$verifikasi->ksmktm!!}</div></td>
    </tr>
    <tr>
      <td><div align="center">2. </div></td>
      <td><div align="justify">Membayar biaya ujian dan biaya bimbingan sebesar Rp.450.000 / Rp. 255.000 bagi yang tidak lulus ujian komprehensif yang pertama, ujian yang kedua atau ketiga ke Bank BNI dengan no.rek 70570115 a.n Rektor Unsri</div></td>
      <td><div align="center">{!!$verifikasi->biaya_ujian!!}</div></td>
    </tr>
    <tr>
      <td><div align="center">3. </div></td>
      <td><div align="justify">Fotocopy Kartu Hasil Studi (KHS) dari semester 1 sampai dengan semester terakhir / Daftar Kumpulan Nilai (DKN)</div></td>
      <td><div align="center">{!!$verifikasi->dkn!!}</div></td>
    </tr>
    <tr>
      <td><div align="center">4. </div></td>
      <td><div align="justify">Melampirkan fotocopy sertifikat kursus Bahasa Inggris dari Unit bahasa Inggris PIK</div></td>
      <td><div align="center">{!!$verifikasi->sertifikat!!}</div></td>
    </tr>
    <tr>
      <td><div align="center">5. </div></td>
      <td><div align="justify">Fotocopy/legalisir sertificate nilai SULIET minimal 500</div></td>
      <td><div align="center">{!!$verifikasi->suliet!!}</div></td>
    </tr>
    <tr>
      <td><div align="center">6. </div></td>
      <td><div align="justify">Printscren halaman nilai SULIET yang di Akademik (Simak)</div></td>
      <td>{!!$verifikasi->printscreen_suliet!!}</td>
    </tr>
    <tr>
      <td><div align="center">7. </div></td>
      <td><div align="justify">Mendapat rekomendasi dari kedua pembimbing untuk ujian komprehensif</div></td>
      <td><div align="center"></div>{!!$verifikasi->rekomendasi!!}</td>
    </tr>
    <tr>
      <td><div align="center">8. </div></td>
      <td><div align="justify">Melampirkan Form Perbaikan Ujian Tugas Akhir Akhir I</div></td>
      <td><div align="center">{!!$verifikasi->form_ta1!!}</div></td>
    </tr>
    <tr>
      <td><div align="center">9. </div></td>
      <td><div align="justify">4 eksemplar tugas akhir yang telah disetujui oleh pembimbing dijilid biasa dengan bagian depan plastik transparan dan bagian belakang menggunaan kertas kambing warna biru.</div></td>
      <td><div align="center">{!!$verifikasi->eksemplar!!}</div></td>
    </tr>
    <tr>
      <td><div align="center">10. </div></td>
      <td><div align="justify">Surat keterangan bebas pustaka dari perpustakaan Program Diploma Komputer &amp; perpustakaan Universitas Sriwijaya yang masih berlaku</div></td>
      <td><div align="center">{!!$verifikasi->bebas_pustaka!!}</div></td>
    </tr>
    <tr>
      <td><div align="center">11. </div></td>
      <td>Surat Keterangan dari bagian keuangan bahwa sudah bebas dari pembayaran apapun, yang masih berlaku</td>
      <td><div align="center">{!!$verifikasi->bebas_bayaran!!}</div></td>
    </tr>
    <tr>
      <td><div align="center">12.</div></td>
      <td>Fotocopy Surat Keputusan Tugas Akhir II yang masih berlaku</td>
      <td><div align="center">{!!$verifikasi->sk_ta!!}</div></td>
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