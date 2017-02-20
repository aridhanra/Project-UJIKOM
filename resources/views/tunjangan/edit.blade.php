@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">EDIT JABATAN</div>

                <div class="panel-body">
                {!! Form::model($tun,['method'=>'PATCH', 'route'=>['tunjangan.update', $tun->id]]) !!}

					<div class="form-group">
						{!! Form::label('Kode Tunjangan','Kode Tunjangan :') !!}
						{!!Form::text('kode_tunjangan',null,['class'=>'form-control']) !!}
						
					</div>
                    <div class="form-group">
                        {!! Form::label ('Nama Jabatan', ' Nama Jabatan:') !!}
                        <select class="form-control" name="jabatan_id">
                        <option value="">---Nama Jabatan---</option>
                            @foreach($jb as $data)
                            <option value="{!! $data->id!!}">{!! $data->nama_jabatan!!} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label ('Nama Golongan', ' Nama Golongan:') !!}
                        <select class="form-control" name="golongan_id">
                        <option value="">---Nama Golongan---</option>
                            @foreach($gol as $data)
                            <option value="{!! $data->id!!}">{!! $data->nama_golongan!!} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label('Status','Status :') !!}
                        {!!Form::text('status',null,['class'=>'form-control']) !!}
                        
                    </div>
                    <div class="form-group">
                        {!! Form::label('Jumlah Anak','Jumlah Anak :') !!}
                        {!!Form::text('jumlah_anak',null,['class'=>'form-control']) !!}
                        
                    </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang :') !!}
                        {!!Form::text('besaran_uang',null,['class'=>'form-control']) !!}
                        
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Save',['class'=>'btn btn-primary form control']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
