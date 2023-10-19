<?php

namespace App\Http\Controllers;

use App\Animais;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index(){

   $registros=Animais::all();

    return view("home",compact('registros'));
 }


}
