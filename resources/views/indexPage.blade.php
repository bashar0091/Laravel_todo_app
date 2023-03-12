@extends('layouts.app')
@section('app-title', 'Todo List')

@section('main-section')

<div class="container">
    <h2 class="text-center">Todo List</h2>
    <table class="table table-bordered  ">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Task Name</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Assigned</th>
            <th scope="col">Priority</th>
            <th scope="col">Start Date</th>
            <th scope="col">Due Date</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Media Source</th>
            <th scope="col">Note</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $todoView as $todo)
          <tr>
            <th scope="row">{{$todo->id}}</th>
            <th>{{$todo->task_name}}</th>
            <td>{{$todo->task_category}}</td>
            <td>{{$todo->task_status}}</td>
            <td>{{$todo->task_assign}}</td>
            <td>{{$todo->task_priority}}</td>
            <td>{{$todo->created_at}}</td>
            <td>{{$todo->task_due}}</td>
            <td>{{$todo->task_cuName}}</td>
            <td>{{$todo->task_mediaSource}}</td>
            <td>N/A</td>
            <td>
                <a href="{{route('data.update', ['id' => $todo->id])}}">Edit</a>
                <a href="{{route('data.delete', ['id' => $todo->id])}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>

@endsection