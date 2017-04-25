@extends('layouts.main')


@section('title')
    Edit New Task

@endsection


@push('head')
    <link href="" type='text/css' rel='stylesheet'>
@endpush


@section('content')


	<div class="container">

	{!!Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'PUT'])!!}
	{{csrf_field()}}

	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-9">
	{!!Form::label('title','title:')!!}
	{!!Form::text('title',old('title'),['class'=>'form-control'])!!}
	</div>
	</div>
	<div class="row">

		<div class="col-md-1"></div>

		<div class="col-md-4">
			<div class="form-group">
			{!!Form::label('priority','priority:')!!}
			{!!Form::select('priority', array('Hi' => 'Hi', 'Medium' => 'Medium', 'Low' => 'Low'),old('priority'),['class'=>'selectpicker form-control'])!!}

			</div>

			<div class="form-group">
			{!!Form::label('cow_id','applied on:')!!}
			{!!Form::text('cow_id',old('cow_id'),['class'=>'form-control'])!!}
			</div>

			<div class="form-group">
			{!!Form::label('notes','notes:')!!}
			{!!Form::text('notes',old('notes'),['class'=>'form-control'])!!}


			</div>


		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4">
            <div class="form-group">
		   {!!Form::label('start_date','start date: yyyy-mn-dy')!!}
		   {!!Form::date('start_date',old('start_date'),['class'=>'form-control'])!!}

			</div>

			<div class="form-group">
			{!!Form::label('due_date','due date: yyyy-mn-dy')!!}
		    {!!Form::date('due_date',old('due_date'),['class'=>'form-control'])!!}

			</div>

			<div class="form-group">

			{!!Form::label('complete_percent','completed percent:')!!}
			{!!Form::select('complete_percent', array('0' => 'completed-0%','20' => 'completed-20%', '50' => 'completed-50%', '100' => 'completed-100%'),old('complete_percent'),['class'=>'selectpicker form-control'])!!}

			</div>




		</div>
   </div>


	        <div class="col-md-9 col-md-offset-1">
			<div class="form-group">
             {!!Form::submit('Save edited task',['class'=>'btn btn-success form-control'])!!}
			</div>
			</div>

		{!!Form::close()!!}




</div>


@endsection


@push('body')
    <script src=""></script>
@endpush
