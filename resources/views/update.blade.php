@extends('layouts.base')

@section('title', 'Music Stock')
@section('main')
  <div class="title-3">
    <h1>Modification des infos l'instrument choisi :</h1>
  </div>
  <div class="formulaire">
    <div class="background">
      {!! Form::open(['url' => '/instrument/update']) !!}
        {{{ Form::hidden('id', $instrument->id)}}}
        <div class="flex-group">
          {{{ Form::label('Nom de l\'instrument :') }}}
          {{{ Form::text('name', $instrument->name) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Prix (en €) :') }}}
          {{{ Form::number('price', $instrument->price) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('N° du stock :') }}}
          {{{ Form::number('number', $instrument->number) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('En stock :') }}}
          {{{ Form::select('storage', $storages, $instrument->storage->id) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Classification de l\'instrument :') }}}
          {{{ Form::select('classification', $classifications, $instrument->classifications) }}}
        </div>
        <div class="flex-group">
          {{{ Form::label('Couleur :') }}}
          {{{ Form::select('color[]', $colors, $instrument->colors, ['multiple' => true]) }}}
        </div>
        <div class="flex-group">
          {{{ Form::submit('Modifier les infos de l\'instrument') }}}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
