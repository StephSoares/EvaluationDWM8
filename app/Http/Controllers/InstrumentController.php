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
}
