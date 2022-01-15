@extends('layouts/categories')
@section('title')
    Категории
@endsection
@section('header')
    <div class="carousel-inner">


        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

            <div class="container">
                <div class="carousel-caption">
                    <h1>Список категорий</h1>


                </div>
            </div>
        </div>
        @endsection
@section('content')

<div class="row row-cols-3">
@foreach ($category as $categoryItem)

        <div class="col">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

            <h2><strong><a href="{{route('news.show',
      ['id' => $categoryItem['id']])}}">{{$categoryItem['title']}}</a></strong></h2>

        </div>
        <div></div>

@endforeach
</div>
@endsection
