@extends('layouts.app')
@section('content')


<div>
<table class="table table-striped task-table">
<thead>
	<th>Name</th>
	<th>Email</th>
</thead>

<tbody>
	@foreach($users as $user)
	<tr>
		<td class="table-text">
		<div>{{$user->name}}</div>
		</td>
		<td><div>{{$user->email}}</div></td>
	</tr>
	@endforeach
	</tbody>
</table>
</div>
@endsection