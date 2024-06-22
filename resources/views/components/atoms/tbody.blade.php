<!-- components.atoms.tbody -->
<tbody>
    @foreach ($rows as $row)
        <tr>
            @foreach ($columns as $column)
                <td>{{ $row->$column }}</td>
            @endforeach
        </tr>
    @endforeach
</tbody>
