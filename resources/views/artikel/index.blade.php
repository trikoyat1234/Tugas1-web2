@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">data</div>

                <div class="card-body">
                	<a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
                    <table border='1'>
						<tr>
							<td>Judul</td>
							<td>Isi</td>
							<td>Users Id</td>
							<td>Kategori Artikel Id</td>
							<td>Created</td>
							<td>Updated</td>
						</tr>

					@foreach($data as $item)

						<tr>
							<td>{!! $item->judul !!}</td>
							<td>{!! $item->isi !!}</td>
							<td>{!! $item->users_id !!}</td>
							<td>{!! $item->kategori_artikel_id !!}</td>
							<td>{!! $item->created_at !!}</td>
							<td>{!! $item->updated_at !!}</td>

							<td><a href="{!! route('artikel.show',[$item->id]) !!}" class="btn btn-primary">Lihat</a></td>

							</td>
						</tr>

					@endforeach

				</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection