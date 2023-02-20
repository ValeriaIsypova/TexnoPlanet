@extends('layouts.app')

@section('content')

<section class="catalog">
    <div class="container">
        <div class="title-box d-flex flex-wrap">
            <h2 class="title">
                Каталог
            </h2>
            <div class="filter-box my-3 col-12">
                <div class="select-box">
                <h5 class="title sm-title">Отсортировать по:</h5>
                <select name="filter" id="filter" class="filter">
                    <option value="year">Новизне</option>
                    <option value="year">Наименованию</option>
                    <option value="year">Сначала бюджетные</option>
                    <option value="year">Сначала дорогие</option>
                </select>
                </div>
                <div class="select-box">
                    <h5 class="title sm-title">Показать:</h5>
                    <ul class="nav filter-nav">
                        <li class="filter-item"><a href="" class="filter-link">Всё</a></li>
                        <li class="filter-item"><a href="" class="filter-link">Ноутбуки</a></li>
                        <li class="filter-item"><a href="" class="filter-link">Геймпады</a></li>
                        <li class="filter-item"><a href="" class="filter-link">Консоли</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="catalog-items ">
            @foreach ($product as $prod)
            <div class="catalog-item card">
                <div class="pic-box">
                    <img src="/public/img/{{$prod -> photo}}" alt="" class="img-fliud">
                </div>
                <div class="text-box">
                    <p class="card-title mb-3">{{$prod -> title}}</p>
                    <p class="price">{{$prod -> price}} руб.</p>
                </div>
                @if (Auth::user())
                    <a href="/public/addtocart/{{$prod -> id}}" class="btn main-btn">Купить</a>
                @else
                <h1 class="no-auth">
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link filter-link" href="{{ route('login') }}">Авторизоваться</a>
                    </li>
                @endif
                </h1>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
