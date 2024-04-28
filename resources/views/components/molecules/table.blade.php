
{{-- modecules.table.blade.php --}}
<!-- molecules.table.blade.php -->
<table class="{{ $classTable }}" id="{{ $idTable }}">
    @include('components.atoms.table_head', ['headers' => $headers])
    <!-- Đây là nơi để bạn thêm các dòng dữ liệu -->
</table>


  {{-- <tbody>
        @foreach($rows as $row)
            <tr>
                @foreach($row as $cell)
                    @include('atoms.td', ['slot' => $cell])
                @endforeach
            </tr>
        @endforeach
    </tbody> --}}
