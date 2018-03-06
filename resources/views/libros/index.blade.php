@extends('layouts.app')

@section('content')
<html>
<head>
	<title>Proyecto4</title>
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

	<div class="col-md-6">
		<form class ="form-control" action="{{route('guardarlibro')}}" method="post">
			{{csrf_field()}}
		<label> Nombre del libro</label>
		<input type="tex" name ="nombre" class="form-control" > 

		<label> Autor</label>
		<input type="tex" name ="autor" class="form-control"> 

		<label> Editorial</label>
		<input type="tex" name ="editorial" class="form-control"> 
		<br><br>

		<button type="submit" class="btn btn-primary"> Guardar</button>	
		</form>
	</div>
	<form class="form-horizontal"  action="{{ route('listarlibro') }}" method="post">
	{{csrf_field()}}
<button type="submit" class ="btn btn-primary">mostrar libros </button>
	</form>
	


</body>
</html>
@endsection