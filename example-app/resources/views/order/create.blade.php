@extends('layouts.main')
@section('title')
    Заказ
@endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Заказ</h1>

        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert type="danger" :message="$error"></x-alert>
            @endforeach
        @endif
        <div>
            <form method="post" action="{{ route('order.store', ['q' => 1]) }}">
                @csrf
                <div class="form-group">
                    <label for="title">Имя</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="title">Номер телефона</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('number') }}">
                </div>
                <div class="form-group">
                    <label for="title">Email</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('email') }}">
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


