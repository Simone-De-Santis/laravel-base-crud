{{-- layout di riferimento --}}
@extends('layout.main')

{{-- titolo pagina --}}
@section('title', 'edit')

{{-- sezione header --}}
@section('header_id', 'edit-header')
@section('header')
  @include('includes/generics_component/header')
@endsection

{{-- sezione contenuto main --}}
@section('main_id', "edit-main$comic->id")
@section('content')
  @include('includes/edit_components/main')
@endsection
