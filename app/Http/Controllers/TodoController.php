<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function create() {
        $title = 'Create New Todo';
        $submitText = 'Create';
        $url = 'data/store';

        $taskName = old('task_name');
        $cuName = old('task_cuName');
        $dueDate = old('task_due');
        $status = 'disabled';
        $taskNote = old('task_note');

        $catWp = old('task_category') == 'wp' ? 'selected' : '';
        $catLara = old('task_category') == 'laravel' ? 'selected' : '';
        $catMern = old('task_category') == 'mern' ? 'selected' : '';

        $assignTommy = old('task_assign') == 'tommy' ? 'selected' : '';
        $assignBobby = old('task_assign') == 'bobby' ? 'selected' : '';
        $assignYonny = old('task_assign') == 'yonny' ? 'selected' : '';

        $priorityLow = old('task_priority') == 'low' ? 'selected' : '';
        $priorityMedium = old('task_priority') == 'medium' ? 'selected' : '';
        $priorityHigh = old('task_priority') == 'high' ? 'selected' : '';

        $mediaSourceWapp = old('task_mediaSource') == 'wapp' ? 'selected' : '';
        $mediaSourceLkd = old('task_mediaSource') == 'linkedin' ? 'selected' : '';
        $mediaSourceSkp = old('task_mediaSource') == 'skype' ? 'selected' : '';

        $statusOngoing = 'selected';
        $statusWorking = '';
        $statusComplete = '';

        $data = compact('url', 'taskName', 'cuName', 'title', 'submitText', 'status', 'dueDate', 'catWp', 'catLara', 'catMern', 'assignTommy', 'assignBobby', 'assignYonny', 'priorityLow', 'priorityMedium', 'priorityHigh', 'mediaSourceWapp', 'mediaSourceLkd', 'mediaSourceSkp', 'statusOngoing', 'statusWorking', 'statusComplete', 'taskNote' );
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
        $todoSave->task_notes = $request->task_note;
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
            $url = 'data/update-store' . '/' . $id;

            $taskName = $todoDel->task_name;
            $cuName = $todoDel->task_cuName;
            $dueDate = $todoDel->task_due;
            $taskNote = $todoDel->task_notes;
            $status = '';

            $catWp = $todoDel->task_category == 'wp' ? 'selected' : '';
            $catLara = $todoDel->task_category == 'laravel' ? 'selected' : '';
            $catMern = $todoDel->task_category == 'mern' ? 'selected' : '';
            
            $assignTommy = $todoDel->task_assign == 'tommy' ? 'selected' : '';
            $assignBobby = $todoDel->task_assign == 'bobby' ? 'selected' : '';
            $assignYonny = $todoDel->task_assign == 'yonny' ? 'selected' : '';

            $priorityLow = $todoDel->task_priority == 'low' ? 'selected' : '';
            $priorityMedium = $todoDel->task_priority == 'medium' ? 'selected' : '';
            $priorityHigh = $todoDel->task_priority == 'high' ? 'selected' : '';

            $mediaSourceWapp = $todoDel->task_mediaSource == 'wapp' ? 'selected' : '';
            $mediaSourceLkd = $todoDel->task_mediaSource == 'linkedin' ? 'selected' : '';
            $mediaSourceSkp = $todoDel->task_mediaSource == 'skype' ? 'selected' : '';

            $statusOngoing = $todoDel->task_status == 'ongoing' ? 'selected' : '';
            $statusWorking = $todoDel->task_status == 'working' ? 'selected' : '';
            $statusComplete = $todoDel->task_status == 'complete' ? 'selected' : '';
            
            $data = compact('url', 'todoDel', 'taskName', 'cuName', 'title', 'submitText', 'status', 'dueDate' , 'catWp', 'catLara', 'catMern', 'assignTommy', 'assignBobby', 'assignYonny', 'priorityLow', 'priorityMedium', 'priorityHigh' , 'mediaSourceWapp', 'mediaSourceLkd', 'mediaSourceSkp', 'statusOngoing', 'statusWorking', 'statusComplete', 'taskNote');

            return view('todoCreate')->with($data);
        }
    }
    
    public function update_store($id, Request $request) {
        $todoUpdate = Todo::find($id);

        $todoUpdate->task_name = $request->task_name;
        $todoUpdate->task_category = $request->task_category;
        $todoUpdate->task_status = $request->task_status;
        $todoUpdate->task_assign = $request->task_assign;
        $todoUpdate->task_priority = $request->task_priority;
        $todoUpdate->task_due = $request->task_due;
        $todoUpdate->task_cuName = $request->task_cuName;
        $todoUpdate->task_mediaSource = $request->task_mediaSource;
        $todoUpdate->task_notes = $request->task_note;
        $todoUpdate->save();

        return redirect('/');
    }

}
