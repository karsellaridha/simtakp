<script>
window.print();
</script>
<center><img src="../kop copy.png" width="902" height="159"/>
</center>
<p align="center"><strong>PEMBIMBING KERJA PRAKTEK
</strong></p>
<p align="center"> <strong>JURUSAN SISTEM INFORMASI </strong></p>
<p align="center"><strong>PROGRAM STUDI SISTEM INFORMASI REGULER</strong></p>
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
  @if($data->mahasiswa->prodi->nama=="Sistem Informasi Bilingual")
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

