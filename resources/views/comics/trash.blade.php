{{-- layout di riferimento --}}
@extends('layout.main')

{{-- titolo pagina --}}
@section('title', 'Trash')

{{-- sezione header --}}
@section('header_id', 'trash-header')
@section('header')
  @include('includes/generics_component/header')
@endsection

{{-- sezione contenuto main --}}
@section('main_id', 'trash-main')
@section('content')
  @include('includes/trash_components/main')
@endsection


@section('scripts')

@endsection
