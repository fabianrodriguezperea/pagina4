@extends('layouts.app')

@section('content')
<<<<<<< Updated upstream
@if(session()->has('msj'))
<div class ="alert alert-success" role="alert">{{session('msj')}}</div>
@else
<div class="alert alert-danger" role ="form">Error al guardar los datos </div>
@endif
=======

>>>>>>> Stashed changes
<html>
<head>
	<title>Proyecto4</title>

	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>

	<div class="col-md-4">
        @if(session()->has('msj'))

	<div class ="alert alert-success" role="alert">{{session('msj')}}</div>
	 @else
	<div class="alert alert-danger" role ="alert">{{session('msj')}} </div>
	@endif

		<form class ="form-control" action="{{route('guardarlibro')}}" method="post">

			{{csrf_field()}}
			@include('libros.error')
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




