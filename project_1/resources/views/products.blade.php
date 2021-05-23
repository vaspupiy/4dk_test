@extends('layouts.app')

@section('title-block'){{ $title }}@endsection


@section('content')

    @include('inc.categories')


    @if ($is_product)
        @include('inc.product')
    @else
        @include('inc.categoryProducts')
    @endif

@endsection
