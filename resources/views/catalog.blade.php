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
                        <li class="filter-item"><a href="" class="filter-link">Ноутбки</a></li>
                        <li class="filter-item"><a href="" class="filter-link">Игровые приставки</a></li>
                        <li class="filter-item"><a href="" class="filter-link">Геймпады</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

