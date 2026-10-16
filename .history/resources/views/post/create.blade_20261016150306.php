<form action="/postcreate" method="POST">
	@csrf
    <input name="name">
	<input name="discription">
        <select name="user_id" >

    @foreach ($users as $user)
	


  <option>{{$user->name}} </option>



    @endforeach
        </select>

	<input type="submit">

</form>