@extends('layouts.main')


@section('title')
    Show Tasks

@endsection


@push('head')
    <link href="" type='text/css' rel='stylesheet'>
@endpush


@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
	<h1>{{$newTask->title}}</h1>
	<p>{{$newTask->notes}}</p>

		 <div class="col-md-6">
			<div class="well">
			<dl class="dl-horizontal">
			  <dt>priority: </dt>
			  <dd>{{$newTask->priority}}</dd>

			  <dt>status: </dt>
			  <dd>{{$newTask->status}}</dd>
			  <dt>start date: </dt>
			  <dd>{{$newTask->start_date}}</dd>
			  <dt>due date: </dt>
			  <dd>{{$newTask->due_date}}</dd>
			  <dt>over due: </dt>
			  <dd>{{$newTask->done_overdue}}</dd>
			  <dt>completed percent: </dt>
			  <dd>{{$newTask->complete_percent}}</dd>
        <dt>location: </dt>
        <dd>{{$newTask->location->name}}</dd>
        <dt>animals: </dt>
        @foreach($newTask->animals as $animal)
          <dd>  {{$animal->name}}</dd>
        @endforeach
			</dl>
			</div>
		  </div>

		  <div class="col-md-6">
			  <div class="well">
			    <div class="row">
				  <dl class="dl-horizontal">
					  <dt>create at: </dt>
					  <dd>{{date('Y-m-d h:ia',strtotime($newTask->created_at))}}</dd>
					  <hr>
					  <dt>last updated: </dt>
					  <dd>{{date('Y-m-d h:ia',strtotime($newTask->updated_at))}}</dd>
				  </dl>
					  <div class="col-md-3 col-md-offset-2">
					  {!!Html::linkRoute('tasks.edit','Edit',array($newTask->id),array('class'=>'btn btn-success btn-block'))!!}

					  </div>
            <div class="col-md-3 col-md-offset-2">
           {!!Form::open(['route'=>['tasks.destroy',$newTask->id],'method'=>'DELETE'])!!}
           {!!Form::submit('Delete',['class'=>'btn btn-danger btn-block'])!!}
           {!!Form::close()!!}
           </div>
			    </div>
		     </div>
		  </div>




  </div>
</div>
@endsection


@push('body')
    <script src=""></script>
@endpush
