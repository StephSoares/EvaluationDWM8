@extends('layouts.base')

@section('title', 'Music Stock')
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
            @if ($instrument->classifications)
              <td>
                @foreach ($instrument->classifications as $classification)
                  {{ $classification->classification }}
                @endforeach
              </td>
            @else
              <td>Pas de Classifications Spécifiées</td>
            @endif
            @if ($instrument->colors)
              <td>
                @foreach ($instrument->colors as $color)
                  {{ $color->color }}
                @endforeach
              </td>
            @else
              <td>Pas de Couleurs Spécifiées</td>
            @endif
            <td>
             <form class ="delete_form" action="/instrument/delete/{{$instrument->id}}" method="GET">
               {{ csrf_field() }}
                <button type="submit" class="btn btn-outline-danger">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
             </form>
           </td>
           <td>
            <form class ="update_form" action="/instrument/update/{{$instrument->id}}" method="GET">
              {{ csrf_field() }}
               <button type="submit" class="btn btn-outline-success">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
               </button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
