@extends('layouts.main')


@section('title')
    Show all related tasks for a location

@endsection


@push('head')
    <link href="" type='text/css' rel='stylesheet'>
@endpush


@section('content')
<div class="row">

    <h1>{{$location->name}} <small>{{$location->tasks()->count()}} tasks</small></h1>
    <div class="well col-md-7">
    <table class="table table-striped">
        <thead>

          <th>Name</th>
          <th>Description</th>

        </thead>
        <tbody>
          @foreach ($location->tasks as $task)
          <tr>
           <td>{{$task->title}}</td>
           <td>{{$task->notes}}</td>
           <td><a href="{{route('tasks.show',$task->id)}}" class="btn btn-default ben-xs">view</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @if($location->name!=null)
    <div class="well col-md-4 col-md-offset-1">
      <div class="col-md-3 col-md-offset-2">

      {!!Html::linkRoute('locations.edit','Edit',array($location->id),array('class'=>'btn btn-success btn-block'))!!}
      @endif
      </div>

    </div>
</div>



@endsection
