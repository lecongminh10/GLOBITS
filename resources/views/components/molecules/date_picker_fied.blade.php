<!-- Include the label atom -->
<div class="form-group mb-2">
    @include('components.atoms.label', ['for' => $name, 'text' => $label])
<!-- Include the date picker atom -->
@include('components.atoms.date_input', ['id' => $name, 'name' => $name,'class' =>$class,'value' => $value ?? ''])
</div>