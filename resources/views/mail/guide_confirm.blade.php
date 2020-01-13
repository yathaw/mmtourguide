<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 d-inline"> 
				<img src="{{$message->embed(public_path('logo.gif'))}}" class="img-fluid" style="width: 150px; height: 100px;"> 
			</div>
		</div>

		<div class="row">
			<h2> Hi, {{ $data['name'] }} </h2>
			<p> Thank you, for registering for MM Tour Guide. </p>
			
			<p> Now You are our members! </p>
			
			<a href="http://localhost:8000/login" class="btn btn-success btn-block" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;"> 
				 Sign In 
			</a>


		</div>

	</div>
	

</body>
</html>