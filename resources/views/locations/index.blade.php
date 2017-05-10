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
	    <h1>All registered locations</h1>
		<table class="table table-striped">
		<thead>

			<th>Name</th>
			<th>Town</th>
      <th>#of workers</th>
      <th>#of animals</th>
      <th>owner</th>
		</thead>
		<tbody>
			@foreach ($locations as $location)
        @if($location->name!=null)
      <tr>
       <td>{{$location->name}}</td>
       <td>{{$location->description}}</td>
       <td>{{$location->number_of_workers}}</td>
       <td>{{$location->number_of_animals}}</td>
       <td>{{$location->owner}}</td>
       <td><s><a href="{{route('locations.show',$location->id)}}" class="btn btn-default btn-sm">View related tasks</a></td>
      </tr>
        @endif
			@endforeach
		</tbody>
		</table>
		</div>

	</div>


@endsection


@push('body')
    <script src=""></script>
@endpush
