@extends('layouts.app')
@section('app-title', 'Todo Create')

@section('main-section')
<div class="container">
    <h2 class="text-center">Create New Todo</h2>

    <form action="{{route('data.store')}}">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="taskName">Task Name *</label>
            <input type="text" class="form-control" id="taskName" name="task_name" placeholder="Task Name Here">
            @error('task_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="category">Category *</label>
            <select class="custom-select" id="category" name="task_category">
                <option value="">Select Category</option>
                <option value="wp">Wordpress</option>
                <option value="laravel">Laravel</option>
                <option value="mern">MERN</option>
            </select>
            @error('task_category')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="status">Status *</label>
            <select class="custom-select" id="status" name="task_status">
                <option value="ongoing" selected>Ongoing</option>
                <option value="working" disabled>Working</option>
                <option value="complete" disabled>Complete</option>
            </select>
            @error('task_status')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="assign">Assigned *</label>
            <select class="custom-select" id="assign" name="task_assign">
                <option value="">Select Member</option>
                <option value="tommy">Tommy</option>
                <option value="bobby">Bobby</option>
                <option value="yonny">Yonny</option>
            </select>
            @error('task_assign')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="priority">Priority *</label>
            <select class="custom-select" id="priority" name="task_priority">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            @error('task_priority')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group col-md-6">
            <label for="dueDate">Due Date *</label>
            <input type="date" class="form-control" id="dueDate" name="task_due">
            @error('task_due')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="customerName">Customer Name *</label>
            <input type="text" class="form-control" id="customerName" name="task_cuName" placeholder="Enter Customer Name">
            @error('task_cuName')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="mediaSource">Media Source *</label>
            <select class="custom-select" id="mediaSource" name="task_mediaSource">
                <option value="">Select Media Source</option>
                <option value="wapp">Whatsapp</option>
                <option value="linkedin">Linkedin</option>
                <option value="skype">Skype</option>
            </select>
            @error('task_mediaSource')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Note</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<br>
<br>
<br>
@endsection