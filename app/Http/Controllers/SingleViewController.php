<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class SingleViewController extends Controller
{
    public function index($id) {

        $todoData = Todo::find($id);

        $data = compact('todoData');

        return view('single-view')->with($data);

    }
}
