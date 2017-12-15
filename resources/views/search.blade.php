@extends('layouts.base')

@section('title', 'Music Stock')
@section('main')
  <div class="title-3">
    <h1>Recherche d'instruments :</h1>
  </div>
  <div class="title-3">
    <h4>Rechercher votre instrument de musique avec le numéro de Stock :</h4>
  </div>
{!! Form::open(['method'=>'GET','url'=>'/search','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Mettre le numéro de stock (ex :000000)">
    <span class="input-group-btn">
        <a href="{{ url('/search') }}"><button class="btn btn-default-sm button" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button></a>
    </span>
</div>
{!! Form::close() !!}
@endsection
