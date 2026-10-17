<style type="text/css">
   TABLE {
    width: 300px; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   TD, TH {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }
   
  </style>
<table>
	@foreach ($post as $posts)
		<tr>
			<td>{{ $posts->name }}</td>
			<td>{{ $posts->discription }}</td>
			<td><a href="/postlist/{{ $posts->id }}/delete">Delete</a></td>
			<td><a href="/postlist/{{ $posts->id }}/edit">edit</a></td>
		</tr>
		
	@endforeach
</table>