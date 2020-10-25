<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	@extends('layouts.app')
	
	@section('content')
		<h3>Data Siswa</h3>
		<table class="table-bordered table-striped">
			<tr>
				<th>Nama</th>
				<th>NIS</th>
				<th>Tanggal Lahir</th>
			</tr>
			<tr>
				<td>Andi Saputra</td>
				<td>101</td>
				<td>2003-12-22</td>
			</tr>
			<tr>
				<td>Budi Cahya</td>
				<td>102</td>
				<td>2004-1-30</td>
			</tr>
		</table>
	@endsection

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>