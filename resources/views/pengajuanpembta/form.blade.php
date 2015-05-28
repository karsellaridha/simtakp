
		<div class="form-group">
			{!! Form::label('dosen','Dosen :') !!}
				<div class="input-group input-group-md">
            		{!! Form::text('nip_1',@$ppta->nip,['class'=>'form-control','id'=>'nip_1','readonly'])!!}
                    <span class="input-group-btn">
                    <a class="btn btn-info btn-flat" href='{!! url('pengajuanpembta/daftardosen/1') !!}' data-toggle="modal" data-target="#myModal">Pilih Dosen</a>
                    </span>
                </div>
		</div>

		<div class="form-group">
			{!! Form::label('pembimbing_1','Nama Dosen Pembimbing 1 :') !!}
			{!! Form::text('pembimbing_1',@$ppta->dosen->nama,['class'=>'form-control','id'=>'pembimbing_1','readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('dosen','Dosen :') !!}
				<div class="input-group input-group-md">
            		{!! Form::text('nip_2',@$ppta->nip,['class'=>'form-control','id'=>'nip_2','readonly'])!!}
                    <span class="input-group-btn">
                    <a class="btn btn-info btn-flat" href='{!! url('pengajuanpembta/daftardosen/2') !!}' data-toggle="modal" data-target="#myModal">Pilih Dosen</a>
                    </span>
                </div>
		</div>

		<div class="form-group">
			{!! Form::label('pembimbing_2','Nama Dosen Pembimbing 2 :') !!}
			{!! Form::text('pembimbing_2',@$ppta->dosen->nama,['class'=>'form-control','id'=>'pembimbing_2','readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('judul','Judul Tugas Akhir :') !!}
			{!! Form::text('judul',@$ppkp->judul,['class'=>'form-control','id'=>'judul']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tahun','Tahun :') !!}
			{!! Form::text('tahun',@$ppta->tahun,['class'=>'form-control','id'=>'tahun']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>

