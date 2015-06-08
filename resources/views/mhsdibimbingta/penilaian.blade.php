@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Input Nilai TA 1</h3>
                </div><!-- /.box-header -->
        <div class="box-body">


{!! Form::open(['url'=>"mhsdibimbingta/penilaian/$nim"]) !!}



    <div class="form-group">
      {!! Form::label('presentasi','Penyajian/Presentasi :') !!}
      {!! Form::text('persentasi',@$nilaiuta1->persentasi,['class'=>'form-control','id'=>'presentasi'])!!}
      <span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
    </div>
<hr>
    <span style="font-size:20pt;">Laporan Tugas Akhir</span>
<hr>
    <div class="form-group">
      {!! Form::label('format_penulisan','Kesesuaian format penulisan dengan pedoman tugas akhir :') !!}
      {!! Form::text('kesesuaian_format',@$nilaiuta1->kesesuaian_format,['class'=>'form-control','id'=>'format_penulisan'])!!}
      <span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
    </div>

    <div class="form-group">
      {!! Form::label('penggunaan_bahasa','Penggunaan Bahasa Indonesia yang baik dan benar :') !!}
      {!! Form::text('bahasa_indonesia',@$nilaiuta1->bahasa_indonesia,['class'=>'form-control','id'=>'penggunaan_bahasa']) !!}
      <span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
    </div>

    <div class="form-group">
      {!! Form::label('kesesuaian','Kesesuaian analisis, desain, implementasi, dan pengujian :') !!}
      {!! Form::text('kesesuaian_isi',@$nilaiuta1->kesesuaian_isi,['class'=>'form-control','id'=>'kesesuaian']) !!}
      <span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
    </div>

    <div class="form-group">
      {!! Form::label('kelengkapan_dokumen','Kelengkapan dokumen pendukung/lampiran :') !!}
      {!! Form::text('kelengkapan_dokumen',@$nilaiuta1->kelengkapan_dokumen,['class'=>'form-control','id'=>'kelengkapan_dokumen']) !!}
      <span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
    </div>
<hr>
    <span style="font-size:20pt;">Penguasaan Materi Tugas Akhir</span>
<hr>
    <div class="form-group">
      {!! Form::label('analisa_perancangan','Analisa,Perancangan dan Pengujian / Dokumentasi Portofolio :') !!}
      {!! Form::text('analisis',@$nilaiuta1->analisis,['class'=>'form-control','id'=>'analisa_perancangan'])!!}
      <span style="font-size:10pt; color:red;">Bobot nilai 20%</span>
    </div>

    <div class="form-group">
      {!! Form::label('pemrograman','Pemrograman/ Kesesuaian Metodologi dengan Pembahasan Kasus :') !!}
      {!! Form::text('metodologi',@$nilaiuta1->metodologi,['class'=>'form-control','id'=>'pemrograman']) !!}
      <span style="font-size:10pt; color:red;">Bobot nilai 20%</span>
    </div>

    <div class="form-group">
      {!! Form::label('basisdata','Basisdata/Hasil akhir pembahasan kasus :') !!}
      {!! Form::text('basisdata',@$nilaiuta1->basisdata,['class'=>'form-control','id'=>'basisdata']) !!}
      <span style="font-size:10pt; color:red;">Bobot nilai 10%</span>
    </div>
<hr>
    <span style="font-size:20pt;">Penguasaan Pengetahuan Komputer Lainnya</span>
<hr>
    <div class="form-group">
      {!! Form::label('paket_perkantoran','Paket Perkantoran :') !!}
      {!! Form::text('office',@$nilaiuta1->office,['class'=>'form-control','id'=>'paket_perkantoran'])!!}
      <span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
    </div>

    <div class="form-group">
      {!! Form::label('perangkat_keras','Perangkat Keras Komputer dan Sistem Operasi :') !!}
      {!! Form::text('os',@$nilaiuta1->os,['class'=>'form-control','id'=>'perangkat_keras']) !!}
      <span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
    </div>

    <div class="form-group">
      {!! Form::label('jarkom','Jaringan Komputer :') !!}
      {!! Form::text('jaringan',@$nilaiuta1->jaringan,['class'=>'form-control','id'=>'jarkom']) !!}
      <span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
    </div>

    <div class="form-group">
      {!! Form::label('sikap_etika','Sikap dan Etika :') !!}
      {!! Form::text('sikap_etika',@$nilaiuta1->sikap_etika,['class'=>'form-control','id'=>'sikap_etika']) !!}
      <span style="font-size:10pt; color:red;">Bobot nilai 10%</span>
    </div>

    <div class="form-group">
      {!! Form::label('penilaian_proses','Penilaian Proses :') !!}
      {!! Form::text('penilaian_proses',@$nilaiuta1->penilaian_proses,['class'=>'form-control','id'=>'penilaian_proses']) !!}
      <span style="font-size:10pt; color:red;">Bobot nilai 15%</span>
    </div>
      {!! Form::submit("simpan",['class'=>'btn btn-primary pull-right']) !!}
{!! Form::close() !!}
<div class='clearfix'></div>
</div>
</div>                 
@stop

              