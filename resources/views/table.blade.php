@extends('layouts.base')

@section('title', 'Accueil')
@section('main')
<div class="title-4">
  <h3>Voici le stock de votre magasin :</h3>
</div>
<div class="tableau">
  <table class="table table-bordered table-striped table-responsive">
    <thead class="head">
      <tr>
          <th>Nom de l'instrument</th>
          <th>Prix <small>(en €)</small></th>
          <th>N° de Stock</th>
          <th>En Stock</th>
          <th>Classification de l'instrument</th>
          <th>Couleur</th>
          <th>Suppression</th>
          <th>Mise à jour</th>
      </tr>
    </thead>
    <tbody class="background_body">
      @foreach ($instruments as $instrument)
        <tr>
            <td>{{ $instrument->name }}</td>
            <td>{{ $instrument->price }}</td>
            <td>{{ $instrument->number }}</td>
            <td>{{ $instrument->storage->storage }}</td>
            @if ($instrument->classification)
              <td>
                @foreach ($instrument->classification as $classification)
                  {{ $classification->classification }}
                @endforeach
              </td>
            @else
              <td>Pas de Classifications Spécifiées</td>
            @endif
            @if ($instrument->color)
              <td>
                @foreach ($instrument->color as $color)
                  {{ $color->color }}
                @endforeach
              </td>
            @else
              <td>Pas de Couleurs Spécifiées</td>
            @endif
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
