@extends('layouts.app')

@section('page_title', 'Todo Add')

@section('main-section')
<section class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <a href="{{url('/')}}" class="btn btn-lg btn-primary">See Todo List</a>
                </div>

                <form action="{{route('todo.add')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="taskNameId">Task Name</label>
                        <input type="text" class="form-control" name="taskName" id="taskNameId" value="{{old('taskName')}}" placeholder="Enter the task name">
                        @error('taskName')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="assignToId">Assign to</label>
                        <select name="assignTo" id="assignToId" class="form-control">
                            <option value="">Select an item</option>
                            <option value="bashar">Bashar</option>
                            <option value="tony">Tony</option>
                            <option value="rony">Rony</option>
                        </select>
                        @error('assignTo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="dueDateId">Due Date</label>
                        <input type="date" class="form-control" name="dueDate" id="dueDateId" placeholder="Enter the task name">
                        @error('dueDate')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">Select an item</option>
                            <option value="pending">Pending</option>
                            <option value="inprogress">In Progress</option>
                            <option value="complete">Complete</option>
                        </select>
                        @error('status')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="from-group text-center">
                        <button type="submit" class="btn btn-success">Add Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection