
<!-- atoms.select_input.blade.php -->

<select {{ $attributes->merge(['class' => 'form-select']) }} name="{{ $name }}"  $multiple>
    <option value="">None</option>
    @foreach($options as $option)
    <option  value="{{ $option->id}}" {{ $selected == $option->id ? 'selected' : '' }}>{{ $option-> $field}}</option>
    @endforeach
</select>

