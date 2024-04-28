<!-- select_input.blade.php -->
{{-- <select >
    @foreach($options as $option)
        <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
    @endforeach
</select> --}}

<!-- atoms.select_input.blade.php -->

<select {{ $attributes->merge(['class' => 'form-select', 'multiple' => $multiple]) }} name="{{ $name }}">
    <option value="">None</option>
    @foreach($options as $option)
    <option  value="{{ $option->id}}">{{ $option->{$field} }}</option>
    @endforeach
</select>

