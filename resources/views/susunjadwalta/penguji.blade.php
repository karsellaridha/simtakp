{!! Form::open(['url'=>"susunjadwalta/penguji/$nim/$jenista"]) !!}
<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Susun Penguji </h4>
                  </div>
                  <div class="modal-body">
<div class="form-group">
      {!! Form::label('tempat','Penguji 1 :') !!}
      {!! Form::select('penguji_1',$dosen,@$penguji->penguji_1,['class'=>'form-control','id'=>'no_hp'])!!}
    </div>

<div class="form-group">
      {!! Form::label('tempat','Penguji 2 :') !!}
      {!! Form::select('penguji_2',$dosen,@$penguji->penguji_2,['class'=>'form-control','id'=>'no_hp'])!!}
    </div>

                  </div>
                  <div class="modal-footer">
<div class="form-group">
      {!! Form::submit("simpan",['class'=>'btn btn-primary form-control']) !!}
    </div>
                  </div>

{!! Form::close() !!}
              