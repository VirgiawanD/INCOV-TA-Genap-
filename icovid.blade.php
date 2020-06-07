<!DOCTYPE html>
<html>
<head>
	<title>INCOV</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
@if(session('success'))
<div class="alert alert-success">
	{{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-error">
	{{ session('error') }}
</div>
@endif
<body ><center>
	<h1> Data Terjangkit </h1>
	<a href="covid" class="btn btn-primary">Data Pengawasan</a> |
	<a href="{{ url('/icovid/create') }}" class="btn btn-success">Tambah Data</a><br><br>
	<table border="1">
		<tr align="center">
			<th>No</th>
			<th width="80px">Daerah</th>
			<th width="50px">ODP</th>
			<th width="50px">PDP</th>
			<th width="60px">Positif</th>
			<th>Aksi</th>
		</tr>
		@foreach ($icovid as $row)
		<tr align="center">
			<td>{{ isset($i) ? ++$i : $i = 1 }}</td>
			<td>{{ $row->daerah }}</td>
			<td>{{ $row->odp }}</td>
			<td>{{ $row->pdp }}</td>
			<td>{{ $row->positif }}</td>
			<td>
				<a href="{{ url('/icovid/' . $row->id . 'edit') }}" class="btn btn-danger">Edit</a>
				
 				<form action="{{ url('/icovid/' . $row->id ) }}" method="POST" 
 					onsubmit="return confirm('Apakah kamu yakin menghapus data ini ?')">
	 					@method('DELETE')
 						@csrf
	 					<button type="submit" name="button" class="btn btn-warning">Delete</button>
	 				</form>
			</td>
		</tr>
		@endforeach
	</table><br>
	<a href="homepage" class="btn btn-primary">Home</a>
</body>
</html>