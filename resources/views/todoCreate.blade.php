@extends('layouts.app')
@section('app-title', 'Todo Create')

@section('main-section')
<div class="container">
    <h2 class="text-center">{{$title}}</h2>

    <form action="{{url($url)}}" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="taskName">Task Name *</label>
            <input type="text" class="form-control" id="taskName" name="task_name" value="{{$taskName}}" placeholder="Task Name Here">
            @error('task_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="category">Category *</label>
            <select class="custom-select" id="category" name="task_category">
                <option value="">Select Category</option>
                <option value="wp" {{$catWp}}>Wordpress</option>
                <option value="laravel" {{$catLara}}>Laravel</option>
                <option value="mern" {{$catMern}}>MERN</option>
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
                <option value="ongoing" {{$statusOngoing}} >Ongoing</option>
                <option value="working" {{$statusWorking}} {{$status}}>Working</option>
                <option value="complete" {{$statusComplete}} {{$status}}>Complete</option>
            </select>
            @error('task_status')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="assign">Assigned *</label>
            <select class="custom-select" id="assign" name="task_assign">
                <option value="">Select Member</option>
                <option value="tommy" {{$assignTommy}}>Tommy</option>
                <option value="bobby" {{$assignBobby}}>Bobby</option>
                <option value="yonny" {{$assignYonny}}>Yonny</option>
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
                <option value="low" {{$priorityLow}}>Low</option>
                <option value="medium" {{$priorityMedium}}>Medium</option>
                <option value="high" {{$priorityHigh}}>High</option>
            </select>
            @error('task_priority')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group col-md-6">
            <label for="dueDate">Due Date *</label>
            <input type="date" class="form-control" id="dueDate" value="{{$dueDate}}" name="task_due">
            @error('task_due')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="customerName">Customer Name *</label>
            <input type="text" class="form-control" id="customerName" name="task_cuName" value="{{$cuName}}" placeholder="Enter Customer Name">
            @error('task_cuName')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="mediaSource">Media Source *</label>
            <select class="custom-select" id="mediaSource" name="task_mediaSource">
                <option value="">Select Media Source</option>
                <option value="wapp" {{$mediaSourceWapp}}>Whatsapp</option>
                <option value="linkedin" {{$mediaSourceLkd}}>Linkedin</option>
                <option value="skype" {{$mediaSourceSkp}}>Skype</option>
            </select>

            @error('task_mediaSource')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>

        <div class="form-group">
            <label for="note">Note</label>
            <textarea class="form-control" id="note" name="task_note" rows="3">{{old('task_note')}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">{{$submitText}}</button>
    </form>
</div>
<br>
<br>
<br>
@endsection