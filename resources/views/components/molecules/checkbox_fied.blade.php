<!-- Include the checkbox atom -->
{{-- @include('atoms.checkbox', ['id' => $name, 'name' => $name, 'label' => $label, 'checked' => $checked ?? false])
 --}}

<x-atoms.checkbox :id="$name" :name="$name" :label="$label" :checked="$checked ?? false" >
