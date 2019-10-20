@extends ('layouts.app')

@section('content')

<div class = "container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">kategori artikel </div>
					<div class="card-body">
<a href="{!! route('kategori_artikel.create') !!}" class="btn btn-primary"> Tambah Data</a>
	<table border="1"><tr>
		<td> ID </td>
		<td> Nama </td>
		<td> User ID </td>
		<td> Update </td>
		<td> Create </td>
		<td> Aksi </td>
</tr>
@foreach ($KategoriArtikel as $item)
<tr>
	<td>{!! $item->id !!}</td>
	<td>{!! $item->nama !!}</td>
	<td>{!! $item->users_id !!}</td>
	<td>{!! $item->updated_at!!}</td>
	<td>{!! $item->created_at!!}</td>
	<td>
		<a href="{!! route('kategori_artikel.show',[$item->id])!!}" class="btn btn-sm btn-success">lihat </a>
		<a href="{!! route('kategori_artikel.edit',[$item->id])!!}" class="btn btn-sm btn-danger">ubah</a>
		{!! Form::open(['route'=>['kategori_artikel.destroy',$item->id],'method'=>'delete']) !!}
		{!! Form::submit('Hapus',['class'=>"btn btn-sm btn-warning"]); !!}
		{!! Form::close() !!}
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


	