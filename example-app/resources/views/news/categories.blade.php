@extends('layouts/categories')
@section('title')
    Категории
@endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Категории новостей</h1>

        </div>
    </div>
        @endsection
@section('content')

<div class="row row-cols-3">
    @foreach($categories as $category)

        <div class="col">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

            <h2><strong><a href="{{route('news.index',
      ['id' => $category->id])}}">{{$category->title}}</a></strong></h2>

        </div>
        <div></div>

@endforeach
</div>
@endsection
