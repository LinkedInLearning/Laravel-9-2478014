<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 9 CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>CRUD Example</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('users.create') }}"> Create User</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>No</th>
<th>User Name</th>
<th>User Email</th>
<th>User Password</th>
<th width="280px">Action</th>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->password }}</td>
<td>
</td>
</tr>
@endforeach
</table>
{!! $users->links() !!}
</body>
</html>