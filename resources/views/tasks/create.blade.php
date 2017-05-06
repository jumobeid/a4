@extends('layouts.main')


@section('title')
    Add New Task

@endsection


@push('head')
    <link href="" type='text/css' rel='stylesheet'>
@endpush


@section('content')


	<div class="container">

	{!!Form::open(['route'=>'tasks.store','method'=>'POST','class'=>'form-horizantal'])!!}
	{{csrf_field()}}

	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-9">
	{!!Form::label('title','title:')!!}
	{!!Form::text('title','',['class'=>'form-control'])!!}
	</div>
	</div>
	<div class="row">

		<div class="col-md-1"></div>

		<div class="col-md-4">
			<div class="form-group">
			{!!Form::label('priority','priority:')!!}
			{!!Form::select('priority', array('Hi' => 'Hi', 'Medium' => 'Medium', 'Low' => 'Low'),'',['class'=>'selectpicker form-control'])!!}

			</div>

			<div class="form-group">
			{!!Form::label('cow_id','applied on:')!!}
			{!!Form::text('cow_id','',['class'=>'form-control'])!!}
			</div>

			<div class="form-group">
			{!!Form::label('notes','notes:')!!}
			{!!Form::text('notes','',['class'=>'form-control'])!!}


			</div>


		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4">
            <div class="form-group">
		   {!!Form::label('start_date','start date: yyyy-mn-dy')!!}
		   {!!Form::date('start_date','',['class'=>'form-control'])!!}

			</div>

			<div class="form-group">
			{!!Form::label('due_date','due date: yyyy-mn-dy')!!}
		    {!!Form::date('due_date','',['class'=>'form-control'])!!}

			</div>

			<div class="form-group">

			{!!Form::label('complete_percent','completed percent:')!!}
			{!!Form::select('complete_percent', array('0' => 'completed-0%','20' => 'completed-20%', '50' => 'completed-50%', '100' => 'completed-100%'),'',['class'=>'selectpicker form-control'])!!}

			</div>

      <div class="form-group">

			{!!Form::label('location_id','location:')!!}
      <select id='location_id' class='form-control' name='location_id'>
          @foreach($locationsForDropdown as $location_id => $locationName)
               <option value='{{ $location_id }}' {{ ($newTask->location_id == $location_id) ? 'SELECTED' : '' }}>
                   {{$locationName}}
               </option>
           @endforeach
      </select>
			</div>


		</div>
   </div>


	        <div class="col-md-9 col-md-offset-1">
			<div class="form-group">
			{!!Form::submit('Save Task',['class'=>'btn btn-success form-control'])!!}
			</div>
			</div>

		{!!Form::close()!!}




</div>


@endsection


@push('body')
    <script src=""></script>
@endpush
