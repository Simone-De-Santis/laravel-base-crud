{{-- layout di riferimento --}}
@extends('layout.main')

{{-- titolo pagina --}}
@section('title', $comic->title)

{{-- sezione header --}}
@section('header_id', 'show-header')
@section('header')
  @include('includes/generics_component/header')
@endsection

{{-- sezione contenuto main --}}
@section('main_id', "show-main-$comic->id")
@section('content')
  @include('includes/show_components/mainComic')
@endsection
