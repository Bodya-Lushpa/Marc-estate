@extends('layouts.app')

@section('content')

<projectcard slug="{{ $slug }}" csrf="{{ csrf_token() }}"></projectcard>

@endsection