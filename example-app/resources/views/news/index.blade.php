@extends('layouts/main')
@section('title')
    Новости
@endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Новость</h1>

        </div>
    </div>
@endsection
        @section('content')
            <div class="container">
            <div>
                <strong>{{ $news->title }}</strong>
                <p>{!! $news->description !!}</p>
                <em>Автор: {{ $news->author }}</em>
    <hr>
</div>
            </div>
@endsection
