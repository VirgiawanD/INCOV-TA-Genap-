<!DOCTYPE html>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<html>
<head>
	<title>INCOV</title>
</head>
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
	<h1 align="center"> Data Pengawasan </h1>
	<a href="icovid" class="btn btn-primary">Data Terjangkit</a> |
	<a href="{{ url('/covid/create') }}" class="btn btn-success">Tambah Data</a><br><br>
	<table border="1" >
	<tr align="center">
 		<th>No</th>
 		<th width="70px">Daerah</th>
 		<th width="100px">Meninggal</th>
 		<th width="85px">Sembuh</th>
 			<th>Aksi</th>
 	</tr></font>
 	@foreach ($covid as $row)
 	<tr align="center">
 		<td>{{ isset($i) ? ++$i : $i = 1 }}</td>
 		<td>{{ $row->daerah }}</td>
 		<td>{{ $row->meninggal }}</td>
 		<td>{{ $row->sembuh }}</td>
 		<td>
 			<a href="{{ url('/covid/' . $row->id . 'edit') }}" class="btn btn-danger">Edit</a>
 			
	 			<form action="{{ url('/covid/' . $row->id) }}" method="POST" 
	 				onsubmit="return confirm('Apakah kamu yakin menghapus data ini ?')">
	 					@method('DELETE')
 						@csrf
	 					<button type="submit" name="button" class="btn btn-warning">Delete</button>	
	 				</form>
 					<!-- <button type="submit">Delete</button>
 				</form>
 --> 		</td>
 	</tr>
 	@endforeach
	</table><br>
	<a href="homepage" class="btn btn-primary">Home</a>
</body>
</html>