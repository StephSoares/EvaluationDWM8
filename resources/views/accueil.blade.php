@extends('layouts.base')

@section('title', 'Accueil')
@section('main')
  <div class="title-2">
    <h2>Bienvenue sur</h2>
  </div>
  <div class="title">
    <h1>MUSIC STOCK</h1>
  </div>
  <div class="title-3">
    <h3>L'application qui vous aidera à gérer vos stocks d'instruments de musiques</h3>
  </div>
  <div class="container">
  <div class="row">
    <div id="texte" class="col-md">
      <a href="{{ url('/create') }}">
      <h4 class="text1">Insérer un instrument</h4>
      <img class="image-back" src="/images/music-player.jpg" alt=""></a>
    </div>
    <div id="texte" class="col-md">
      <a href="{{ url('/table') }}">
      <h4 class="text2" >Gérer son stock</h4>
      <img class="image-back" src="/images/music-instruments.jpg" alt=""></a>
    </div>
  </div>
@endsection
