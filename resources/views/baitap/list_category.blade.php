<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div style="font-size: 3em; margin: 0 36%; display: block;text-align: center">LIST CATEGORY</div>
<div class="container">
	<a href="{{route('list-articless')}}"><button type="button" class="btn btn-primary">ARTICLES</button></a>
	<table class="table">
		<thead>
		<tr>
		<th scope="col">ID</th>
		<th scope="col">NAME</th>
		</tr>
		</thead>
		<tbody>
		@foreach($categories as $cate)
		<tr>
		<th scope="row">{{$cate->id}}</th>
		<td><a href="{{route('list-articles-by-cate',$cate->id)}}">{{$cate->name}}</a></td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
</body>
</html>