

<select class="form-select" name="{{ $name }}" {{$multiple}}>
    <option value="">None</option>
    @foreach($options as $option)
    <option value="{{ $option['id'] }}" {{ $selected == $option['id'] ? 'selected' : '' }}>
        {{ $option['value'] }}
    </option>
    @endforeach
</select>


