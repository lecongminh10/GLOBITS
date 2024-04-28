{{-- @extends('layouts.app')
@section('title')
    Update- Country
@endsection
@section('content')
    <div class="row">
        <h3 class="text-center my-3">Update-Country</h3>
        <a href="{{route('country.index')}}" class="col-1 my-3 btn text-black "><i class="bi bi-arrow-left-circle-fill"></i></a>
    </div>
    <div class="row justify-content-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-md-6">
          <form action="/country/{{$country ->id}}/update" method="POST">
            @csrf
            
            <div class="mb-3">
              <label for="code" class="form-label">Code</label>
              <input type="text" class="form-control" id="code" name="code" value="{{$country ->code}}">
            </div>
            
          
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$country ->name}}">
            </div>
  
         
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3">{{$country ->description}}</textarea>
            </div>
  
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
@endsection --}}
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
              <div class="modal-body">
                  {{-- <div class="mb-3" id="modal-id">
                      <label for="id-field" class="form-label">Code</label>
                      <input type="text" id="code" class="form-control" placeholder="Code"  name="code"/>
                  </div> --}}
                  <x-molecules.text_input_field :name="'code'" :label="'Code'" :classlabel="'form-label'"
                  :classinput="'form-control'" :value="$country->code"/>

                  {{-- <div class="mb-3">
                      <label for="customername-field" class="form-label"> Name</label>
                      <input type="text" id="name" class="form-control" placeholder=" Name"  name="name"/>
                      
                  </div> --}}
                  <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                  :classinput="'form-control'" :value="$country->name"/>

                  {{-- <div class="mb-3">
                      <label for="" class="form-label">Description</label>
                      <input type="text" id="description" class="form-control" placeholder="Enter description" name="description"/>
                      
                  </div> --}}
                  <x-molecules.text_input_field :name="'description'" :label="'Description'" :classlabel="'form-label'"
                  :classinput="'form-control'" :value="$country->description"/>
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
