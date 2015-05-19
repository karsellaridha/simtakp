
		<div class="form-group">
			{!! Form::label('dosen','Dosen :') !!}
				<div class="input-group input-group-md">
            		{!! Form::text('nip',@$ppkp->nip,['class'=>'form-control','id'=>'nip','readonly'])!!}
                    <span class="input-group-btn">
                    <a class="btn btn-info btn-flat" href='{!! url('pengajuanpembkp/daftardosen') !!}' data-toggle="modal" data-target="#myModal">Pilih Dosen</a>
                    </span>
                </div>
		</div>

		<div class="form-group">
			{!! Form::label('nama','Nama Dosen :') !!}
			{!! Form::text('nama',@$ppkp->dosen->nama,['class'=>'form-control','id'=>'nama','readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tempat','Tempat Kerja Praktik :') !!}
			{!! Form::text('tempat_kp',@$ppkp->tempat_kp,['class'=>'form-control','id'=>'tempat_kp']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tahun','Tahun :') !!}
			{!! Form::text('tahun',@$ppkp->tahun,['class'=>'form-control','id'=>'tahun']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>

