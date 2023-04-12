<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train; // importiamo il modello Train
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function homepage(){

    $trains = Train::all(); // utilizziamo il modello Train per ottenere tutti i treni


    return view('welcome');
  }
}
