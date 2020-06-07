<!DOCTYPE html>
<html>
<head>
	<title>|- Tambah Data -|</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<body >

@if(session('error'))
<div class="alert alert-error">
 {{ session('error') }}
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
 <strong>Perhatian</strong>
 <br/>
 <ul>
  @foreach ($errors->all () as $error)
<li>{{ $error }}</li>
@endforeach
 </ul>
</div>
@endif
<!-- Sampai sini -->

<h1 align="center"> Dokumentasi Data </h1>
<form action="{{ url('icovid', @$icovid->id) }}" method="POST">
@csrf

@if(!empty($icovid))
	@method('PATCH')
@endif
<table border="1" width="1000px" align="center">
	<tr align="center">
		<th>Daerah</th>
		<th>Orang Dalam Pengawasan</th>
		<th>Pasien Dalam Pengawasan</th>
		<th>Positif</th>
	</tr>
	<tr align="center">
			<td>
			<input type="text" name="daerah" value="{{ old('daerah', @$icovid->daerah) }}">
			</td>
			<td>
			<input type="text" name="odp" value="{{ old('odp', @$icovid->odp) }}">
			</td>
			<td>
			<input type="text" name="pdp" value="{{ old('pdp', @$icovid->pdp) }}">
			</td>
			<td>
			<input type="text" name="positif" value="{{ old('positif', @$icovid->positif) }}">
			</td>
	</tr>
</table><br>
<center>
	<input type="submit" value="Simpan" class="btn btn-primary">
</body>
</html>