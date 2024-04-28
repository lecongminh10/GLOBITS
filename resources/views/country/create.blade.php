
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header bg-light p-3">
              {{-- <h5 class="modal-title" id="exampleModalLabel">Add Country</h5> --}}

              <x-atoms.title :title="'Add Country'" class="text-center my-2" />

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
          </div>

          {{-- @if ($errors->any())
          <div class="row alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif --}}

          @include('components.atoms.alert')

          <form class="tablelist-form" action="{{route('country.store')}}" method="POST" autocomplete="off">
              @csrf
              <div class="modal-body">

                  {{-- <div class="mb-3" id="modal-id">
                      <label for="id-field" class="form-label">Code</label>
                      <input type="text" id="id-field" class="form-control" placeholder="Code"  name="code"/>
                  </div> --}}

                  <x-molecules.text_input_field :name="'code'" :label="'Code'" :classlabel="'form-label'"
                  :classinput="'form-control'" />

                  {{-- <div class="mb-3">
                      <label for="customername-field" class="form-label"> Name</label>
                      <input type="text" id="customername-field" class="form-control" placeholder=" Name"  name="name"/>
                  </div> --}}

                  <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                  :classinput="'form-control'" />

                  {{-- <div class="mb-3">
                      <label for="" class="form-label">Description</label>
                      <input type="text" id="" class="form-control" placeholder="Enter description" name="description"/>
                  </div> --}}

                  <x-molecules.text_input_field :name="'description'" :label="'Description'" :classlabel="'form-label'"
                  :classinput="'form-control'" />

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