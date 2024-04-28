{{-- @extends('layouts.app')

@section('title', 'Edit Role')

@section('content')
    <div class="row">
        <h3 class="text-center">Edit Role</h3>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('role.update' , $role->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control" id="role" name="role"  value="{{$role ->role}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input class="form-control" id="description" name="description" type="text" value="{{$role ->description}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('role.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection --}}


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
                        {{-- <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button> --}}
                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />
          
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>