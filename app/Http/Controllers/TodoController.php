<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function create() {
        return view('todoCreate');
    }

    public function store(Request $request) {
        
        // form validation 
        $validate = $request -> validate([
            'task_name' => 'required',
            'task_category' => 'required',
            'task_status' => 'required',
            'task_status' => 'required',
            'task_assign' => 'required',
            'task_priority' => 'required',
            'task_due' => 'required',
            'task_cuName' => 'required',
            'task_mediaSource' => 'required',
        ]);
    }
}
