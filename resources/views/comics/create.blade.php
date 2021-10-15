{{-- layout di riferimento --}}
@extends('layout.main')

{{-- titolo pagina --}}
@section('title', 'Create')

{{-- sezione header --}}
@section('header_id', 'create-header')
@section('header')
  @include('includes/generics_component/header')
@endsection

{{-- sezione contenuto main --}}
@section('main_id', 'create-main')
@section('content')
  @include('includes/create_components/main')
@endsection


@section('scripts')
  <script src="{{ asset('js/preview.js') }}"></script>
@endsection
