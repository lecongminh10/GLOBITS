
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <x-atoms.title :title="'Add-Role'" class="text-center my-2" />
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            @include('components.atoms.alert')

            <form class="tablelist-form" action="{{ route('role.store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="modal-body">

                    <x-molecules.text_input_field :name="'role'" :label="'Role'" :classlabel="'form-label'"
                    :classinput="'form-control'" />
  
    
                    <x-molecules.text_input_field :name="'description'" :label="'Description'" :classlabel="'form-label'"
                    :classinput="'form-control'" />
 

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">

                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        {{-- <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button> --}}
                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />
          
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>