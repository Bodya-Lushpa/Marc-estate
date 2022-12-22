@extends('layouts.app')

@section('content')


<project-card slug="{{ $slug }}" csrf="{{ csrf_token() }}"></project-card>

<client-section></client-section>

@endsection