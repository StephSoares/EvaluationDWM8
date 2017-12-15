<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument;

class SearchController extends Controller
{
  public function index()
  {
    $instruments = Instrument::all();
    return view('search', ['instruments' => $instruments]);
  }
}
