<form action="/postcreate" method="POST">
	@csrf
    <input name="name">
	<input name="discription">
    {{-- <input name="user_id"> --}}
    @foreach ($users as $user)
	

    <select>

  <option name="id" value="{{$user->id}}" >{{$user->id}}   </option>


    </select>

	<input type="submit">
    @endforeach

</form>