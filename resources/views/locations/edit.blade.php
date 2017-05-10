@extends('layouts.main')


@section('title')
    Edit Location

@endsection


@push('head')
    <link href="" type='text/css' rel='stylesheet'>
@endpush


@section('content')


	<div class="container">
  {!!Form::model($location,['route'=>['locations.update',$location->id],'method'=>'PUT'])!!}
	{{csrf_field()}}

	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-9">
	{!!Form::label('name','name:')!!}
	{!!Form::text('name',$location->name,['class'=>'form-control'])!!}
	</div>
	</div>
	<div class="row">

		<div class="col-md-1"></div>

		<div class="col-md-4">
			<div class="form-group">
			{!!Form::label('description','town:')!!}
			{!!Form::text('description',$location->name,['class'=>'form-control'])!!}
			</div>

      <div class="form-group">
      {!!Form::label('number_of_workers','#of workers:')!!}
			{!!Form::number('number_of_workers',$location->number_of_workers,['class'=>'form-control'])!!}
			</div>




		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4">
        <div class="form-group">
        {!!Form::label('owner','owner:')!!}
        {!!Form::text('owner',$location->owner,['class'=>'form-control'])!!}


			</div>

      <div class="form-group">
			{!!Form::label('number_of_animals','#of animals:')!!}
			{!!Form::number('number_of_animals',$location->number_of_animals,['class'=>'form-control'])!!}


			</div>
   </div>


	        <div class="col-md-9 col-md-offset-1">
			<div class="form-group">
			{!!Form::submit('Edit Location',['class'=>'btn btn-success form-control'])!!}
			</div>
			</div>

		{!!Form::close()!!}


</div>


@endsection


@push('body')
    <script src=""></script>
@endpush
