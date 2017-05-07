@extends('layouts.main')


@section('title')
    Show a Random Tasks

@endsection


@push('head')
    <link href="" type='text/css' rel='stylesheet'>
@endpush


@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
	<h1>{{$rand->title}}</h1>
	<p>{{$rand->notes}}</p>

		 <div class="col-md-6">
			<div class="well">
			<dl class="dl-horizontal">
			  <dt>priority: </dt>
			  <dd>{{$rand->priority}}</dd>
			  <dt>status: </dt>
			  <dd>{{$rand->status}}</dd>
			  <dt>start date: </dt>
			  <dd>{{$rand->start_date}}</dd>
			  <dt>due date: </dt>
			  <dd>{{$rand->due_date}}</dd>
			  <dt>over due: </dt>
			  <dd>{{$rand->done_overdue}}</dd>
			  <dt>completed percent: </dt>
			  <dd>{{$rand->complete_percent}}</dd>
        <dt>location: </dt>
        <dd>{{$rand->location->name}}</dd>
        <dt>animals: </dt>
        @foreach($rand->animals as $animal)
          <dd>  {{$rand->name}}</dd>
        @endforeach
			</dl>
			</div>
		  </div>

		  <div class="col-md-6">
			  <div class="well">
			    <div class="row">
				  <dl class="dl-horizontal">
					  <dt>create at: </dt>
					  <dd>{{date('Y-m-d h:ia',strtotime($rand->created_at))}}</dd>
					  <hr>
					  <dt>last updated: </dt>
					  <dd>{{date('Y-m-d h:ia',strtotime($rand->updated_at))}}</dd>
				  </dl>
					  <div class="col-md-3 col-md-offset-2">
					  {!!Html::linkRoute('tasks.edit','Edit',array($rand->id),array('class'=>'btn btn-success btn-block'))!!}

					  </div>
					  <div class="col-md-3 col-md-offset-2">
					  {!!Form::open(['route'=>['tasks.destroy',$rand->id],'method'=>'DELETE'])!!}
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
