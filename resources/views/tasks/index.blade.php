@extends('layouts.main')


@section('title')
    Show all Tasks

@endsection


@push('head')
    <link href="" type='text/css' rel='stylesheet'>
@endpush


@section('content')
	<div class="row">
	   <div class="col-md-12">
	    <h1>All completed taks</h1>
		<table class="table table-striped">
		<thead>

			<th>Title</th>
			<th>Notes</th>
			<th>Start date</th>
			<th>Due date</th>
      <th></th>
		</thead>
		<tbody>
			@foreach ($completedTasks as $task)
      <tr>
       <td><s>{{$task->title}}</s></td>
       <td><s>{{substr($task->notes,0,50)}}{{strlen($task->notes)>50?"...":""}}</s></td>
       <td><s>{{$task->start_date}}</s></td>
       <td><s>{{$task->due_date}}</s></td>
       <td><s><a href="{{route('tasks.show',$task->id)}}" class="btn btn-default btn-sm">View</a><a href="{{route('tasks.edit',$task->id)}}" class="btn btn-default btn-sm">Edit</a></td>
      </tr>
			@endforeach
		</tbody>
		</table>
		</div>
	</div>
	<div class="row">
	   <div class="col-md-12">
	    <h1>All not completed taks</h1>
		<table class="table table-striped">
		<thead>

			<th>Title</th>
			<th>Notes</th>
			<th>Start date</th>
			<th>Due date</th>
			<th>completed percent</th>
			<th></th>
		</thead>
		<tbody>
			@foreach ($notcompletedTasks as $task)
			  <tr>
			    <td>{{$task->title}}</td>
				<td>{{substr($task->notes,0,50)}}{{strlen($task->notes)>50?"...":""}}</td>
				<td>{{$task->start_date}}</td>
				<td>{{$task->due_date}}</td>
				<td>{{$task->complete_percent}}</td>
				<td><a href="{{route('tasks.show',$task->id)}}" class="btn btn-default btn-sm">View</a><a href="{{route('tasks.edit',$task->id)}}" class="btn btn-default btn-sm">Edit</a></td>
			  </tr>
			@endforeach
		</tbody>
		</table>
	   </div>


	</div>
@endsection


@push('body')
    <script src=""></script>
@endpush
