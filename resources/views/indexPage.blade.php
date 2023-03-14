@extends('layouts.app')
@section('app-title', 'Todo List')

@section('main-section')

<div class="container">
    <h2 class="text-center">Todo List</h2>
    <table class="table table-bordered  ">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            {{-- <th scope="col">ID</th> --}}
            <th scope="col">Task Name</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Assigned</th>
            <th scope="col">Priority</th>
            <th scope="col">Due Date</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Media Source</th>
            <th scope="col">Note</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php
          $i = 0;
          @endphp

          @foreach( $todoView as $todo)

          @php
          $i++;

          $taskStatus = $todo->task_status;
          $taskPriority = $todo->task_priority;
          $taskNotes = $todo->task_notes
          @endphp
          <tr>
            <th scope="row">{{$i}}</th>
            {{-- <th scope="row">{{$todo->id}}</th> --}}
            <th>{{$todo->task_name}}</th>
            <td>{{$todo->task_category}}</td>
            <td>
              @if($taskStatus == 'ongoing') 
                <span class="bg-danger text-white p-1">Ongoing</span>
              @elseif($taskStatus == 'working')
                <span class="bg-info text-white p-1">Working</span>
              @else
                <span class="bg-success text-white p-1">Complete</span>
              @endif
            </td>
            <td>{{$todo->task_assign}}</td>
            <td>
              @if($taskPriority == 'high') 
                <span class="bg-danger text-white p-1">High</span>
              @elseif($taskPriority == 'medium')
                <span class="bg-warning text-dark p-1">Medium</span>
              @else
                <span class="bg-dark text-white p-1">Low</span>
              @endif  
            </td>
            <td>{{$todo->task_due}}</td>
            <td>{{$todo->task_cuName}}</td>
            <td>{{$todo->task_mediaSource}}</td>
            <td>
              @if($taskNotes)
                {{$taskNotes}}
              @else
                N/A
              @endif
            </td>
            <td>
                <a href="{{route('view', ['id' => $todo->id])}}">View</a>
                <a href="{{route('data.update', ['id' => $todo->id])}}">Edit</a>
                <a href="{{route('data.delete', ['id' => $todo->id])}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>

@endsection