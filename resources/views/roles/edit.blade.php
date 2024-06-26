
<div class="modal fade" id="showModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <x-atoms.title :title="'Edit-Role'" class="text-center my-2" />
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            @include('components.atoms.alert')

            <form id="edit-role" class="tablelist-form"  method="POST" autocomplete="off">
                @csrf
                <div class="modal-body">

                    <x-molecules.text_input_field :name="'role'" :label="'Role'" :classlabel="'form-label'"
                    :classinput="'form-control'" :value="$role ->role"/>
  
    
                    <x-molecules.text_input_field :name="'description'" :label="'Description'" :classlabel="'form-label'"
                    :classinput="'form-control'"  :value="$role ->description"/>
 

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">

                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>