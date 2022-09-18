<!doctype html>
<html lang="en">
  <head>
  	<title>Reports</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('table/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Reports</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">

						<table class="table">
						  <thead class="thead-dark">

                          
						    <tr>
						      <th>Sender Name</th>
						      <th>Country</th>
						      <th>Category</th>
						      <th>Title</th>
						      <th>Content</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">
                            @foreach($reports as $report)
                            <td>{{$report->sender->name}}</td>
						      <td>{{$report->country}}</td>
						      <td>{{$report->category}}</td>
						      <td>{{$report->title}}</td>
						      <td>{{$report->content}}</td>
						    </tr>
						    @endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('table/js/jquery.min.js')}}"></script>
  <script src="{{asset('table/js/popper.js')}}"></script>
  <script src="{{asset('table/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('table/js/main.js')}}"></script>

	</body>
</html>

