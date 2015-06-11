@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Detail Nilai Ujian Komprehensif Mahasiswa</h3>
                </div><!-- /.box-header -->

<center><table border="0" class="table">
  <tr>
    <td>NIM</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->nim !!}<td>
  </tr>

  <tr>
    <td>Nama</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->nama !!}<td> 
  </tr>

  <tr>
    <td>Program Studi</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->prodi->nama !!}<td> 
  </tr>

  <tr>
    <td>Hari/Tanggal</td>
    <td>:</td> 
    <td>{!!  !!}<td> 
  </tr>

  <tr>
    <td>Judul Tugas Akhir</td>
    <td>:</td> 
    <td>{!!  !!}<td> 
  </tr>

  <tr>
    <td>Pembimbing I</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->pengajuanpembta->dosen->nama !!}<td>
  </tr>

  <tr>
    <td>Pembimbing II</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->pengajuanpembta->dosen->nama !!}<td>
  </tr>
  
</table>

<div class="box-body">

@if (count($inputnilaiuta2)>0)
<table border="0" class="table">
  <tr>
    <td>Penyajian/Presentasi</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->presentasi !!}</td>
  </tr>

  <p>Laporan Tugas Akhir</p>
  <tr>
    <td>Kesesuaian format penulisan dengan pedoman tugas akhir</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->format_penulisan !!}</td>
  </tr>

  <tr>
    <td>Penggunaan Bahasa Indonesia yang baik dan benar</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->penggunaan_bahasa !!}</td>
  </tr>

  <tr>
    <td>Kesesuaian analisis, desain, implementasi, dan pengujian</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->kesesuaian !!}</td>
  </tr>

  <tr>
    <td>Kelengkapan dokumen pendukung/lampiran</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->kelengkapan_dokumen !!}</td>
  </tr>
  
  <p>Penguasaan Materi Tugas Akhir</p>
  <tr>
    <td>Analisa,Perancangan dan Pengujian / Dokumentasi Portofolio</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->analisa_perancangan !!}</td>
  </tr>

  <tr>
    <td>Pemrograman/ Kesesuaian Metodologi dengan Pembahasan Kasus</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->pemrograman !!}</td>
  </tr>

  <tr>
    <td>Basisdata/Hasil akhir pembahasan kasus</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->basisdata !!}</td>
  </tr>

  <p>Penguasaan Pengetahuan Komputer Lainnya</p>
  <tr>
    <td>Paket Perkantoran</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->paket_perkantoran !!}</td>
  </tr>

  <tr>
    <td>Perangkat Keras Komputer dan Sistem Operasi</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->perangkat_keras !!}</td>
  </tr>

  <tr>
    <td>Jaringan Komputer</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->jarkom !!}</td>
  </tr>

  <tr>
    <td>Sikap dan Etika</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->sikap_etika !!}</td>
  </tr>

  <tr>
    <td>JUMLAH</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->jumlah !!}</td>
  </tr>

  <tr>
    <td>Penilaian Proses</td>
    <td>:</td>
    <td>{!! $inputnilaiuta2->penilaian_proses !!}</td>
  </tr>

</table>
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

