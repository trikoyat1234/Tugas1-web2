@extends ('layouts.app')

@section('content')
<div class = "container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header"> galeri </div>
					<div class="card-body">
<a href="{!! route('galeri.create') !!}" class="btn btn-primary"> Tambah Data</a>
	<table border="2"><tr>
		<td> ID </td>
		<td> Nama </td>
		<td> KETERANGAN </td>
		<td> ISI </td>
		<td> PATH </td>
		<td> User Id </td>
		<td> Aksi </td>
</tr>
@foreach ($Galeri as $item)
<tr>
	<td>{!! $item->id !!}</td>
	<td>{!! $item->nama !!}</td>
	<td>{!! $item->keterangan !!}</td>
	<td>{!! $item->isi !!}</td>
	<td>{!! $item->path !!}</td>
	<td>{!! $item->users_id !!}</td>
	<td>
		<a href="{!! route('galeri.show',[$item->id])!!}" class="btn btn-sm btn-success">lihat </a>
		<a href="{!! route('galeri.edit',[$item->id])!!}" class="btn btn-sm btn-danger">ubah</a>
		{!! Form::open(['route'=>['galeri.destroy',$item->id],'method'=>'delete']) !!}
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


	