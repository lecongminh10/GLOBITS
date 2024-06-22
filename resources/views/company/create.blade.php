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

                        <x-molecules.text_input_field 
                        :name="'code'" 
                        :label="'Code'" 
                        :classlabel="'form-label'"
                        :classinput="'form-control'" />

                        <x-molecules.text_input_field 
                        :name="'name'" 
                        :label="'Name'" 
                        :classlabel="'form-label'"
                        :classinput="'form-control'" />

                        <x-molecules.text_input_field 
                        :name="'address'" 
                        :label="'Address'" 
                        :classlabel="'form-label'"
                        :classinput="'form-control'" />

                        <x-atoms.button :class="'btn btn-primary '" :text="'Submit'" />

                        <a href="{{ route('company.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
