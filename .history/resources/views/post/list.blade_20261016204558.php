<table>
	@foreach ($post as $posts)
		<tr>
			<td>{{ $posts->name }}</td>
			<td>{{ $posts->discription }}</td>
		</tr>
		<a href="/postlist/{{ $posts->id }}/delete">Delete</a>
	@endforeach
</table>