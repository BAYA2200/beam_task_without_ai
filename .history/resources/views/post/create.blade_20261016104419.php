<form action="/postcreate" method="POST">
	@csrf
	<input name="name">
	<input name="discription">
    {{-- <input name="user_id"> --}}
@foreach ($users as $user)
    <select>
  <option name="user_id">{{$user->user_id}}   </option>
  <option name="user_id">{{$user->user_id}}   </option>

@endforeach

	<input type="submit">
</form>