<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storage;
use App\Classification;
use App\Color;

class CreateController extends Controller
{
    public function index()
    {
      $storagesAll = Storage::all();
      $storages = [];
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
      return view('create', ['storages' => $storages, 'classifications' => $classifications, 'colors' => $colors]);
    }
}
