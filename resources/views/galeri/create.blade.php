@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Galeri</div>

                <div class="card-body">
              	
              {!! Form::model($Galeri,['route' => ['galeri.create', $Galeri->id],'method' => 'patch']); !!}
                  @include('galeri.form')
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection