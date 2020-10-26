@extends('layouts.app')
	
	@section('content')
		<div class="container">
			<div class="card">
				<div class="card-header">
					<h3>Management User</h3>
				</div>
				<div class="card-body">
					<a href="{{route('user.create')}}" class="btn btn-outline-secondary btn-sm">Tambah User</a>
					<table class="table table-bordered table-striped mt-2">
					<tr>
						<th>Nama</th>
						<th>Role</th>
						<th>Email</th>
						<th>Aksi</th>
					</tr>
					@foreach($users as $u)
					<tr>
						<td>{{$u->name}}</td>
						<td>{{$u->role}}</td>
						<td>{{$u->email}}</td>
						<td>
							<ul class="nav">
								<a href="{{route('user.edit', $u->id)}}" class="btn btn-warning mr-2">Ubah</a>
								<form action="{{route('user.destroy', $u->id)}}" method="POST">
									@csrf
									@method('DELETE')
									<button class="btn btn-danger">Hapus</button>
								</form>
							</ul>
						</td>
					</tr>
					@endforeach
				</table>
				</div>
			</div>
				
		</div>
	@endsection