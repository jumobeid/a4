@extends('layouts.main')


@section('title')
    Show all Animals

@endsection


@push('head')
    <link href="" type='text/css' rel='stylesheet'>
@endpush


@section('content')
<div class="row">
<div class="col-md-6 col-md-offset-2">
  <div class="well">
    {!!Form::open(['route'=>'animals.store','method'=>'POST','class'=>'form-horizantal'])!!}
    {{csrf_field()}}


    <div class="row">

      <div class="col-md-1"></div>

      <div class="col-md-4">

        <div class="form-group">
        {!!Form::label('name','name:')!!}
        {!!Form::text('name','',['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
        {!!Form::label('gender','gender:')!!}
        {!!Form::select('gender', array('Bull' => 'Bull', 'Calf' => 'Calf', 'Cow' => 'Cow'),'',['class'=>'selectpicker form-control'])!!}

        </div>

      </div>

        <div class="col-md-3 col-md-offset-1">
        <div class="form-group">
        {!!Form::submit('Save Animal',['class'=>'btn btn-success topmargin form-control'])!!}
        </div>
        </div>

      {!!Form::close()!!}
  </div>
</div>
</div>
@endsection


@push('body')
    <script src=""></script>
@endpush
