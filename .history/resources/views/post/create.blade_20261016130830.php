<form action="/postcreate" method="POST">
	@csrf
    <input name="name">
	<input name="discription">
    @foreach ($users as $user)
	

    <select name="user_id" >

  <option value="user_id"><p>{{$user->id}} </option>


    </select>

    @endforeach
	<input type="submit">

</form>