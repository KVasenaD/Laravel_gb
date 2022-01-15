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
                    <h1>Список новостей</h1>


                </div>
            </div>
        </div>
        @endsection
        @section('content')
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    @forelse($news as $newsItem)
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                                <div class="card-body">
                                    <div class="card-header">
                                        <strong>

                                                {{ $newsItem['title'] }}

                                        </strong>
                                    </div>
                                    <p class="card-text">{!! $newsItem['description'] !!}</p>
                                    <div>Автор: {{ $newsItem['author'] }}</div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ route('news.index', ['id' => $newsItem['id']]) }}">Смотреть подробнее</a></button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1>Новостей нет</h1>
                    @endforelse



                </div>
            </div>




@endsection
