@extends('layout.main')


@section('title', $comic->title)

@section('header_id', 'show-header')
@section('header')
  @include('includes/main_layout_components/header')
@endsection


@section('main_id', "show-main-$comic->id")

@section('content')
  @include('includes/comic_layout_components/mainComic')

@endsection
