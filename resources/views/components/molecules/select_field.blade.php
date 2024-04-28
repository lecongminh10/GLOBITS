

{{-- modecules.select_field --}}

<div class="form-group mb-3">
@include('components.atoms.label', ['for' => $name, 'text' => $label,'classlabel'=>$classlabel])
@include('components.atoms.select_input', ['id' => $name, 'name' => $name, 'options' => $options])
</div>
