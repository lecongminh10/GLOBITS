
<div class="modal fade" id="showModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header bg-light p-3">
              <h5 class="modal-title" id="exampleModalLabel">Edit Country</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
          </div>
          @if ($errors->any())
          <div class="row alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <form class="tablelist-form" method="POST" autocomplete="off" id="edit-country">
              @csrf
              @method('PUT')
              <div class="modal-body">
  
                  <x-molecules.text_input_field :name="'code_up'" :label="'Code'" :classlabel="'form-label'" 
                  :classinput="'form-control'" />

                  <x-molecules.text_input_field :name="'name_up'" :label="'Name'" :classlabel="'form-label'" 
                  :classinput="'form-control'" />

                  <x-molecules.text_input_field :name="'description_up'" :label="'Description'" :classlabel="'form-label'" 
                  :classinput="'form-control'" />
                  
                  {{-- <div class="form-group mb-3">
                    <label for="code" >Code</label>
                    <input type="text" class="form-controll" id="code">
                  </div>
                  <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-controll" id="name">
                  </div>
                  <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <input type="text" class="form-controll" id="description">
                  </div> --}}
              </div>
              <div class="modal-footer">
                  <div class="hstack gap-2 justify-content-end">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                      <x-atoms.button :class="'btn btn-primary '" :text="'Update'" />
        
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>
