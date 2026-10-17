<table>
	@foreach ($post as $posts)
		<tr>
			<td>{{ $posts->name }}</td>
			<td>{{ $posts->discription }}</td>
			<tr>
			<td><a href="/postlist/{{ $posts->id }}/delete">Delete</a></td>
		</tr>
		</tr>
		
		
	@endforeach
</table>