<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    public $timestamps = false;
    public function storage()
    {
      return $this->belongsTo('App\Storage');
    }
    public function classifications()
    {
      return $this->belongsToMany('App\Classification', 'instrument_classification');
    }
    public function colors()
    {
      return $this->belongsToMany('App\Color', 'instrument_color');
    }
}
