
<div class="form-group mb-3">
    <x-atoms.label :for="$name" :text="$label" :classlabel="$classlabel" />
    <x-atoms.text_input :id="$name" :name="$name" :value="$value ?? ''" :classinput="$classinput" />
</div>

