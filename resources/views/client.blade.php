@extends('layouts.app')

@section('content')
<html>
<head>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<title>Search</title>
</head>
<body>

<h1>My First Search</h1>
<br>
<div class="panel-heading">
  <input class="form-control" type="text" name="searchname" id="term" placeholder="Search">
</div>

<div class='body-panel'>
  <input type="text" name="id" id="id" class="form-control" placeholder="ID">
  <input type="text" name="name" id="name" class="form-control" placeholder="Name">
</div>


<script type="text/javascript">
$('#searchname').autocomplete({
  source: '{!!URL::route('autocomplete')!!}',
  minlenght:1,
  autoFocus:true,
  select:function(e,ui){
    alert(ui),
  }
});
</script>
</body>
@endsection
