
{{-- components/molecules/text_input_field.blade.php --}}
<div class="form-group mb-3">
    @include('components.atoms.label', ['for' => $name, 'text' => $label ,'classlabel'=>$classlabel])
    @include('components.atoms.text_input', ['id' => $name, 'name' => $name, 'value' => $value ?? ''])
</div>

