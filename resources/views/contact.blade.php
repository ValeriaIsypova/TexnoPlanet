@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
<div class="about">
	<div class="about_title">
		<h2>О нас</h2>
	</div>
	<div class="about_section col-12 d-flex">
		<div class="txt_about col-6">
			<h2>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Minus obcaecati eaque vel iste consequuntur esse tempora aspernatur expedita perferendis non nemo unde quae sequi tenetur animi et, voluptate est delectus?</h2>
		</div>
		<div class="logo_about col-6">
			<img src="">
		</div>
	</div>
</div>
	</div>
</div>

@endsection