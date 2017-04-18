<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'Cattle Mng System')
    </title>

    <meta charset='utf-8'>
    <link href="/css/cms.css" type='text/css' rel='stylesheet'>
	 <!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>






	@stack('head')

</head>
<body class="container">

    <header>
	    <div class="row">
			<div class="col-md-3">
				<img
				src='/images/CMSlogo.jpg'
				style='width:248px'
				alt='BillSplitter Logo'>
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


		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<ul class="nav navbar-nav">

			  <li class="active"><a href="#"><img src="/images/addNewCow.png" title="add new cow" alt="add new" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/getReport.png" title="get report" alt="get report" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/getReport2.png" title="get pasture report" alt="get pasture report" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/familyTree.png" title="get family tree" alt="get family tree" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/registerBirth.png" title="register birth" alt="register birth" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/weather.png" title="weather" alt="weather" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/sellCow.png" title="sell cow" alt="sell cow" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/workers.png" title="workers" alt="workers" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/notes.png" title="notes" alt="notes" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/savetoPDF.png" title="save to PDF" alt="save to PDF" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/treatment.jpg" title="treatment" alt="treatment" width="27" height="27" border="0"></a></li>

			</ul>

			<ul class="nav navbar-nav navbar-right">
			  <li><a href="#"><img src="/images/noteEmail.png" title="note to email" alt="noteto email" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/noteTextMsg.png" title="note to text" alt="note to text" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/help.png" title="help" alt="help" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/chat.png" title="chat" alt="chat" width="27" height="27" border="0"></a></li>
			  <li><a href="#"><img src="/images/FAQ.png" title="FAQ" alt="FAQ" width="27" height="27" border="0"></a></li>

			</ul>
		  </div>
		</nav>
    <section>
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

    @stack('body')

</body>
</html>
