

{{-- atoms.table_head.blade.php --}}

<!-- atoms.table_head.blade.php -->
<thead class="{{$idClassThead}}">
    <tr>
        @foreach($headers as $header)
            @include('components.atoms.tableheader', ['slot' => $header])
        @endforeach
    </tr>
</thead>

