@extends('layouts.main')


@section('title')
    Show all related tasks for an animal

@endsection


@push('head')
    <link href="" type='text/css' rel='stylesheet'>
@endpush


@section('content')
<div class="row">

    <h1>{{$animal->name}} <small>{{$animal->tasks()->count()}} tasks</small></h1>
    <div class="well col-md-7">
      <table class="table table-striped">
  		<thead>

  			<th>Name</th>
  			<th>Description</th>

  		</thead>
  		<tbody>
        @foreach ($animal->tasks as $task)
        <tr>
         <td>{{$task->title}}</td>
         <td>{{$task->notes}}</td>
         <td>@foreach ($task->animals as $animal)
              {{$animal->name}}
              @endforeach
         </td>
         <td><a href="{{route('tasks.show',$task->id)}}" class="btn btn-default ben-xs">view</a></td>
        </tr>
  			@endforeach
      </tbody>
  		</table>
    </div>
    <div class="well col-md-4 col-md-offset-1">
      <div class="col-md-3 col-md-offset-2">
      {!!Html::linkRoute('animals.edit','Edit',array($animal->id),array('class'=>'btn btn-success btn-block'))!!}

      </div>
      <div class="col-md-3 col-md-offset-2">
      {!!Form::open(['route'=>['animals.destroy',$animal->id],'method'=>'DELETE'])!!}
      {!!Form::submit('Delete',['class'=>'btn btn-danger btn-block'])!!}
      {!!Form::close()!!}
      </div>
    </div>
</div>



@endsection
