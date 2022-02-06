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
                    @error('title') <strong style="color:red;">{{ $message }}</strong> @enderror
                </div>
                <div class="form-group">
                    <label for="number">Номер телефона</label>
                    <input type="text" class="form-control" id="number" name="number" value="{{ old('number') }}">
                    @error('number') <strong style="color:red;">{{ $message }}</strong> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @error('email') <strong style="color:red;">{{ $message }}</strong> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Комментарий</label>
                    <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
                    @error('description') <strong style="color:red;">{{ $message }}</strong> @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-success" style="float: right;">Отправить</button>
            </form>
        </div>
    </div>
@endsection


