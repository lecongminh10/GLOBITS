@extends('layouts.app')

@section('title', 'Create - Company')

@section('content')


    <div class="row justify-content-center ">

        <div class="col-md-7">

            <div class="card">
                {{-- <h3 class="text-center my-2">Add-Company</h3> --}}
                <x-atoms.title :title="'Add-Company'" class="text-center my-2" />
                <div class="card-header align-items-center">
                    @include('components.atoms.alert')
                </div>
                <div class="card-body">
                    <form action="{{ route('company.store') }}" method="POST">
                        @csrf
                        {{-- <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" class="form-control" id="code" name="code" >
                    </div> --}}
                        <x-molecules.text_input_field :name="'code'" :label="'Code'" :classlabel="'form-label'"
                            :classinput="'form-control'" />


                        {{-- <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" >
                    </div> --}}
                        <x-molecules.text_input_field :name="'name'" :label="'Name'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        {{-- <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" >
                    </div> --}}
                        <x-molecules.text_input_field :name="'address'" :label="'Address'" :classlabel="'form-label'"
                            :classinput="'form-control'" />

                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />

                        <a href="{{ route('company.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
