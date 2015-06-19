<!--<script>
window.print();
</script>-->

<?php
  $tanggal=date_default_timezone_get();
 ?>
 
<center>
  <p><img src="../kop copy.png" width="902" height="159"/>
  </p>
<table width="915" border="0">
    <tr>
      <td colspan="6"><div align="center"><strong>KEPUTUSAN</strong></div></td>
    </tr>
    <tr>
      <td colspan="6"><div align="center"><strong>DEKAN FAKULTAS ILMU KOMPUTER UNIVERSITAS SRIWIJAYA</strong></div></td>
    </tr>
    <tr>
      <td colspan="6"><div align="center"><strong>Nomor :        /UN9.1.9/PP/{!! date('Y',strtotime($tanggal)) !!}</strong></div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6"><div align="center">TENTANG</div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6"><div align="center">PENGANGKATAN DOSEN PEMBIMBING TUGAS AKHIR (TA) MAHASISWA</div></td>
    </tr>
    <tr>
      <td height="28" colspan="6"><div align="center">JURUSAN SISTEM INFORMASI FAKULTAS ILMU KOMPUTER UNIVERSITAS SRIWIJAYA</div></td>
    </tr>
    <tr>
      <td colspan="6"><div align="center">
        <p>&nbsp;</p>
      </div></td>
    </tr>
    <tr>
      <td colspan="6"><div align="center"><strong>DEKAN FAKULTAS ILMU KOMPUTER UNIVERSITAS SRIWIJAYA</strong></div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td width="85">Menimbang</td>
      <td width="5"><div align="center">:</div></td>
      <td width="13"><div align="center">a.</div></td>
      <td colspan="3"><div align="justify">Bahwa mahasiswa Jurusan Sistem Informasi Fakultas Ilmu Komputer Universitas Sriwijaya akan membuat Tugas Akhir sebagai salah satu syarat untuk.</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center">b.</div></td>
      <td colspan="3"><div align="justify">Bahwa agar pelaksanaan pembuatan laporan Tugas Akhir tersebut dapat terlaksana dengan baik dan lancar, perlu menunjuk dosen pembimbing;</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">c.</div></td>
      <td colspan="3"><div align="justify">Bahwa sehubungan dengan butir a dan b diatas, dipandang perlu menerbitkan surat keputusan sebagai landasan hukumnya.</div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td>Mengingat</td>
      <td><div align="center">:</div></td>
      <td><div align="center">1.</div></td>
      <td colspan="3"><div align="justify">Undang-undang No.20 Tahun 2003 tentang Sistem Pendidikan Nasional (Lembaran Negara Republik Indonesia tahun 2003 No.78)</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">2.</div></td>
      <td colspan="3"><div align="justify">Undang-undang No.12 Tahun 2012 tentang Pendidikan Perguruan Tinggi (Tambahan Lembaran Negara Republik Indonesia No.5336)</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">3.</div></td>
      <td colspan="3"><div align="justify">Peraturan Pemerintah No. 42 Tahun 1960 Jo No. 60 Tahun 1999 tentang Pendirian Unsri</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">4.</div></td>
      <td colspan="3"><div align="justify">Keputusan Mendikbud No.0195/O/1995 dan No.064/O/2003 tentang Organisasi dan Tata Kerja Unsri</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">5.</div></td>
      <td colspan="3"><div align="justify">Keputusan Mendikbud No.257/MON.A4/KP/2011 tentang Pengangkata Rektor Unsri</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">6.</div></td>
      <td colspan="3"><div align="justify">Surat Keputusan Rektor Universitas Sriwijaya No. 0078/UN9/KP/2012 tentang Pengangkatan Dekan Fakultas Ilmu Komputer</div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6"><div align="center"><strong>MEMUTUSKAN</strong></div></td>
    </tr>
    <tr>
      <td colspan="6"><div align="center">
        <p>&nbsp;</p>
      </div></td>
    </tr>
    <tr>
      <td>Menetapkan</td>
      <td><div align="center">:</div></td>
      <td colspan="4"><div align="justify">KEPUTUSAN DEKAN FAKULTAS ILMU KOMPUTER UNIVERSITAS SRIWIJAYA TENTANG PENGANGKATAN DOSEN PEMBIMBING TUGAS AKHIR (TA) MAHASISWA JURUSAN SISTEM INFORMASI FAKULTAS ILMU KOMPUTER UNIVERSITAS SRIWIJAYA</div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td>KESATU</td>
      <td><div align="center">:</div></td>
      <td colspan="4">Menunjuk dan menugaskan saudara :</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      @if($ppta->pembimbing_2==null)
      <td><div align="center">1.</div></td>
      <td colspan="3"><div align="left">{!! $psta->ppta->data_pembimbing_1->nama!!}</div></td>
      @else
      <td><div align="center">1.</div></td>
      <td colspan="3"><div align="left">{!! $psta->ppta->data_pembimbing_1->nama!!} <br>
      <td><div align="center">2.</div></td>
      </div></td>
      
      <td colspan="3"><div align="left">{!! $psta->ppta->data_pembimbing_2->nama!!}</div></td>
      @endif
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="4">Sebagai Pembimbing Untuk Membimbing Tugas Akhir Mahasiswa</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="101">Nama</td>
      <td width="8"><div align="center">:</div></td>
      <td width="677">{!! $psta->mahasiswa->nama !!}</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>NIM</td>
      <td><div align="center">:</div></td>
      <td>{!! $psta->mahasiswa->nim !!}</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Program Studi</td>
      <td><div align="center">:</div></td>
      <td>{!! $psta->mahasiswa->prodi->nama !!}</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Judul TA</td>
      <td><div align="center">:</div></td>
      <td>{!! $psta->ppta->judul !!}</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>KEDUA</td>
      <td><div align="center">
        <div align="center">:</div>
      </div></td>
      <td colspan="4">Semua biaya yang timbul akibat adanya keputusan ini dibebankan melalui dana DIPA Universitas Sriwijaya No.DIPA-023.04.04.2.415112/2014 tanggal {!! date('d-m-Y',strtotime($tanggal)) !!};</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td>KETIGA</td>
      <td><div align="center">:</div></td>
      <td colspan="4">Keputusan ini berlaku selama 6 (enam) bulan sejak tanggal ditetapkan samapi dengan tanggal </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="4"><div align="justify"></div></td>
    </tr>
  </table>
<p>&nbsp;</p>
</center>