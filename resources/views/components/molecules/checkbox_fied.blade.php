<!-- Include the checkbox atom -->
@include('atoms.checkbox', ['id' => $name, 'name' => $name, 'label' => $label, 'checked' => $checked ?? false])
