<form action="/postcreate" method="POST">
	@csrf
    @foreach ($users as $user)
	<input name="name">
	<input name="discription">
    {{-- <input name="user_id"> --}}

    <select>
  <option name="user_id">{{$user->name}}   </option>
  <option name="id">{{$user->id}}   </option>
  <option name="id">{{$user->id}}   </option>


    </select>

	<input type="submit">
    @endforeach

</form>