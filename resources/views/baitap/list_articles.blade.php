<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div style="font-size: 3em; margin: 0 36%; display: block;text-align: center">LIST ARTICLESS</div>
<div class="container">
	<a href="{{route('list-category')}}"><button type="button" class="btn btn-primary">CATEGORY</button></a>
	<a href="{{route('articless.create')}}"><button type="button" class="btn btn-danger">Add_Articless</button></a>
	<table class="table">
		<thead>
		<tr>
		<th scope="col">ID</th>
		<th scope="col">NAME</th>
		<th scope="col">DESCRIPTION</th>
		<th scope="col">CONTENT</th>
		<th scope="col">CATEGORY_ID</th>
		<th scope="col" colspan="2">Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($articless as $art)
		<tr>
			<th scope="row">{{$art->id}}</th>
			<td>{{$art->name}}</td>
			<td>{{$art->description}}</td>
			<td>{{$art->content}}</td>
			<td>{{$art->category_id}}</td>
			<td><a href="{{route('articless.edit',$art->id)}}"><button type="button" class="btn btn-success">Edit</button></a></td>
			<td>
				<form action="{{route('articless.destroy', $art->id)}}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-secondary">Delete</button>
				</form>
			</td>
		
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
</body>
</html>