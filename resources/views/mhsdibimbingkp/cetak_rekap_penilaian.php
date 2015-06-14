<script>
window.print();
</script>

<div align="center">
  <p>REKAP NILAI KERJA PRAKTEK (KP)</p>
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
  
  <p></p>
  <table border="2" class="table">
    <tr>
      <td><div align="center">No.</div></td>
      <td><div align="center">Penilaian</div></td>
      <td><div align="center">Status (B)</div></td>
      <td><div align="center">Nilai (N)</div></td>
      <td><div align="center">Keterangan</div></td>
    </tr>
    <tr>
      <td><div align="center">1</div></td>
      <td>{!! $pengajuanpembkp->dosen->nama !!}</td>
      <td>Dosen Pembimbing KP</td>
      <td>60%</td>
      <td>{!! $nilaikp->nilai_totaldosbing() !!}</td>
    </tr>
    <tr>
      <td><div align="center">2</div></td>
      <td>{!! $nilaikp->pemb_lapangan !!}</td>
      <td>Pembimbing Lapangan</td>
      <td>40%</td>
      <td>{!! $nilaikp->nilai_totalpemblapangan() !!}</td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">Rata-Rata Nilai</div></td>
      <td>100%</td>
      <td>{!! $nilaikp->total_nilaikp() !!}</td>
    </tr>
  </table>
  <p></p>
  <table width="637" border="0">
    <tr>
      <td width="103"><div align="left">Rata-rata Nilai</div></td>
      <td width="8"><div align="center">:</div></td>
      <td width="504"><div align="left"></div></td>
    </tr>
    <tr>
      <td><div align="left">Dinyatakan</div></td>
      <td><div align="center">:</div></td>
      <td><div align="left"> Lulus / Tidak Lulus dengan indeks nilai</div></td>
    </tr>
  </table>
  <p></p>
  <p></p>
  <div align="right">
    <table width="838" border="0" class="table">
      <tr>
        <td width="228"></td>
        <td width="302"></td>
        <td width="294"><div align="left">Indralaya,</div></td>
      </tr>
      <tr>
        <td>Mengetahui,</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Ketua Jurusan,</td>
        <td>&nbsp;</td>
        <td>Dosen Pembimbing,</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><u>Fathoni, M.MSI</u></td>
        <td>&nbsp;</td>
        <td><div align="left"><u>{!! $pengajuanpembkp->dosen->nama !!}</u></div></td>
      </tr>
      <tr>
        <td>NIP.197210182008121001</td>
        <td>&nbsp;</td>
        <td>NIP.{!! $pengajuanpembkp->dosen->nip !!}</td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
