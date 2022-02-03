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
    @include('inc.message')
    <div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert type="danger" :message="$error"></x-alert>
            @endforeach
        @endif
        <div>
            <form method="post" action="{{ route('feedback.store', ['q' => 1]) }}">
                @csrf
                <div class="form-group">
                    <label for="title">Имя</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="description">Комментарий</label>
                    <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success" style="float: right;">Отправить</button>
            </form>
        </div>
    </div>
@endsection


