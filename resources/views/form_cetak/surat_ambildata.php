<script>
window.print();
</script>

<?php
  $tanggal=date_default_timezone_get();
 ?>

<center>
  <p><img src="../kop copy.png" width="902" height="159"/></p>
<table border="0">
  <thead>
  <tr>
  	<th width="77"><div align="left">Nomor</div></th>
    <th width="10"><div align="left">:</div></th>
    <th width="317"><div align="left">&nbsp;/UN9.1.9/AK/{!! date('Y',strtotime($tanggal)) !!}</div></th>
    <th width="443"><div align="right">{!! date('d-m-Y',strtotime($tanggal)) !!}</div></th>
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
    <th colspan="3"><div align="left">Yth. Ketua</div></th>
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
    <td width="43">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="704">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</center>
<center><table width="832" border="0">
  <tr>
    <td colspan="5">Dengan Hormat, Kami sampaikan bahwa salah satu syarat bagi mahasiswa Fakultas Ilmu Komputer Universitas Sriwijaya dalam menyelesaikan pendidikannya adalah menyusun Tugas Akhir(TA).</td>
    </tr>
  <?php $no=1; ?>
  @foreach($ppkp as $data)
  @if($data->mahasiswa->prodi->nama=="Sistem Informasi Reguler")
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="259">&nbsp;</td>
    <td width="226">&nbsp;</td>
    <td width="188">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">Berkenaan dengan itu, mahasiswa kami dibawah ini :</td>
    </tr>
  <tr>
    <td><div align="center">Nama</div></td>
    <td>:</td>
    <td colspan="3"><div align="left"></div></td>
    </tr>
  <tr>
    <td><div align="center">NIM</div></td>
    <td>:</td>
    <td colspan="3"><div align="left"></div></td>
    </tr>
  <tr>
    <td><div align="center">Jurusan</div></td>
    <td>:</td>
    <td colspan="3"><div align="left"></div></td>
    </tr>
  <tr>
    <td><div align="center">Program Studi</div></td>
    <td>:</td>
    <td colspan="3"><div align="left"></div></td>
    </tr>
  <tr>
    <td width="130"><div align="center">Judul</div></td>
    <td width="7">:</td>
    <td colspan="3"><div align="left"></div></td>
    </tr>
  @endif
  @endforeach
</table></center>

