
@include('atoms.label', ['for' => $name, 'text' => $label])

@include('atoms.text_area', ['id' => $name, 'name' => $name, 'rows' => $rows ?? 4, 'cols' => $cols ?? 50, 'value' => $value ?? ''])
