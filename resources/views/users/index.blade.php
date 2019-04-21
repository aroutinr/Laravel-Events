@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header"><h3>Users</h3></div>

                <div class="card-body">
                	<table class="table">
                		<thead>
	                		<tr>
	                			<th>ID</th>
	                			<th>Name</th>
	                			<th>Email</th>
	                			<th width="10px"></th>
	                			<th width="10px"></th>
	                			<th width="10px"></th>
	                		</tr>                			
                		</thead>
                		<tbody>
                			@foreach($users as $user)
                			<tr>
                				<td>{{ $user->id }}</td>
                				<td>{{ $user->name }}</td>
                				<td>{{ $user->email }}</td>
                				<td><a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-primary">View</a></td>
                				<td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a></td>
                				<td>
                					<form method="POST" action="{{ route('users.destroy', $user->id) }}">
								        {{ csrf_field() }}
								        {{ method_field('DELETE') }}
                						<button class="btn btn-sm btn-danger">Delete</button>
                					</form>
                				</td>
                			</tr>
                			@endforeach
                		</tbody>
                	</table>
                	{{ $users->links() }} 
                </div>
                <div class="card-footer">
                	Page {{ $users->currentPage() }} of {{ $users->lastPage() }}.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
