{{-- layout di riferimento --}}
@extends('layout.main')


{{-- titolo pagina --}}
@section('title', 'Comics')




{{-- sezione header --}}
@section('header_id', 'home-header')
@section('header')
  @include('includes/main_layout_components/header')
@endsection




{{-- sezione contenuto main --}}
@section('main_id', 'home-main')

@section('content')
  @include('includes/comics_layout_components/main')

@endsection
