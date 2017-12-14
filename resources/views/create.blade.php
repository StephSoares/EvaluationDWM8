@extends('layouts.base')

@section('title', 'Accueil')
@section('main')
  <div class="title-3">
    <h1>Insérer votre instrument de musique</h1>
  </div>
  <div class="formulaire">
    <div class="background">
      {!! Form::open(['url' => '/instrument/insert']) !!}
        <div class="flex-group">
          {{{ Form::label('Nom de l\'instrument :') }}}
          {{{ Form::text('name') }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Prix (en €) :') }}}
          {{{ Form::number('price') }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('N° du stock :') }}}
          {{{ Form::text('number') }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('En stock :') }}}
          {{{ Form::select('storage', $storages) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Classification de l\'instrument :') }}}
          {{{ Form::select('classification', $classifications) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Couleur :') }}}
          {{{ Form::select('color', $colors, 0, ['multiple' => true]) }}}
        </div>
        <div class="flex-group">
          {{{ Form::submit('Ajouter au stock') }}}
        </div>
      {!! Form::close() !!}
    </div>
  </div>

@endsection
