<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument;

class BaseController extends Controller
{
    public function index()
    {
      $instruments = Instrument::all();
      return view('accueil', ['instruments' => $instruments]);
    }
}
