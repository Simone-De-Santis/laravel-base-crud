{{-- layout di riferimento --}}
@extends('layout.main')


{{-- titolo pagina --}}
@section('title', 'Comics')




{{-- sezione header --}}
@section('header_id', 'home-header')
@section('header')
  @include('includes/generics_component/header')
@endsection




{{-- sezione contenuto main --}}
@section('main_id', 'home-main')

@section('content')
  @include('includes/index_components/main')

@endsection
