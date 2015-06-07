

		<div class="form-group">
			{!! Form::label('presentasi','Penyajian/Presentasi :') !!}
			{!! Form::text('presentasi',@$nilaiuta1->presentasi,['class'=>'form-control','id'=>'presentasi'])!!}
			<span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
		</div>

		<span style="font-size:30pt;">Laporan Tugas Akhir</span>
		<div class="form-group">
			{!! Form::label('format_penulisan','Kesesuaian format penulisan dengan pedoman tugas akhir :') !!}
			{!! Form::text('format_penulisan',@$nilaiuta1->format_penulisan,['class'=>'form-control','id'=>'format_penulisan'])!!}
			<span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
		</div>

		<div class="form-group">
			{!! Form::label('penggunaan_bahasa','Penggunaan Bahasa Indonesia yang baik dan benar :') !!}
			{!! Form::text('penggunaan_bahasa',@$nilaiuta1->penggunaan_bahasa,['class'=>'form-control','id'=>'penggunaan_bahasa']) !!}
			<span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
		</div>

		<div class="form-group">
			{!! Form::label('kesesuaian','Kesesuaian analisis, desain, implementasi, dan pengujian :') !!}
			{!! Form::text('kesesuaian',@$nilaiuta1->kesesuaian,['class'=>'form-control','id'=>'kesesuaian']) !!}
			<span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
		</div>

		<div class="form-group">
			{!! Form::label('kelengkapan_dokumen','Kelengkapan dokumen pendukung/lampiran :') !!}
			{!! Form::text('kelengkapan_dokumen',@$nilaiuta1->kelengkapan_dokumen,['class'=>'form-control','id'=>'kelengkapan_dokumen']) !!}
			<span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
		</div>

		<span style="font-size:30pt;">Penguasaan Materi Tugas Akhir</span>
		<div class="form-group">
			{!! Form::label('analisa_perancangan','Analisa,Perancangan dan Pengujian / Dokumentasi Portofolio :') !!}
			{!! Form::text('analisa_perancangan',@$nilaiuta1->analisa_perancangan,['class'=>'form-control','id'=>'analisa_perancangan'])!!}
			<span style="font-size:10pt; color:red;">Bobot nilai 20%</span>
		</div>

		<div class="form-group">
			{!! Form::label('pemrograman','Pemrograman/ Kesesuaian Metodologi dengan Pembahasan Kasus :') !!}
			{!! Form::text('pemrograman',@$nilaiuta1->pemrograman,['class'=>'form-control','id'=>'pemrograman']) !!}
			<span style="font-size:10pt; color:red;">Bobot nilai 20%</span>
		</div>

		<div class="form-group">
			{!! Form::label('basisdata','Basisdata/Hasil akhir pembahasan kasus :') !!}
			{!! Form::text('basisdata',@$nilaiuta1->basisdata,['class'=>'form-control','id'=>'basisdata']) !!}
			<span style="font-size:10pt; color:red;">Bobot nilai 10%</span>
		</div>

		<span style="font-size:30pt;">Penguasaan Pengetahuan Komputer Lainnya</span>
		<div class="form-group">
			{!! Form::label('paket_perkantoran','Paket Perkantoran :') !!}
			{!! Form::text('paket_perkantoran',@$nilaiuta1->paket_perkantoran,['class'=>'form-control','id'=>'paket_perkantoran'])!!}
			<span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
		</div>

		<div class="form-group">
			{!! Form::label('perangkat_keras','Perangkat Keras Komputer dan Sistem Operasi :') !!}
			{!! Form::text('perangkat_keras',@$nilaiuta1->perangkat_keras,['class'=>'form-control','id'=>'perangkat_keras']) !!}
			<span style="font-size:10pt; color:red;">Bobot nilai 5%</span>
		</div>

		<div class="form-group">
			{!! Form::label('jarkom','Jaringan Komputer :') !!}
			{!! Form::text('jarkom',@$nilaiuta1->jarkom,['class'=>'form-control','id'=>'jarkom']) !!}
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

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
	
	