@extends('layout.main')


@section('title', $comic->title)

@section('header_id', 'show-header')
@section('header')
  @include('includes/generics_component/header')
@endsection


@section('main_id', "show-main-$comic->id")

@section('content')
  @include('includes/show_components/mainComic')

@endsection
