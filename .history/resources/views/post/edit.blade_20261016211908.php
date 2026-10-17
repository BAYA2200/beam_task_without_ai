<form action="/postlist/{{ $post->id }}" method="POST">
    @csrf
    @method('PUT')
    <input name="name" value="{{ $post->name }}">
	<input name="surname" value="{{ $post->discription }}">
	<input type="submit">
</form>