<form action="/postcreate" method="POST">
	@csrf
    <input name="name">
	<input name="discription">
        <select name="user_id" >

    @foreach ($users as $user)
	


  <option><p>{{$user->name}}</p>{{$user->id}} </option>



    @endforeach
        </select>

	<input type="submit">

</form>