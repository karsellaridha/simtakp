<script>
window.print();
</script>

<?php
  $tanggal=date_default_timezone_get();
 ?>

<p align="center">{!! Html::image('kop copy.png','a picture', array('style'=>'width:902px; height:159px')) !!}
</p>
<p align="center"><strong>PEMBIMBING TUGAS AKHIR
</strong></p>
<p align="center"> <strong>JURUSAN SISTEM INFORMASI </strong></p>
<p align="center"><strong>PROGRAM STUDI SISTEM INFORMASI REGULER</strong></p>
<p align="center"><strong>TAHUN {!! date('Y',strtotime($tanggal)) !!}</strong></p>
<center><table width="560" border="1">
  <tr>
    <td width="37"><div align="center">No</div></td>
    <td width="150"><div align="center">NIM</div></td>
    <td width="176"><div align="center">NAMA</div></td>
    <td width="186"><div align="center">PEMBIMBING 1</div></td>
    <td width="186"><div align="center">PEMBIMBING 2</div></td>
  </tr>
  <?php $no=1; ?>
  @foreach($ppta as $data)
  @if($data->mahasiswa->prodi->nama=="Sistem Informasi Reguler")
  <tr>
    <td width="37">{!! $no++ !!}</td>
    <td width="150">{!! $data->mahasiswa->nim !!}</td>
    <td width="176">{!! $data->mahasiswa->nama !!}</td>
    <td width="186">{!! $data->data_pembimbing_1->nama !!}</td>
    <td width="186">{!! @$data->data_pembimbing_2->nama !!}</td>
  </tr>
  @endif
  @endforeach
</table></center>

