{!! Form::open(['url'=>"susunjadwalta/jadwal/$nim"]) !!}
<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Susun Jadwal </h4>
                  </div>
                  <div class="modal-body">
<div class="form-group">
      {!! Form::label('tempat','Tempat :') !!}
      {!! Form::select('tempat_sidang',['Inderalaya'=>'Inderalaya','Palembang'=>'Palembang'],@$psut1->tempat_sidang,['class'=>'form-control','id'=>'no_hp'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('jadwal','tanggal :') !!}
      {!! Form::input('date','jadwal',$psut1->jadwal,['class'=>'form-control','id'=>'jumlahsks'])!!}
    </div>

                  </div>
                  <div class="modal-footer">
<div class="form-group">
      {!! Form::submit("simpan",['class'=>'btn btn-primary form-control']) !!}
    </div>
                  </div>

{!! Form::close() !!}
              