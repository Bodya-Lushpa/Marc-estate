@extends('layouts.app')

@section('content')

<card-news slug="{{ $slug }}"></card-news>

<client-section></client-section>

@endsection