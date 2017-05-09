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
	    <h1>All registered animals</h1>
		<table class="table table-striped">
		<thead>

			<th>Name</th>
			<th>Gender</th>

		</thead>
		<tbody>
			@foreach ($animals as $animal)
      <tr>
       <td>{{$animal->name}}</td>
       <td>{{$animal->gender}}</td>
       <td><s><a href="{{route('animals.show',$animal->id)}}" class="btn btn-default btn-sm">View related tasks</a></td>
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
