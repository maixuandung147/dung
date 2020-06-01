<form action="{{route('page.user.store')}}" method="POST">
	@csrf
	<label for="">Name</label>
	<input type="text" name="name">
	<label for="">Email</label>
	<input type="text" name="email">
	<button type="submit">Create</button>
</form>