@extends('layouts.app')

@section('main-section')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                
                <h4>
                    <span>Task Name : </span>
                    <span>{{$todoData->task_name}}</span>
                </h4>

            </div>

            <div class="col-12">
                <span class="text-white bg-primary p-2 d-inline-block"><b><u>Categroy</u> : </b> {{$todoData->task_category}}</span>
                <span class="text-white bg-secondary p-2 d-inline-block"><b><u>Status</u> : </b> {{$todoData->task_status}}</span>
                <span class="text-white bg-success p-2 d-inline-block"><b><u>Assign</u> : </b> {{$todoData->task_assign}}</span>
                <span class="text-white bg-danger p-2 d-inline-block"><b><u>Priority</u> : </b> {{$todoData->task_priority}}</span>
                <span class="text-dark bg-warning p-2 d-inline-block"><b><u>Due</u> : </b> {{$todoData->task_due}}</span>
                <span class="text-white bg-info p-2 d-inline-block"><b><u>Customer</u> : </b> {{$todoData->task_cuName}}</span>
                <span class="text-white bg-dark p-2 d-inline-block"><b><u>Media</u> : </b> {{$todoData->task_mediaSource}}</span>
            </div>

            <div class="col-12 mt-5">
                <h4><u>Description : </u></h4>
                
                {!! $todoData->task_des !!}
            </div>

            <div class="col-12 mt-3">
                <a class="btn btn-info btn-lg" href="{{route('data.update', ['id' => $todoData->id])}}">Edit</a>
                <a class="btn btn-success btn-lg" href="{{route('data.delete', ['id' => $todoData->id])}}">Delete</a>
            </div>
        </div>
    </div>
</section>
@endsection