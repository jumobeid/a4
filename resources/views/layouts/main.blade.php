<!DOCTYPE html>
<html>
@include('partials._head')
<body class="container">

    <header>
	    <div class="row">
			<div class="col-md-3">
			<a href="/">
				<img
				src='/images/CMSlogo.jpg'
				style='width:248px'
				alt='BillSplitter Logo'
				title="home"></a>
			</div>

			<div class="col-md-5">
				<div class="page-header">
					<h1>Cattle Management System</h1>
				</div>
				<div class="col-md-5">
						<p>Welcome Administrator</p>
				</div>
			</div>

			<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
			  <table class="table table-striped">
				<tbody>
				   <tr>
				    <th>Pasture:</th>
						<td>Al Moroj</td>
				   </tr>
				   <tr>
					<th>Herd:</th>
						<td>Snow White</td>
				   </tr>
				   <tr>
					<th>Number of Animals:</th>
						<td>58</td>
				   </tr>
				   <tr>
					<th>Total No of Coworkers:</th>
						<td>4</td>
				   </tr>
				   <tr>
					<th>Owner:</th>
						<td>Sead Salem</td>
				   </tr>
				   <tr>
					<th>Location:</th>
						<td>Al Ain</td>
				   </tr>
				</tbody>
			  </table>
			</div>
			</div>
			</div>
		</div>
    </header>

	@include('partials._nav')

    <section>
	@include('partials._messages')
    @yield('content')

    </section>

    <footer>
	 <div class="class="container">
	  <div class="row" id="sidebarcenter">
	   <div class="well">&copy; {{ date('Y') }}</div>
      </div>
	 </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!--@stack('body')-->

</body>
</html>
