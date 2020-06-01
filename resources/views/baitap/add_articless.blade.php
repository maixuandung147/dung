<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<h1>ADD_ARTICLESS</h1>
	<form action="{{route('articless.store')}}" method="post">
		@csrf
	  <div class="form-group">
	    <label for="">name</label>
	    <input type="text" class="form-control" id="" name="name">
	  </div>
	  <div class="form-group">
	    <label for="">description</label>
	    <input type="text" class="form-control" id="" name="description">
	  </div>
	  <div class="form-group">
	    <label for="">content</label>
	    <input type="text" class="form-control" id="" name="content">
	  </div>
	  <div class="form-group">
	    <label for="">category_id</label>
		<select class="form-control" id="" name="category_id">
			@foreach($categories as $cate)
      		<option value="{{$cate->id}}">{{$cate->name}}</option>
      		@endforeach
   		 </select>
	  </div>

	  <button type="submit" class="btn btn-primary">Add_articless</button>

	</form>
</body>
</html>