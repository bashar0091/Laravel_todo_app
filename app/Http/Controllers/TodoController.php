<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo_list;

class TodoController extends Controller
{
    //frontpage show controller
    public function index() {
        return view('index');
    }

    public function addIndex() {
        return view('todoAdd');
    }

    public function save(Request $request) {
        $validation = $request->validate([
            'taskName' => 'required',
            'assignTo' => 'required',
            'dueDate' => 'required',
            'status' => 'required',
        ]);
        
        $todoList = new Todo_list;

    }
}
