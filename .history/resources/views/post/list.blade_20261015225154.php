<table>
	@foreach ($post as $posts)
		<tr>
			<td>{{ $posts->name }}</td>
			<td>{{ $posts->discription }}</td>
		</tr>
	@endforeach
</table>