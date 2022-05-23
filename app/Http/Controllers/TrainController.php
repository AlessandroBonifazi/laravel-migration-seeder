<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trains;

class TrainController extends Controller
{
    public function index() {
        $trains_list = Trains::all();
        return view('home', compact('trains_list'));
    }
}
