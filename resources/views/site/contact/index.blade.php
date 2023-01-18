@extends('layouts.app')

@section('content')

<contact csrf="{{ csrf_token() }}"></contact>

@endsection