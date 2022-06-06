@extends('layouts.app')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('/images/slide1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Arknights' Catastrophe Messenger</h5>
        <p>Information and News About Terra.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('/images/slide2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Arknights' Catastrophe Messenger</h5>
        <p>Information and News About Terra.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('/images/slide3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Arknights' Catastrophe Messenger</h5>
        <p>Information and News About Terra.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="card">
  <h5 class="card-header">Operator</h5>
  <div class="card-body">
    <h5 class="card-title">Operators of Terra</h5>
    <p class="card-text">Notable characters of Arknights used in battle.</p>
    <a href="#" class="btn btn-primary">Go</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header">Classes</h5>
  <div class="card-body">
    <h5 class="card-title">Division of Operators</h5>
    <p class="card-text">Eight main classes of operators in Arknights.</p>
    <a href="#" class="btn btn-primary">Go</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header">Race</h5>
  <div class="card-body">
    <h5 class="card-title">Inhabitant's Races in Terra</h5>
    <p class="card-text">Terra is populated by various races, while some races may be unidentified.</p>
    <a href="#" class="btn btn-primary">Go</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header">Faction</h5>
  <div class="card-body">
    <h5 class="card-title">Various Faction in the World of Terra</h5>
    <p class="card-text">Terra is comprised of several factions, whether nation-states, corporations, or independent groups, with their own interests and goals.</p>
    <a href="#" class="btn btn-primary">Go</a>
  </div>
</div>
</div>


@endsection