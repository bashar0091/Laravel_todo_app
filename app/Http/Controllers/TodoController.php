<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function create() {
        $title = 'Create New Todo';
        $submitText = 'Create';

        $taskName = old('task_name');
        $cuName = old('task_cuName');

        $data = compact('taskName', 'cuName', 'title', 'submitText');
        return view('todoCreate')->with($data);
    }

    public function store(Request $request) {
        
        // form validation 
        $validate = $request -> validate([
            'task_name' => 'required',
            'task_category' => 'required',
            'task_status' => 'required',
            'task_assign' => 'required',
            'task_priority' => 'required',
            'task_due' => 'required',
            'task_cuName' => 'required',
            'task_mediaSource' => 'required',
        ]);
        
        // form data save to database 
        $todoSave = new Todo;

        $todoSave->task_name = $request->task_name;
        $todoSave->task_category = $request->task_category;
        $todoSave->task_status = $request->task_status;
        $todoSave->task_assign = $request->task_assign;
        $todoSave->task_priority = $request->task_priority;
        $todoSave->task_due = $request->task_due;
        $todoSave->task_cuName = $request->task_cuName;
        $todoSave->task_mediaSource = $request->task_mediaSource;
        $todoSave->save();

        return redirect('/');
    }

    public function destroy($id) {
        $todoDel = Todo::find($id);

        if(!is_null($todoDel)) {
            $todoDel->delete();
        }

        return redirect('/');
    }

    public function update($id) {
        $todoDel = Todo::find($id);

        if(is_null($todoDel)) {
            return redirect('/');
        } else {
            $title = 'Update Data';
            $submitText = 'Update';

            $taskName = $todoDel->task_name;
            $cuName = $todoDel->task_cuName;
            
            $data = compact('taskName', 'cuName', 'title', 'submitText');

            return view('todoCreate')->with($data);
        }
    }

}
