@extends('layouts.main')


@section('title')
    Cattle Mng System
@endsection


@push('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
 <div class="row">
		  <div class="col-md-8">
			<div class="well" id="sidebarcenter">
			<div id="sidebartitle">Production</div>

			 <table style="width:100%">
			   <tr>
				<td><img src="/images/upleft.png" title="" alt="" width="142" height="119" border="0"></td>
				<td><img src="/images/breeding.png" title="breeding" alt="breeding" width="142" height="119" border="0"></td>
				<td><img src="/images/upright.png" title="" alt="" width="142" height="119" border="0"></td>
			  </tr>
			   <td></td>
				<td>breeding</td>
				<td></td>
			  <tr>
				<td><a href="#"><img src="/images/pregnancyCheck.png" title="pregnancy check" alt="pregnancy check" width="142" height="119" border="0"></a></td>

				<td><a href="#"><img src="/images/milkProd.png" title="milk production" alt="milk production" width="142" height="119" border="0"></a></td>
				<td><a href="#"><img src="/images/weaning.png" title="weaning" alt="weaning" width="142" height="119" border="0"></a</td>
			  </tr>
			  <tr>
			    <td>pregnancyCheck</td>
				<td>milk production</td>
				<td>weaning</td>
			  </tr>
			  <tr>
				<td><img src="/images/downleft.png" title="" alt="" width="142" height="119" border="0"></td>
				<td><img src="/images/delivery.png" title="delivery" alt="delivery" width="142" height="119" border="0"></td>
				<td><img src="/images/downright.png" title="" alt="" width="142" height="119" border="0"></td>
			  </tr>
			  <tr>
			    <td></td>
				<td>delivery</td>
				<td></td>
				</tr>
			</table>

			</div>

			</div>
		  <div class="col-md-4">
			<div class="well" id="sidebars">
			  <div id="sidebartitle">Purchase</div>
			  <li><a href="#"><img src="/images/purchase.png" title="purchase" alt="purchase" width="167" height="95" border="0"></a></li>
			  <li>purchase</li>
			  <li><a href="#"><img src="/images/incomeExpense.png" title="income and expense" alt="income and expense" width="167" height="95" border="0"></a></li>
			  <li>income and expense</li>
			  <li><a href="#"><img src="/images/salesRemoval.png" title="sales and removal" alt="sales and removal" width="167" height="95" border="0"></a></li>
			  <li>sales and removal</li>
			</div>

			</div>
		</div>

        <div class="row">
		  <div class="col-md-6">
			<div class="well">
			 <div id="sidebartitle">Management</div>

				<div class="row">

				 <div class="row">
			       <div class="col-md-2"></div>
				  <div class="col-md-3"id="sidebarleft">
					<li><a href="#"><img src="/images/management.png" title="management" alt="management" width="167" height="95" border="0"></a></li>
					<li>management</li>
				  </div>

				 </div>

				 <div class="row">

				  <div class="col-md-4"></div>
				  <div class="col-md-3" id="sidebarright">
					<li><a href="#"><img src="/images/SalesPane.png" title="sales pane" alt="sales pane" width="167" height="95" border="0"></a></li>
					<li>sales pane</li>
				  </div>

				 </div>

			    </div>

			</div>

		  </div>

		  <div class="col-md-6">
			<div class="well">
			  <div id="sidebartitle">Treatment</div>
				  <div class="row" id="sidebarcenter">
				  <li><a href="#"><img src="/images/assignTask.png" title="assign task" alt="assign task" width="167" height="95" border="0"></a></li>
				  <li>assign task</li>
				  </div>
			  <div class="row">
				  <div class="col-md-3 col-md-offset-2"id="sidebarleft">
				  <li><a href="#"><img src="/images/updateRanch.png" title="update ranch" alt="update ranch" width="139" height="128" border="0"></a></li>
				  <li>update ranch</li>
				  </div>
				  <div class="col-md-3 col-md-offset-2" id="sidebarright">
				  <li><a href="#"><img src="/images/treatment.png" title="treatment" alt="treatment" width="139" height="128" border="0"></a></li>
				  <li>treatment</li>
				  </div>
			  </div>
				  <div class="row" id="sidebarcenter">
				  <li><a href="#"><img src="/images/assignWorkers.png" title="assign workers" alt="assign workers" width="139" height="128" border="0"></a></li>
				  <li>assign workers</li>
				  </div>
			  </div>
			 </div>
		  </div>
		</div>
	 </div>



@endsection


@push('body')
    <script src="/js/books/show.js"></script>
@endpush
