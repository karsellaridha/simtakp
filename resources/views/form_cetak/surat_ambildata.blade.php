<script>
window.print();
</script>

<?php
  $tanggal=date_default_timezone_get();
 ?>

<center>
  <p>{!! Html::image('kop copy.png','a picture', array('style'=>'width:902px; height:159px')) !!}</p>
<table border="0">
  <thead>
  <tr>
  	<th width="77"><div align="left">Nomor</div></th>
    <th width="10"><div align="left">:</div></th>
    <th width="317"><div align="left">&nbsp;/UN9.1.9/AK/{!! date('Y',strtotime($tanggal)) !!}</div></th>
    <th width="443"><div align="right">{!! date('d-M-Y',strtotime($tanggal)) !!}</div></th>
  </tr>
  <tr>
  	<th width="77"><div align="left">Lampiran</div></th>
    <th><div align="left">:</div></th>
    <th><div align="left">1 (satu) berkas</div></th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <th><div align="left"><strong>Hal</strong></div></th>
    <th><strong>:</strong></th>
    <th><div align="left"><strong>Pengantar Pengumpulan Data</strong></div></th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <th colspan="3"><div align="left">Yth. Ketua </div></th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <th>di</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  <tr>
  	<th width="77"><div align="left"></div></th>
    <th><div align="left"></div></th>
    <th><div align="left">Tempat</div></th>
    <th>&nbsp;</th>
  </tr>
  </thead>
  <tbody>
  
  </tbody>
</table><br />
<table width="861" border="0">
  <tr>
    <td colspan="4"><div align="justify">Dengan hormat, Kami sampaikan bahwa salah satu syarat bagi mahasiswa Fakultas Ilmu Komputer Universitas Sriwijaya dalam menyelesaikan pendidikannya adalah menyusun Tugas Akhir (TA).</div></td>
    </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="4">Berkenaan dengan itu, mahasiswa kami di bawah ini :</td>
    </tr>
  <tr>
    <td width="25">&nbsp;</td>
    <td width="93">Nama</td>
    <td width="8"><div align="center">:</div></td>
    <td width="717">{!! $psta->mahasiswa->nama !!}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>NIM</td>
    <td><div align="center">:</div></td>
    <td>{!! $psta->mahasiswa->nim !!}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Jurusan</td>
    <td><div align="center">:</div></td>
    <td>{!! $psta->mahasiswa->prodi->nama !!}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Program Studi</td>
    <td><div align="center">:</div></td>
    <td>{!! $psta->mahasiswa->prodi->nama !!}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Judul</td>
    <td><div align="center">:</div></td>
    <td>{!! $psta->judul !!}</td>
  </tr>
  <tr>
    <td colspan="4"><div align="justify">Bermaksud untuk mengumpulkan data-data yang ada kaitannya dengan judul Tugas Akhir (TA) di lembaga yang Saudara pimpin selama 2 bulan. Mohon kiranya Saudara dapat membantu mahasiswa tersebut. Data-data yang diperoleh hanya akan digunakan untuk kepentingan penelitian dan tidak akan diberikan kepada pihak lain.</div></td>
    </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="4">Atas bantuan izinnya diucapkan terima kasih.</td>
    </tr>
  </table>
  <table width="855">
  <tr>
    <td width="279">&nbsp;</td>
    <td width="385">&nbsp;</td>
    <td width="175">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>Dekan</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</center>


