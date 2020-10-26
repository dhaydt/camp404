@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h3>Tambah User</h3>
			</div>
			<div class="card-body">
				<a href="{{route ('user.index')}}" class="btn btn-primary">Kembali</a>
				<form action="{{route('user.store')}}" method="POST">
					@csrf
					<ul class="list-group">
						Nama <input type="text" name="name" required="">
						Role <input type="text" name="role" required="">
						Email <input type="email" name="email" required="">
						Password <input type="password" name="password" required="">
					</ul>
					<input type="submit" value="Simpan User" class="btn btn-success mt-2">
				</form>
			</div>
		</div>	
	</div>
@endsection