@extends('layouts.app')

@section('scripts')
	<!-- JS et CSS -->
@endsection

@section('content')
  <x-alert/>
  <div>{{ $user->email }}</div>
@endsection