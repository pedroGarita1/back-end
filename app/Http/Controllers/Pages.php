<?php

namespace App\Http\Controllers;

use App\Models\DescriptionPeople;
use App\Models\EmailPeople;
use App\Models\People;
use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index(){
        $titulo = 'Inicio';
        $people = People::all();
        return view('inicio',compact('titulo','people'));
    }
    public function index_2(){
        $titulo = 'Inicio 2';
        $people = EmailPeople::all();
        return view('inicio_2',compact('titulo','people'));
    }
    public function index_3(){
        $titulo = 'Inicio 3';
        $people = DescriptionPeople::all();
        return view('inicio_3',compact('titulo','people'));
    }
}
