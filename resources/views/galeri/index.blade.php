@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">data</div>

                <div class="card-body">
                	<a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                    <table border='1'>
						<tr>
							<td>Nama</td>
							<td>Keterangan</td>
							<td>Path</td>
							<td>Users Id</td>
							<td>Kategori Galeri Id</td>
							<td>Created</td>
							<td>Updated</td>
						</tr>

					@foreach($data as $item)

						<tr>
							<td>{!! $item->nama !!}</td>
							<td>{!! $item->keterangan !!}</td>
							<td>{!! $item->path !!}</td>
							<td>{!! $item->users_id !!}</td>
							<td>{!! $item->kategori_galeri_id !!}</td>
							<td>{!! $item->created_at !!}</td>
							<td>{!! $item->updated_at !!}</td>
							<td><a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-primary">Lihat</a></td>
						</tr>

					@endforeach

				</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection