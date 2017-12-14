<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument;

class TableController extends Controller
{
    public function index()
    {
      $instruments = Instrument::all();
      return view('table', ['instruments' => $instruments]);
    }
}
