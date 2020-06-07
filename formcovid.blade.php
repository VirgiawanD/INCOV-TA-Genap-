<title>|- Tambah File -|</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<body >

<!-- Untuk menampilkan pesan error -->
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
<form action="{{ url('covid', @$covid->id) }}" method="POST"> 
@csrf

@if(!empty($covid))
	@method('PATCH')
@endif
	<table border="1" align="center" width="650px">
		<tr align="center">
			<th>Daerah</th>
			<th>Meninggal</th>
			<th>Sembuh</th>
		</tr>
		<tr align="center">
		<td>
	<input type="text" name="daerah" 
					value="{{ old('daerah', @$covid->daerah) }}">
		</td>
		<td>	
			<input type="text" name="meninggal" value="{{ old('meninggal', @$covid->meninggal)}}">
 		</td>
 		<td>
 			<input type="text" name="sembuh" value="{{ old('sembuh', @$covid->sembuh)}}">
 		</td>
 		</tr>
</table><br>
<center>
	<input type="submit" value="Simpan" class="btn btn-primary" />
</form>