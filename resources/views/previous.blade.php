<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
<div class="card mt-3">
<div class="card-header"><h2>Enter your previous address</h2></div>
<div class="card-body">
<form action="{{ url('add-remove-multiple-input-fields') }}" method="POST">
@csrf
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if (Session::has('success'))
<div class="alert alert-success text-center">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
<p>{{ Session::get('success') }}</p>
</div>
@endif
<table class="table table-bordered" id="dynamicAddRemove">  

</table> 
<button type="submit" class="btn btn-success">Save</button>
</form>
</div>
</div>
</div>

</body>
</html>