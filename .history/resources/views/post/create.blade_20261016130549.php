<form action="/postcreate" method="POST">
	@csrf
    <input name="name">
	<input name="discription">
    @foreach ($users as $user)
	

    <select name="user_id" >

  <option value="user_id">{{$user->id}}   </option>


    </select>

	<input type="submit">
    @endforeach

</form>