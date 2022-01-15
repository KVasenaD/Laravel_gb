@extends('layouts/main')
@section('title')
    Новости
@endsection
@section('header')
    <div class="carousel-inner">


        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

            <div class="container">
                <div class="carousel-caption">
                    <h1>Новость</h1>


                </div>
            </div>
        </div>
        @endsection
        @section('content')
            <div class="container">
            <div>
    <strong>{{$newsItem['title']}}</strong>
    <p>{!! $newsItem['description'] !!}</p>
    <em>Автор: {{$newsItem['author']}}</em>
    <hr>
</div>
            </div>
@endsection
