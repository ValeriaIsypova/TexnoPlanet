@extends('layouts.app')

@section('content')

<section class="single-prod py-100">
    <div class="container">
        <div class="prod-items">
            <div class="prod-pic col-md-6 col-12">
                <div class="prod-img-box">
                    <img src="/public/img/{{$product -> photo}}" alt="" class="prod-img img-fluid">
                </div>
            </div>
            <div class="product-info col-md-6 col-12">
                <h1 class="product-name">{{ $product -> title }}</h1>
                <div class="sell-box">
                @if (Auth::user())
                    <a href="/public/addtocart/{{$product -> id}}" class="btn main-btn">Купить</a>
                @else
                <h1 class="no-auth">
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link filter-link" href="{{ route('login') }}">Авторизоваться</a>
                    </li>
                @endif
                </h1>
                @endif
                <p class="price">{{ $product -> price }} руб.</p>
                </div>
                <p class="text desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi assumenda et tempore a praesentium fugiat vel impedit ut maiores rerum, eum perferendis enim quidem incidunt totam id fugit odit provident, animi vero esse? Autem vel accusamus optio voluptates natus ullam doloremque ducimus labore? Animi labore minus, iusto excepturi qui molestiae blanditiis quam! Reprehenderit illum sequi facere architecto adipisci nam, quia recusandae, reiciendis obcaecati odio, facilis sunt fugiat optio quis velit deleniti delectus id! Officia, hic ipsa. Repudiandae fugiat quas illo iusto modi vel voluptates temporibus obcaecati voluptatem provident expedita molestiae perferendis dolor delectus reiciendis, impedit aliquam dicta laboriosam atque nobis.</p>
            </div>
            <div class="prod-param col-12">
                <h3 class="title">Характеристики</h3>
                <ul class="prod-param-items">
                    <li class="prod-param-item">
                        <p>Дата производства: {{ $product -> year }}</p>
                    </li>
                    <li class="prod-param-item">
                        <p>Страна производитель: {{ $product -> country }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
