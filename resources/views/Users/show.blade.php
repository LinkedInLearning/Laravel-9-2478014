@extends('layouts.app')

@section('scripts')
	<!-- JS et CSS -->
@endsection

@section('content')
  <div>{{ $user->email }}</div>
@endsection