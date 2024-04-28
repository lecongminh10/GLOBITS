@if ($errors->any())
<div class=" alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li class="my-1">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif