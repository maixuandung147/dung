<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<h1>EDIT ARTICLESS</h1>
	<form action="{{route('articless.update', $articless->id)}}" method="post">
		@csrf
		@method('PUT')
	  <div class="form-group">
	    <label for="">name</label>
	    <input type="text" class="form-control" id="" name="name" value="{{$articless->name}}">
	  </div>
	  <div class="form-group">
	    <label for="">description</label>
	    <input type="text" class="form-control" id="" name="quantity" value="{{$articless->description}}">
	  </div>
	  <div class="form-group">
	    <label for="">content</label>
	    <input type="text" class="form-control" id="" name="quantity" value="{{$articless->content}}">
	  </div>
	  <div class="form-group">
	    <label for="">category_id</label>
		<select class="form-control" id="" name="category_id" >
			@foreach($categories as $cate)
      		<option value="{{$cate->id}}" {{ $articless->category_id == $cate->id ? 'selected' : ''}}>{{$cate->name}}</option>
      		@endforeach
   		 </select>
	  </div>

	  <button type="submit" class="btn btn-primary">Edit_articless</button>

	</form>
</body>
</html>