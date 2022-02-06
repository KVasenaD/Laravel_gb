@extends('layouts.admin')
@section('title') Редактировать запись @endsection
@section('header')
<h1 class="h2">Редактировать запись</h1>
<div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">

    </div>

</div>
@endsection
@section('content')
<div>
    @include('inc.message')
    <form method="post" action="{{ route('admin.categories.update', ['categories' => $categories]) }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="title">Наименование</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $categories->title }}">
            @error('title') <strong style="color:red;">{{ $message }}</strong> @enderror
        </div>


        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" name="description" id="description">{!! $categories->description !!}</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-success" style="float: right;">Сохранить</button>
    </form>
</div>
@endsection
