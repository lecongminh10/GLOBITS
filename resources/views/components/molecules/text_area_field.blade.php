<div class=" form-group mb-3">
    <x-atoms.label :for="$name" :text="$lable" />
    <x-atoms.text_area :id="$name" :name="$name" :row="$row ?? 4" :cols="$cols ?? 50" :value="$value ?? ''" />
</div>
