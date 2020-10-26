@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h3>Ubah User</h3>
			</div>
			<div class="card-body">
				<a href="{{route ('user.index')}}" class="btn btn-primary">Kembali</a>
				<form action="{{route('user.update', $users->id)}}" method="POST">
					@csrf
					@method('PUT')
					<ul class="list-group">
						Nama <input type="text" name="name" required value="{{$users->name}}">
						Role <input type="text" name="role" required value="{{$users->role}}">
						Email <input type="text" name="email" required value="{{$users->email}}">
					</ul>
					<input type="submit" value="Update User" class="btn btn-success mt-2">
				</form>
			</div>
		</div>	
	</div>
@endsection
