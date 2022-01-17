@extends('layouts.main')
@section('title')
    Обратная связь
@endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Обратная связь</h1>

        </div>
    </div>
@endsection
@section('content')
    <div class="container">
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('feedback.create') }}"
               type="button" class="btn btn-sm btn-outline-secondary">Написать отзыв</a>
        </div>

    </div>
    </div>
@endsection





