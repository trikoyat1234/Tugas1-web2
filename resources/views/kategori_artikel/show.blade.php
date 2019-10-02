@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Arrikel</div>

                <div class="card-body">
                  <div class="form-group row">
              	 <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                  <label for="name" class="col-md-4 col-form-label text-md-left">{!!$data->nama!!}</label>
                 </div>   
                 <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Users Id') }}</label>
                  <label for="name" class="col-md-4 col-form-label text-md-left">{!!$data->users_id!!}</label>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Create') }}</label>
                  <label for="name" class="col-md-4 col-form-label text-md-left">{!!$data->created_at!!}</label>
                 </div>
                 <div class="form-group row"> 
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Update') }}</label>
                  <label for="name" class="col-md-4 col-form-label text-md-left">{!!$data->updated_at!!}</label>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection