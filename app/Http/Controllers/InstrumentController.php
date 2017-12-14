<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument;
use App\Storage;
use App\Classification;
use App\Color;

class InstrumentController extends Controller
{
    public function insertOne(Request $request)
    {
      $instrument = new Instrument;
      $instrument->name = $request->name;
      $instrument->price = $request->price;
      $instrument->number = $request->number;
      $instrument->storage_id = $request->storage;
      $instrument->save();
      $instrument->classifications()->attach($request->classification);
      $instrument->colors()->attach($request->color);
      return redirect('/table');
    }
    public function deleteOne(Request $request, $id)
    {
      $instrument = Instrument::find($id);
      $instrument->classifications()->detach();
      $instrument->colors()->detach();
      $instrument->delete();
      return redirect('/table');
    }
    public function updateOne(Request $request, $id)
    {
      $instrument = Instrument::find($id);
      $storagesAll = Storage::all();
      $storages  = [];
      foreach ($storagesAll as $value) {
        $storages[$value->id] = $value->storage;
      }
      $classificationsAll = Classification::all();
      $classifications = [];
      foreach ($classificationsAll as $value) {
        $classifications[$value->id] = $value->classification;
      }
      $colorsAll = Color::all();
      $colors = [];
      foreach ($colorsAll as $value) {
        $colors[$value->id] = $value->color;
      }
      return view('update', ['storages' => $storages, 'classifications' => $classifications, 'colors' => $colors, 'instrument' => $instrument]);
    }
    public function updateOneAction(Request $request)
    {
      $instrument = Instrument::find($request->id);
      $instrument->name = $request->name;
      $instrument->price = $request->price;
      $instrument->number = $request->number;
      $instrument->storage_id = $request->storage;
      $instrument->classifications()->detach();
      $instrument->classifications()->attach($request->classification);
      $instrument->colors()->detach();
      $instrument->colors()->attach($request->color);
      $instrument->save();
      return redirect('/table');
    }
}
