@extends('layouts.app')

@section('page_title', 'Todo List')

@section('main-section')
<section class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <a href="{{route('todo.add')}}" class="btn btn-lg btn-primary">Add New List</a>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Task Name</th>
                        <th>Assign</th>
                        <th>Start Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        @foreach($todoListShow as $todoList)
                            @php
                                $startDate = date('d-m-Y', strtotime($todoList->created_at));
                                $duetDate = date('d-m-Y', strtotime($todoList->due_date));
                                $status = $todoList->status;
                            @endphp
                            <tr>
                                <td>{{$todoList->id}}</td>
                                <td>{{$todoList->task_name}}</td>
                                <td>{{$todoList->assign_to}}</td>
                                <td>{{$startDate}}</td>
                                <td>{{$duetDate}}</td>
                                <td>
                                    @if($status == 'pending')
                                        <span class="btn btn-sm btn-danger">Pending</span>
                                    @elseif($status == 'inprogress')
                                        <span class="btn btn-sm btn-warning">In Progress</span>
                                    @else
                                        <span class="btn btn-sm btn-success">Complete</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{url('todo/delete')}}/{{$todoList->id}}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection