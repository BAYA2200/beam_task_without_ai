<table>
	@foreach ($post as $posts)
		<tr>
			<td>{{ $posts->name }}</td>
			<td>{{ $posts->discription }}</td>
		</tr>
		<a href="/postdelete/{{ $posts->$id }}/">Delete</a>
	@endforeach
</table>