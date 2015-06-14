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
    <th width="317"><div align="left">     /UN9.1.9/AK/{!! date('Y',strtotime($tanggal)) !!}</div></th>
    <th width="443"><div align="right">{!! date('d-m-Y',strtotime($tanggal)) !!}</div></th>
  </tr>
  <tr>
  	<th width="77"><div align="left">Lampiran</div></th>
    <th><div align="left">:</div></th>
    <th><div align="left"></div></th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <th><div align="left">Hal</div></th>
    <th>:</th>
    <th><div align="left"></div></th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  <tr>
  	<th width="77"><div align="left"></div></th>
    <th><div align="left"></div></th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  </thead>
  <tbody>
  
  <tr>
    
  </tr>
  
  </tbody>
</table>
<p>&nbsp;</p>
</center>
<center><table width="832" border="1">
  <tr>
    <td width="37"><div align="center">No</div></td>
    <td width="150"><div align="center">NIM</div></td>
    <td width="176"><div align="center">NAMA</div></td>
    <td width="207"><div align="center">PROGRAM STUDI</div></td>
    <td width="169"><div align="center">PEMBIMBING</div></td>
  </tr>
  <?php $no=1; ?>
  @foreach($ppkp as $data)
  @if($data->mahasiswa->prodi->nama=="Sistem Informasi Reguler")
  <tr>
    <td width="37">{!! $no++ !!}</td>
    <td width="150">{!! $data->mahasiswa->nim !!}</td>
    <td width="176">{!! $data->mahasiswa->nama !!}</td>
    <td width="207">{!! $data->mahasiswa->prodi->nama !!}</td>
    <td width="169">{!! $data->dosen->nama !!}</td>
  </tr>
  @endif
  @endforeach
</table></center>

