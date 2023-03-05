<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo_list;

class TodoController extends Controller
{
    
    public function addIndex() {
        return view('todoAdd');
    }

    // todo data save function 
    public function save(Request $request) {
        $validation = $request->validate([
            'taskName' => 'required',
            'assignTo' => 'required',
            'dueDate' => 'required',
            'status' => 'required',
        ]);
        
        $todoList = new Todo_list;
        $todoList->task_name = $request->taskName;
        $todoList->assign_to = $request->assignTo;
        $todoList->due_date = $request->dueDate;
        $todoList->status = $request->status;
        $todoList->save();

        return redirect('/');
    }

    //frontpage show with data function
    public function index() {

        $todoListShow = Todo_list::all();

        $data = compact('todoListShow');

        return view('index')->with($data);
    }
}
