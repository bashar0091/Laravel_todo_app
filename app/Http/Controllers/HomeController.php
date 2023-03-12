<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $todoView = Todo::all();
        $data = compact('todoView');
        return view('indexPage')->with($data);
        
    }
}
