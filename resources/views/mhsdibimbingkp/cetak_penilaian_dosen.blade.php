<script>
window.print();
</script>

<div align="center">
  <p>FORMULIR PENILAIAN KERJA PRAKTEK (KP)</p>
  <table width="416" border="0">
    <tr>
      <td width="159">Nama Mahasiswa</td>
      <td width="8"><div align="center">:</div></td>
      <td width="229">{!! $pengajuanpembkp->mahasiswa->nama !!}</td>
    </tr>
    <tr>
      <td>NIM</td>
      <td><div align="center">:</div></td>
      <td>{!! $pengajuanpembkp->mahasiswa->nim !!}</td>
    </tr>
    <tr>
      <td>Program Studi</td>
      <td><div align="center">:</div></td>
      <td>{!! $pengajuanpembkp->mahasiswa->prodi->nama !!}</td>
    </tr>
    <tr>
      <td>Tempat KP</td>
      <td><div align="center">:</div></td>
      <td>{!! $pengajuanpembkp->mahasiswa->pengajuanpembkp->tempat_kp !!}</td>
    </tr>
    <tr>
      <td>Judul Laporan KP</td>
      <td><div align="center">:</div></td>
      <td>{!! @$nilaikp->judul_kp !!}</td>
    </tr>
    <tr>
      <td>Dosen Pembimbing</td>
      <td><div align="center">:</div></td>
      <td>{!! $pengajuanpembkp->dosen->nama !!}</td>
    </tr>
    <tr>
      <td>Pembimbing Lapangan</td>
      <td><div align="center">:</div></td>
      <td>{!! @$nilaikp->pemb_lapangan !!}</td>
    </tr>
  </table>
  
  <p>&nbsp;</p>
  <table border="1" class="table">

  <tr>
    <td><div align="center">No.</div></td>
    <td><div align="center">Penilaian</div></td>
    <td><div align="center">Bobot (B)</div></td>
    <td><div align="center">Nilai (N)</div></td>
    <td><div align="center">BxN</div></td>
  </tr>

  <tr>
    <td><div align="center">1</div></td>
    <td>Kesesuaian Laporan dengan Format</td>
    <td><div align="center">30%</div></td>
    <td><div align="center">{!! $nilaikp->kesesuaian_laporan !!}</div></td>
    <td><div align="center">{!! 0.3*$nilaikp->kesesuaian_laporan !!}</div></td>
  </tr>

  <tr>
    <td><div align="center">2</div></td>
    <td>Penguasaan Materi KP</td>
    <td><div align="center">30%</div></td>
    <td><div align="center">{!! $nilaikp->penguasaan_materi !!}</div></td>
    <td><div align="center">{!! 0.3*$nilaikp->penguasaan_materi !!}</div></td>
  </tr>

  <tr>
    <td><div align="center">3</div></td>
    <td>Analisis dan Perancangan</td>
    <td><div align="center">30%</div></td>
    <td><div align="center">{!! $nilaikp->analisis_perancangan !!}</div></td>
    <td><div align="center">{!! 0.3*$nilaikp->analisis_perancangan !!}</div></td>
  </tr>

  <tr>
    <td><div align="center">4</div></td>
    <td>Sikap dan Etika</td>
    <td><div align="center">10%</div></td>
    <td><div align="center">{!! $nilaikp->sikap_etika !!}</div></td>
    <td><div align="center">{!! 0.3*$nilaikp->sikap_etika !!}</div></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">Jumlah</div></td>
    <td><div align="center">{!! $nilaikp->nilai_totaldosbing() !!}</div></td>
  </tr>
</table>
  <p>&nbsp;</p>
  <div align="right">
    <table border="0" class="table">
      <tr>
        <td width="216"><div align="left">Indralaya,</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left"><u>{!! $pengajuanpembkp->dosen->nama !!}</u></div></td>
      </tr>
      <tr>
        <td>NIP.{!! $pengajuanpembkp->dosen->nip !!}</td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
